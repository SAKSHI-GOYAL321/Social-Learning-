<?php 
    session_start();
    include('ajax/connection.php');
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
    <link rel="stylesheet" href="css/hexagonal.css">
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
                <a href="profile_page.php"><?php echo $_SESSION['uname']?></a></i>
            </div>
        </div>
    </section>
    <section id="side-nav">
        <div class="col-sm-12 paddoff">
            <div class="contain">
                <div class="Ham col-sm-2 paddoff" id="side-navbar">
                    <div >
                        <div id="Ham" class = "sidenav">
                            <a href="about.php"><span style="padding: 4px;"><i class="fa fa-info"></i></span> About</a>
                            <a href="dashboard.php"><span style="padding: 4px;"><i class="fa fa-home"></i></span>Dashboard</a>
                            <a href="profile.php"><span style="padding: 4px;"><i class="fa fa-user-circle"></i></span>Profile</a>
                            <a href="blog.php"><span style="padding: 4px;"><i class="fa fa-pencil"></i></span>Blog</a>
                            <a href="resourse.php"><span style="padding: 4px;"><i class="fa fa-pencil"></i></span>Resourse</a>
                            <a href="clubDash.php"><span style="padding: 4px;"><i class="fa fa-cog"></i></span>Clubs</a>
                            <a href="contact.php"><span style="padding: 4px;"><i class="fa fa-phone"></i></span>Contact</a>
                            <img src="img/learning-child.png"/>
                            <h5>Invite Friend</h5>
                            <a href="index.php" class="getlink">Get The Link</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="content">
                        <h3 class="hello-user">Hello, <?php echo $_SESSION['uname'];?> </h3>
                        <div id="num-box" class="col-sm-12">
                        <div class="col-sm-2 box users">
                            <img class="icon" src="img/students-cap.png" alt="">
                            <h5>Total Users</h5>
                            <?php
                                $query = $db->prepare('SELECT count(sno) as cnt FROM user_details');
                                $data = array();
                                $execute = $query->execute($data);
                                $datarow = $query->fetch();
                            ?>
                            <p class="numb"><?php echo $datarow['cnt']; ?></p>
                        </div>
                        <div class="col-sm-2 box blog">
                            <img class="icon" src="img/writing.png" alt="">
                            <h5>Total Blogs</h5>
                            <?php
                                $query = $db->prepare('SELECT count(bid) as cnt FROM blogdata');
                                $data = array();
                                $execute = $query->execute($data);
                                $datarow = $query->fetch();
                            ?>
                            <p class="numb"><?php echo $datarow['cnt']; ?></p>
                        </div>
                        <div class="col-sm-2 box resources">
                            <img class="icon" src="img/download.png" alt="">
                            <h5>Total Resources</h5>
                            <?php
                                $query = $db->prepare('SELECT count(id) as cnt FROM resources');
                                $data = array();
                                $execute = $query->execute($data);
                                $datarow = $query->fetch();
                            ?>
                            <p class="numb"><?php echo $datarow['cnt']; ?></p>
                        </div>
                        <div class="col-sm-2 box club">
                            <img class="icon" src="img/fan-club.png" alt="">
                            <h5>Total Clubs</h5>
                            <?php
                                $query = $db->prepare('SELECT count(club_id) as cnt FROM clubname');
                                $data = array();
                                $execute = $query->execute($data);
                                $datarow = $query->fetch();
                            ?>
                            <p class="numb"><?php echo $datarow['cnt']; ?></p>
                        </div>
                        
                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class=middle-sec-1>
                                     <p>Do you want effective resources of various topics to help you with your preparation? Here's all what you are looking for. Get unlimited number of resources of every topic here. If you also have some valuable resources, don't forget to add them here. Get started now!!</p>
                                     <div class="links">
                                       <button class="button-81" role="button" onclick="window.location.href='resourse.php'">View Resources</button>
                                     </div>
                                   
                                     


                                      

                                     
                                </div>

                            </div>
                            <div class="col-sm-6">
                            <div class=middle-sec-2>
                                     <p>Do you want to interact with your peers and learn with them? Join several clubs where you can easily connect, learn, and share with your peers. Not only this, you can join several insightful events of various domains. You can also conduct events of yours. Get started now!!</p>
                                     <div class="links">
                                    <button class="button-81" role="button"  onclick="window.location.href='clubDash.php'">View Clubs</button>
                                    </div>
                                      

                                     
                                </div>
                                
                            </div>
                           
                            <div class=middle-sec-3>
                                     <p>Do you want to interact with your peers and learn with them? Join several clubs where you can easily connect, learn, and share with your peers. Not only this, you can join several insightful events of various domains. You can also conduct events of yours. Get started now!!</p>
                                     <div class="links">
                                    <button class="button-81" role="button"  onclick="window.location.href='clubDash.php'">View Clubs</button>
                                    </div>
                                      

                                     
                                </div>
                     

                        </div>

                                                    
                    </div>

                    
                   
                </div>
                <?php 
                

                 $query = $db->prepare('SELECT * FROM blogdata where bid > ( (select COUNT(*) from blogdata) - 4) order by bid desc');
                 $data = array();
                 $execute=$query->execute($data);
                
                 
                 ?>
                <div class="col-sm-2 blog-sec" id="blog-section">
                    <div class="recent-blog">
                        <h2>Recent Blogs</h2>
                        <div class="blog-content">
                            <?php
                            while($datarow=$query->fetch()){
                                ?>
                                <div class="blogs">
                                   <img class="blog-img" src="social/<?php echo $datarow['ImagePath']?>"/>
                                  <div>
                                <a href="./viewBlog.php?bid=<?php echo $datarow['bid'];?>" ><h4><?php if(strlen($datarow['Title']) > 30)
                                    echo substr($datarow['Title'],0, 25). "...";
                                 else
                                    echo $datarow['Title']; ?></h4></a>
                                
                            </div>
                            
                        </div>
                        
                        <?php
                                
                            }
                            ?>
                            <div class="links">
                                    <button class="button-81" role="button"  onclick="window.location.href='blog.php'">View More Blogs</button>
                             </div>


                            
                            
                            
                        
                        </div>

                    
                    </div>
                </div>

                
                

                
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