<?php 
    session_start();
    if(!isset($_SESSION['uname'])){
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
            include('ajax/connection.php');
            $id = $_GET['club_id'];
            $query = $db->prepare('SELECT club_name from clubname WHERE club_id = ?');
            $data = array($id);
            $execute = $query->execute($data);
            if($execute){
                $datarow = $query->fetch();
            }
        ?>
    <title><?php echo $datarow['club_name']; ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/clubDash.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/clubPage.css">
    <link rel="stylesheet" href="css/events_list.css">
    <link rel="stylesheet" href="css/getmembers.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <section id="top-nav">
        <div class="col-sm-12 paddoff">
            <div class="topnav">    
                <i class="fa fa-bars non-active" onclick="show();"></i>
                <a href="logout.php">Log out</a></i>    
                <a href="profile_page.php"><?php echo $_SESSION['uname']?></a></i>
            </div>
        </div>
    </section>
    <section id="side-nav">
        <div class="paddoff">
            <div class="contain">
                <div class="paddoff">
                    <div class="sidenav" id="Ham">
                        <a href="about.php"><span style="padding: 4px;"><i class="fa fa-info"></i></span> About</a>
                        <a href="dashboard.php"><span style="padding: 4px;"><i class="fa fa-home"></i></span>Dashboard</a>
                        <a href="profile.php"><span style="padding: 4px;"><i class="fa fa-user-circle"></i></span>Profile</a>
                        <a href="blog.php"><span style="padding: 4px;"><i class="fa fa-pencil"></i></span>Blog</a>
                        <a href="resourse.php"><span style="padding: 4px;"><i class="fa fa-pencil"></i></span>Resourse</a>
                        <a href="clubDash.php"><span style="padding: 4px;"><i class="fa fa-cog"></i></span>Clubs</a>
                        <a href="contact.php"><span style="padding: 4px;"><i class="fa fa-phone"></i></span>Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="clubpage">
    <div class="Club-Page">        
        <div class="col-sm-12 paddoff">
            <div class="contain"> 
                <div class="col-sm-3">
                    <div id="events" class="scroll">
                        <a class="button-33" id="contact">Add Events</a>
                        <div id="contactForm">
                            <h1>Add an Up-comming Event</h1>
                            <form name="eventForm">
                                <input id="name" name="name" placeholder="Event Name" type="text" required />
                                <input id="date"name="date" placeholder="Date" type="date" required />
                                <input id="time" name="time" placeholder="Time" type="time" required />
                                <textarea id="about" name="about" class="About-Event" placeholder="About Event"></textarea>
                                <input id="link" name = "link" type="link" required placeholder="Enter link to the Event"/>
                                <input class="formBtn" type="submit" onclick="connectEventsToDataBase();" />
                               <input class="formBtn" type="reset" />
                            </form>
                        </div>

                        <div id="club-events"  >
                        </div>
                    </div>
                    
                </div>
                <div class="col-sm-7">
                    <div class=" scroll discussion">
                        <div class="post">
                                <div class="Add-post">
                                    <img id="e" class="img-disp" onclick= "events();"src="img/calendar.png" alt="" > 
                                    <span id="u_icon" class="user-icon"></span>
                                    <input type="text" placeholder="Start a Post" id="StartPost"/>
                                    <img id="m" class="img-disp" onclick="members();" src="img/group.png" alt="">
                                </div>
                                <div>
                                    <form id="discussion_form" enctype='multipart/form-data'>
                                        <div class="post-content-block">
                                            <h3>Add a Post</h3>
                                            <textarea id="content" name="content" placeholder="Write Here..." class="post-area"></textarea>
                                            <input type="file" id="img" name="img">
                                            <input type="hidden" value="<?php echo $_GET['club_id']; ?>" name="club_id" id="club_id">
                                            <input type="submit" value="Post" id="post" onclick="AddPost();"/>
                                        </div>
                                    </form>
                                </div>
                                <div id="discussion-section">

                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2  ">
                    <div id="member" class="scroll">
                    </div>
                </div>        
            </div>
        </div>
</section>
<script src = "DeleteClubs.js"></script>
    <script src = "joinmembers.js"></script>
    <script src= "ExitClub.js"></script>
    <script src="Hamburger.js"></script>
    <Script type="text/javascript">
        function events(){
            var eventsSection = document.getElementById('events');
            eventsSection.style.display = "block";
            eventsSection.classList.add('forEvents');
        }
        function members(){
            var memberSection = document.getElementById('member');
            memberSection.style.display = "block";
            memberSection.classList.add('forMembers');
        }
    </script>
    <script type="text/javascript">
        userimage();
        function userimage(){
            var token = "<?php echo password_hash('profile-photo', PASSWORD_DEFAULT); ?>";
            console.log('check1');
            $.ajax({
                type:"POST",
                url:"ajax/discussion.php",
                data: {token: token},
                success: function(data){
                    $('#u_icon').html(data);
                }
            });
            console.log('check1');
        }

            function connectEventsToDataBase(){
                var id = '<?php echo $_GET['club_id']; ?>';
                var name = document.getElementById('name').value;
                var date = document.getElementById('date').value;
                var time = document.getElementById('time').value;
                var about = document.getElementById('about').value;
                var link = document.getElementById('link').value;
                alert(name);
                $.ajax({
                        type: "POST",
                        url: "ajax/UploadEvents.php",
                        data: {club_id:id, name:name, date:date, time:time, about:about, link:link},
                        success: function(data){
                            if(data == 0)
                            {
                                alert("data inserted successfully");
                            }
                            else if(data == 1)
                            {
                                alert('data not inserted');
                            }
                            else
                            {
                                alert(data);
                            }
                        }
                    });
            }
        connectEvents();
            function connectEvents(){
                var id = <?php echo $_GET['club_id'] ?>;
                var token = "<?php echo password_hash('Events', PASSWORD_DEFAULT); ?>";
                $.ajax({
                    type: "POST",
                    url: "ajax/getEvents.php",
                    data: {club_id:id},
                    success: function(data){
                        $('#club-events').html(data);
                    }
                });
            }
        ShowMembers();
            function ShowMembers(){
                var id = <?php echo $_GET['club_id'] ?>;
                var token = "<?php echo password_hash('Members', PASSWORD_DEFAULT); ?>";
                $.ajax({
                    type: "POST",
                    url: "ajax/getMembers.php",
                    data: {club_id:id,token:token},
                    success: function(data){
                        $('#member').html(data);
                    }
                });
                console.log("check");
            }
        function AddPost(){
            var form = document.getElementById("discussion_form");
            var form_data = new FormData(form);
            $.ajax({
                type: "POST",
                url: "ajax/AddPost.php",
                data:form_data,
                contentType: false,
                processData: false,
                success: function(data){
                    if(data == 0)
                    {
                        alert('data inserted successfully');
                    }
                    else if(data == 1)
                    {
                        alert('data not inserted');
                    }
                    else if(data != 2)
                    {
                        alert(data);
                    }
                }
            });
        }
        discussionData();
        function discussionData(){
            var id = <?php echo $_GET['club_id'] ?>;
            var token = "<?php echo password_hash('Discussion', PASSWORD_DEFAULT); ?>";
            $.ajax({
                type: "POST",
                url: "ajax/discussionData.php",
                data: {token:token, club_id:id},
                success: function(data){
                    $('#discussion-section').html(data);    
                }
            });
        }
    </script>

    <script type="text/javascript">
        $(function() {
            // contact form animations
            $('#contact').click(function() {
                $('#contactForm').fadeToggle();
            })
            $(document).mouseup(function (e) {
                var container = $("#contactForm");

                if (!container.is(e.target) // if the target of the click isn't the container...
                    && container.has(e.target).length === 0) // ... nor a descendant of the container
                {
                    container.fadeOut();
                }
            });
        });
        $(function() {
            // contact form animations
            $('#StartPost').click(function() {
                $('.post-content-block').fadeToggle();
            })
            $(document).mouseup(function (e) {
                var container = $(".post-content-block");

                if (!container.is(e.target) // if the target of the click isn't the container...
                    && container.has(e.target).length === 0) // ... nor a descendant of the container
                {
                    // container.style.display = "none !important";
                    container.fadeOut();
                }
            });
        });
        $(function() {
            $(document).mouseup(function (e) {
                var container = $("#events");
                if(window.innerWidth < 767){
                    if (!container.is(e.target) && container.has(e.target).length === 0) // if the target of the click isn't the container...) // ... nor a descendant of the container
                    {
                        container.fadeOut();
                    }
                }
            });
        });
        $(function() {
            $(document).mouseup(function (e) {
                var container = $("#member");
                if(window.innerWidth < 767){
                    if (!container.is(e.target) && container.has(e.target).length === 0) // if the target of the click isn't the container...) // ... nor a descendant of the container
                    {
                        container.fadeOut();
                    }
                }
            });
        });
    </script>
    <script type="text/javascript">
        $('form').submit(function(e) {
            e.preventDefault();
        });
    </script>
</body>
</html>