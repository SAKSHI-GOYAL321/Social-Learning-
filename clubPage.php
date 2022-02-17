<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    
    <!-- <link rel="stylesheet" href="css/clubDash.css"> -->
    <!-- <link rel="stylesheet" href="css/dashboard.css"> -->
    <link rel="stylesheet" href="css/clubPage.css">
    <link rel="stylesheet" href="css/events_list.css">
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
                <a href="#"><?php echo $_SESSION['uname']?></a></i>
            </div>
        </div>
    </section>
    <section id="clubpage">
    <div class="Club-Page">        
        <div class="col-sm-12 paddoff">
            <div class="contain"> 
                <div class="col-sm-3 paddoff">
                    <div class="events">
                        <a class="button-33" id="contact">Add Events</a>
                        <div id="contactForm">
                            <h1>Add an Up-comming Event</h1>
                            <form name="eventForm">
                                <input id="name" name="name" placeholder="Event Name" type="text" required />
                                <input id="date"name="date" placeholder="Date" type="date" required />
                                <input id="time" name="time" placeholder="Time" type="time" required />
                                <textarea id="about" name="about" class="About-Event" placeholder="About Event"></textarea>
                                <input class="formBtn" type="submit" onclick="connectEventsToDataBase();" />
                               <input class="formBtn" type="reset" />
                            </form>
                        </div>

                        <div id="club-events" >
                        </div>
                    </div>
                    
                </div>
                <div class="col-sm-7 paddoff">
                    <div class=" scroll discussion">
                        <div class="post">
                            <form>
                                <div class="Add-post">
                                    <span class="user-icon"><i class="fa fa-user-circle"></i></span>
                                    <input type="text" placeholder="Start a Post" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm -2 paddoff">
                    <div class="member">
                    </div>
                </div>        
            </div>
        </div>
</section>
    <script type="text/javascript">
        connectClubPage();
            function connectClubPage(){
                var id = <?php echo $_GET['club_id'] ?>;
                $.ajax({
                    type: "POST",
                    url: "ajax/ClubPage.php",
                    data: {club_id:id},
                    success: function(data){
                        $('#Club-Page').html(data);
                    }
                });   
            }

            function connectEventsToDataBase(){
                var id = '<?php echo $_GET['club_id']; ?>';
                var name = document.getElementById('name').value;
                var date = document.getElementById('date').value;
                var time = document.getElementById('time').value;
                var about = document.getElementById('about').value;
                alert(name);
                $.ajax({
                        type: "POST",
                        url: "ajax/UploadEvents.php",
                        data: {club_id:id, name:name, date:date, time:time, about:about},
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
    </script>
    <!-- <script src="clubDash.js"></script> -->

    <script type="text/javascript">
        function show(){
            var sidenav= document.getElementsByClassName("Ham");
            console.log("check1");
            if(sidenav.style.display==="none"){
                alert("if ");
                // sidenav.classList.remove = "non-active";
                // sidenav.classList.add="active";
            }
            else{
                // sidenav.classList.remove = "active";
                // sidenav.classList.add="non-active";
                alert("else");
            }
            sidenav.classList.toggle("active");
            console.log("check3");
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
    </script>
    <script type="text/javascript">
        $('form').submit(function(e) {
            e.preventDefault();
        });
    </script>
</body>
</html>