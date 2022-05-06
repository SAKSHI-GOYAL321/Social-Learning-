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
            $id = $_GET['bid'];
            $query = $db->prepare('SELECT Title from blogdata WHERE bid = ?');
            $data = array($id);
            $execute = $query->execute($data);
            if($execute){
                $datarow = $query->fetch();
            }
        ?>
        <title><?php echo $datarow['Title']; ?></title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/viewblog.css">
        <link rel="stylesheet" href="css/dashboard.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/5e6dc576bb.js" crossorigin="anonymous"></script>
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
                        <div class="content">
                            <div id = "blog" class="blog-page"  style="width:100%;">
                                <!-- Content of Blog  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
             -->

        <script  type="text/javascript">
             view();
            function view(){
                var id = <?php echo $_GET['bid'] ?>;
                $.ajax({
                    type: "POST",
                    url: "ajax/viewBlog.php",   //ajax/blogpage.php
                    data: {bid:id},
                    success: function(data){
                        $('#blog').html(data);
                    }
                });    
            }
        </script>
<script type="text/javascript" src="Hamburger.js"></script>
<script type="text/javascript">
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.documentElement.scrollTop > 25) {
    document.getElementById("myBtn").style.display = "block";
  } 
  else {
    document.getElementById("myBtn").style.display = "none"
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.documentElement.scrollTop = 0;
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