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
            <div class="topnav">    
                <i class="fa fa-bars " onclick="show();"></i>
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
                        <a href="#"><span style="padding: 4px;"><i class="fa fa-phone"></i></span>Contact</a>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="col-sm-6">
                        <div class="abt-sec">
                            <h2>ABOUT US</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim nemo commodi aliquam, porro voluptate repudiandae eum accusantium qui nesciunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, rem. </p>
                            <a href="dashboard.php">Learn More</a>
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
<script type="text/javascript">
        function show(){
            var sidenav= document.getElementsByClassName("sidenav");
            console.log("check1");
            if(sidenav.style.display=="none"){
                sidenav.classList.remove = "non-active";
                sidenav.classList.add="active";
            }
            else{
                sidenav.classList.remove = "active";
                sidenav.classList.add="non-active";
            }
            // sidenav.classList.toggle("active");
            console.log("check3");
        } 
    </script>

</body>
</html>