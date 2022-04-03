<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profile_page.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/profile_page.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Profile page</title>
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
                <div class="col-sm-2">
                    <div id="Ham" class="sidenav">
                        <a href="#"><span style="padding: 4px;"><i class="fa fa-info"></i></span> About</a>
                        <a href="dashboard.php"><span style="padding: 4px;"><i class="fa fa-home"></i></span>Dashboard</a>
                        <a href="profile.php"><span style="padding: 4px;"><i class="fa fa-user-circle"></i></span>Profile</a>
                        <a href="blog.php"><span style="padding: 4px;"><i class="fa fa-pencil"></i></span>Blog</a>
                        <a href="resourse.php"><span style="padding: 4px;"><i class="fa fa-pencil"></i></span>Resourse</a>
                        <a href="clubDash.php"><span style="padding: 4px;"><i class="fa fa-cog"></i></span>Clubs</a>
                        <a href="#"><span style="padding: 4px;"><i class="fa fa-phone"></i></span>Contact</a>
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-8">
                    <div id="profile">
                            
                    </div>
                </div>
                <div class="col-sm-1"></div>
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
    <script type="text/javascript" src="Hamburger.js"></script>
    <script type="text/javascript">
        profileData();
        function profileData(){
            var token = "<?php echo password_hash('Profile', PASSWORD_DEFAULT); ?>";
                $.ajax({
                    type: "POST",
                    url: "ajax/profile_page.php",
                    data: {token:token},
                    success: function(data){
                        $('#profile').html(data);
                    }
                });
        }
    </script>

    
</body>
</html>
