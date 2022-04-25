<?php
session_start();
?>   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    <!-- <link rel="stylesheet" href="css/dashboard.css"> -->
    <link rel="stylesheet" href="css/dashboard.css"> 
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/aboutus.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="Hamburger.js"></script>
</head>
<body>
<section id="top-nav">
        <div class="col-sm-12 paddoff">
        <div class="topnav" id="top-Ham">    
                <i class="fa fa-bars non-active" onclick="show();"></i>
                <a href="logout.php">Log out</a></i>    
                <a href="profile_page.php"><?php echo $_SESSION['uname']?></a></i>
            </div>
        </div>
    </section>
    <section id="side-nav">
    <div class="col-sm-12 paddoff">
            <div class="contain">
                <div class="col-sm-2">
                    <div id="Ham" class="sidenav">
                        <a href="about.php"><span style="padding: 4px;"><i class="fa fa-info"></i></span> About</a>
                        <a href="dashboard.php"><span style="padding: 4px;"><i class="fa fa-home"></i></span>Dashboard</a>
                        <a href="profile.php"><span style="padding: 4px;"><i class="fa fa-user-circle"></i></span>Profile</a>
                        <a href="blog.php"><span style="padding: 4px;"><i class="fa fa-pencil"></i></span>Blog</a>
                        <a href="resourse.php"><span style="padding: 4px;"><i class="fa fa-pencil"></i></span>Resourse</a>
                        <a href="clubDash.php"><span style="padding: 4px;"><i class="fa fa-cog"></i></span>Clubs</a>
                        <a href="contact.php"><span style="padding: 4px;"><i class="fa fa-phone"></i></span>Contact</a>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="col-sm-6">
                        <div class="abt-sec">
                            <h2>ABOUT US</h2>
                            <p>A learning portal to help you with blogs and resources on several in several domains. Using this portal, you can access blogs from every topic to enhance your knowledge. The resource sections connect you with several useful and effective resources that can help you in your preparation journey. Not only this, using the portal you can also add your resources if you have any.</p>
                            <br/>
                            <p>
                                Using Club section, you get access to various public clubs where you can interact with your peers and share your insights. You can also create a club of your own. Inside a club, you get access to various domain-related events going on. If you also have any event, add them there. To know more about the portal, get started now!!
                            </p>
                            <div class="links">
                                    <button class="button-81" role="button"  onclick="window.location.href='dashboard.php'">Know More About Us</button>
                             </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="img-wrap">
                            <img src="img/about.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>
<section id="footer">
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
    </section>    
    <script src="Hamburger.js"></script>
</body>
</html>