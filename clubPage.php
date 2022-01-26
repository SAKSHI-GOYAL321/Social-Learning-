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
    <!-- <link rel="stylesheet" href="css/clubDash.css"> -->
    <link rel="stylesheet" href="css/sidenav.css">
    <link rel="stylesheet" href="css/resource.css">
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
  
    <section id="side-nav">
        
            
                <div class="Ham paddoff">
                <div class="sidenav">
                        <a href="profile.php" style="text-align: center;" class="tooltip"><i  class="fa fa-user-circle "></i><span class="tooltiptext"> Profile </span></a>
                        <a href="dashboard.php" style="text-align: center; " class="tooltip"><i class="fa fa-home"></i><span class="tooltiptext"> Dashboard <span></a>
                        <a href="blog.php"style="text-align: center;" class="tooltip"><i class="fa fa-pencil"></i><span class="tooltiptext">Blog</span></a>
                        <a href="resourse.php" style="text-align: center;" class="tooltip"><i class="fa fa-pencil"></i><span class="tooltiptext">Resourse</span></a>
                        <a href="#" style="text-align: center;" class="tooltip"><i class="fa fa-info"></i> <span class="tooltiptext">About</span></a>
                        <a href="#"style="text-align: center;" class="tooltip"><i class=" fa fa-cog"></i><span class="tooltiptext">Services</span></a>
                        <a href="#"style="text-align: center;" class="tooltip"><i class="fa fa-phone"></i><span class="tooltiptext" >Contact</span></a>
                  </div>
                </div>
        <div class="col-sm-12">
            <div class="contain"> 
                <div class="col-sm -2"></div>
                <div class="col-sm -8"></div>
                <div class="col-sm -2"></div>       
            
            
        </div>
        

              
                    
                

       
    </section>
       
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