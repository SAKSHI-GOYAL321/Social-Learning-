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
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>
    <section id="top-nav">
        <div class="col-sm-12 paddoff">
            <div class="topnav">    
                <i class="fa fa-bars non-active" id="top-ham" onclick="show();"></i>
                <a href="logout.php">Log out</a></i>    
                <a href="#"><?php echo $_SESSION['uname']?></a></i>
            </div>
        </div>
    </section>
    <section id="side-nav">
        <div class="col-sm-12 paddoff">
            <div class="contain">
                <div class="Ham col-sm-2 paddoff">
                    <div >
                        <div id="Ham" class = "sidenav">
                            <a href="#"><span style="padding: 4px;"><i class="fa fa-info"></i></span> About</a>
                            <a href="dashboard.php"><span style="padding: 4px;"><i class="fa fa-home"></i></span>Dashboard</a>
                            <a href="profile.php"><span style="padding: 4px;"><i class="fa fa-user-circle"></i></span>Profile</a>
                            <a href="blog.php"><span style="padding: 4px;"><i class="fa fa-pencil"></i></span>Blog</a>
                            <a href="resourse.php"><span style="padding: 4px;"><i class="fa fa-pencil"></i></span>Resourse</a>
                            <a href="clubDash.php"><span style="padding: 4px;"><i class="fa fa-cog"></i></span>Clubs</a>
                            <a href="#"><span style="padding: 4px;"><i class="fa fa-phone"></i></span>Contact</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="content"></div>
                </div>
                <!--<div class="contain sidebar">
                    <ul>
                        <li>
                            <a href="dashboard.php">
                                <i class='bx bx-home' type="solid"></i>
                                <span>Home</span>  
                            </a>
                        </li>
                       
                        <li >
                            <a href="#">
                                <i class="bx bx-book-bookmark"></i>
                                <span class="dropdwn" onclick="menu_dropdwn()"> Blog</span> 
                                <span class="fas fa-caret-down first"></span> 
                            </a>
                        </li>
                        <li>
                           
                            <a href="#">
                                <i class="bx bx-home-smile"></i>
                                <span> About</span>  
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bx bx-pencil"></i>
                                <span> Services</span>  
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bx bx-phone-call"></i>
                                <span>Contact Us</span>  
                            </a>
                        </li>
                    </ul>
                </div>-->
                    
                
            </div>
        </div>
    </section>
       
    <!-- <section id="footer">
        <footer class="footer-distributed">
            <div class="col-sm-12">
                <div class="footer-distribution">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-3">
                        <div class="footer-left">
                            <h3>Company<span>logo</span></h3>
                
                            <p class="footer-links">
                                <a href="#">Home</a>
                                ·
                                <a href="#">Blog</a>
                                ·
                                <a href="#">About</a>
                                ·
                                <a href="#">Faq</a>
                                ·
                                <a href="#">Contact</a>
                            </p>
                            <p class="footer-company-name">Company Name © 2021</p>
                            <div class="footer-icons">
                
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <div class="footer-right">
                            <p>Contact Us</p>
                            <form action="#" method="post">
                                <input type="text" name="email" placeholder="Email">
                                <textarea name="message" placeholder="Message"></textarea>
                                <button>Send</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>    
                </div>               
            </div>
		</footer>
    </section>        -->
    <script type="text/javascript">
        function show(){
            var sidenav= document.getElementById("Ham");
            var Ham = document.getElementById('top-ham');
            var sidemenu = document.getElementById('sidenav');
            console.log("check1");
            if(sidenav.style.display == 'block'){
                sidenav.style.display = "none";
                Ham.style.backgroundColor = "#4c6c94";
                // Ham.style.display = "";
                // sidenav.classList.remove("non-active");
                // sidenav.classList.add("active");
                // alert("if ");
            }
            else{
                // sidenav.classList.remove("non-active");
                // sidenav.classList.add("active");
                // sidenav.style.display = "none";
                // Ham.style.display = "block";
                sidenav.style.display = "block";
                sidenav.style.width = "256px"
                // Ham.style.display = "none";
                Ham.style.zIndex = "12";
                Ham.style.position = "relative";
                Ham.style.backgroundColor = "steelblue";
                // alert("else");
            }
            sidenav.classList.toggle("active");
            console.log("check3");
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