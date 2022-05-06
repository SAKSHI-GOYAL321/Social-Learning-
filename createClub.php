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
    <title>Create Club</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/clubDash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
</head>

<body>
<section id="top-nav">
        <div class="col-sm-12 paddoff">
            <div class="topnav">    
                <i class="fa fa-bars non-active" id="top-ham" onclick="show();"></i>
                <a href="logout.php">Log out</a></i>    
                <a href="profile_page.php"><?php echo $_SESSION['uname']?></a></i>
            </div>
        </div>
    </section>
    <section id="side-nav">
        <div class="col-sm-12 paddoff">
            <div class="contain">
                <div class="Ham col-sm-2 paddoff">
                    <div >
                        <div id="Ham" class = "sidenav">
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
                <div class="col-sm-10">
                    <div class="club-box-content">
                                    <div class=" box-club-1">
                                        <div class="heading_name">
                                            <h3 >Create Your Club</h3>
                                        </div>
                                        <form id = "form">
                                            <div class="title_name">
                                                <input type="text" name="title" id="title" placeholder="Enter Club Name" class="form-control ">
                                            </div>
                                            <div class="para">
                                                <textarea name="write" id="write" placeholder="Enter Club Description" cols="53" rows="10" class="form-control "></textarea>
                                            </div>
                                            <div>
                                            <div>
                                                <label for="image_file">Select an Image for your club</label>
                                                <input type="file" id="image_file" name="image_file"  class="form-control form-style">
                                            </div>
                                            <div class="para">
                                            <!-- <label>Select a Field</label> -->
                                                        <select id="subj" name="subj" class="form-control form-style">
                                                            <option value="select">--Search your field--</option>
                                                            <option value="Data Structure and Algorithm">Data Structure and Algorithm</option>
                                                            <option value="DataBase Management System">DataBase Management System</option>
                                                            <option value="Programming Languages">Programming Languages</option>
                                                            <option value="Object Oriented Programming">Object Oriented Programming</option>
                                                            <option value="Networking">Networking</option>
                                                            <option value="Operating System">Operating System</option>
                                                            <option value="Software Engineering">Software Engineering</option>
                                                            <option value="Development">Development</option>
                                                        </select>
                                            </div>
                                            <div style="text-align: center;">
                                                <input type="submit" value="Create" name="submit" id="submit" onclick="PostClub();"  class="button-56">
                                            </div>
                                        </form>
                                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="Hamburger.js"></script>
   <script type="text/javascript">
       function PostClub()
        {
            var form = document.getElementById("form");
            var data = new FormData(form);
    
            $.ajax({
    
                    type: "POST",
                    url: "ajax/PostClub.php",
                    data: data,
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
                        else if(data == -1)
                        {
                            alert("Please check your password");
                        }
                        else
                        {
                            alert(data);
                        }
                    }
            });
        }
   </script>
</body>
<footer class="footer-distributed">
    <div class="col-sm-12">
        <div class="footer-distribution">
            <div class="col-sm-2"></div>
            <div class="col-sm-3">
                <div class="footer-left">
                    <h4>Company<span>logo</span></h4>
                    <p class="footer-company-name">Company Name © 2021</p>
                    
                </div>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
                <div class="footer-right">
                    <div class="footer-icons">
        
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-github"></i></a>
        
                    </div>
                </div>
            </div>
            <div class="col-sm-1"></div>    
        </div>               
    </div>
</footer>
</html>




