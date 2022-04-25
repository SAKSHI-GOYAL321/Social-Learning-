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
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
                    <div class="content">
                            <div class="container">
                              <div class="row justify-content-center">
                                  <div class="row justify-content-center">
                                    <div class="col-sm-6">
                                      
                                      <h3 class="heading mb-4">Let's talk about everything!</h3>
                                      <p>Do you have any questions in mind? Connect with us to get your answer!!</p>
                        
                                      <p><img src="img/undraw-contact.svg" alt="Image" class="img-fluid"></p>
                        
                        
                                    </div>
                                    <div class="col-sm-6">
                                      
                                      <form class="mb-5" method="post" id="contactForm" name="contactForm">
                                        <div class="row">
                                          <div class="col-sm-12 form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-sm-12 form-group">
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-sm-12 form-group">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-sm-12 form-group">
                                            <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your message"></textarea>
                                          </div>
                                        </div>  
                                        <div class="row">
                                          <div class="col-sm-12">
                                            <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
                                          <span class="submitting"></span>
                                          </div>
                                        </div>
                                      </form>
                        
                                      <div id="form-message-warning mt-4"></div> 
                                      <div id="form-message-success">
                                        Your message was sent, thank you!
                                      </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                        
                          
                            



                    </div>
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