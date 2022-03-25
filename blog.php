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
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/imageHower.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <section id="top-nav">
        <div class="col-sm-12 paddoff">
            <div class="topnav">    
                <i class="fa fa-bars non-active" id="top-ham" onclick="show();"></i>
                <a href="logout.php">Log out</a></i>    
                <a href="#"> <span><i class="fas fa-user-alt" style="color:white; font-size: 12px;"></i></span> <?php echo $_SESSION['uname']?></a>
            </div>
        </div>
    </section>
    <section id="side-nav">
        <div class="col-sm-12 paddoff">
            <div class="contain">
                <div class="col-sm-2">
                    <div id="Ham" class="sidenav active">
                    <i class="fa fa-bars non-active" id="top-ham" onclick="show();"></i>
                        <a href="#"><span style="padding: 4px;"><i class="fa fa-info"></i></span> About</a>
                        <a href="dashboard.php"><span style="padding: 4px;"><i class="fa fa-home"></i></span>Dashboard</a>
                        <a href="profile.php"><span style="padding: 4px;"><i class="fa fa-user-circle"></i></span>Profile</a>
                        <a href="blog.php"><span style="padding: 4px;"><i class="fa fa-pencil"></i></span>Blog</a>
                        <a href="resourse.php"><span style="padding: 4px;"><i class="fa fa-pencil"></i></span>Resourse</a>
                        <a href="clubDash.php"><span style="padding: 4px;"><i class="fa fa-cog"></i></span>Clubs</a>
                        <a href="#"><span style="padding: 4px;"><i class="fa fa-phone"></i></span>Contact</a>
                    </div>
                </div>
                <div class="col-sm-10 ">
                   
                  
                        <div class="content ">
                            <div id="grid">
                        </div>
                        <div id="upperblog">
                        </div>
                        <div style="width:100%;" class="box-b">
                            <div class="datalist" id="datalist" style="float:left;width: 100%;"></div>
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
    <script type="text/javascript" src="Hamburger.js"></script>
    <script type ="text/javascript">
        getblog();
        // getupperblog();
        getblogdata();

        function getblog(){
            var token = "<?php echo password_hash("data", PASSWORD_DEFAULT)?>";
            $.ajax({
                type: "POST",
                url: "ajax/getblog.php",
                data: {token:token},
                
                success: function(data){
                    $('#grid').html(data);
                }
            });
        }
        function getupperblog()
        {
            var token = "<?php echo password_hash("upperdata", PASSWORD_DEFAULT)?>";
            $.ajax({
                type: "POST",
                url: "ajax/getblog.php",
                data: {token:token},
                
                success: function(data){
                    $('#upperblog').html(data);
                }
            });
        }
        function getblogdata()
        {
            var token = "<?php echo password_hash("lowerdata", PASSWORD_DEFAULT)?>";
            $.ajax({
                type: "POST",
                url: "ajax/getblog.php",
                data: {token:token},
                
                success: function(data){
                    $('#datalist').html(data);
                }
            });
        }       
    </script>
    <!-- <script type="text/javascript">
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
    </script> -->
    <script src="script.js"  type="text/javascript"></script>
</body>

</html>