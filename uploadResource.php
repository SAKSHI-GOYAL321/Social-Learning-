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
    <!-- <link rel="stylesheet" href="css/sidenav.css"> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
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
        <div class="col-sm-12 paddoff">
            <div class="contain">
                <div class="Ham col-sm-2 paddoff">
                    <div class="sidenav">
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
                        <div class="">
                            <!-- <div>
                                <h2 style="text-align: center; color: slategray;">My Profile</h2>
                            </div> -->
                            <form action="" class="form" id="form">
                                
                                <div class="margin">
                                    <label>Subject:</label>
                                    <select id="subj" name="subj" class="form-control form-style" required>
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
                                <div class="margin">
                                    <label>Topic:</label>
                                    <input type="text" id="topic" name="topic" placeholder="eg: Web Development" class="form-control form-style" required>
                                </div>
                                <div class="margin">
                                    <label>About:</label>
                                    <textarea type="text" id="about" name="about"  cols="50" rows="5" placeholder="Tell us something about the resource that you are sharing" class="form-control form-style" ></textarea>
                                </div>
                                <div class="margin">
                                    <label >Content Type:</label>
                                    <select id="ctype" name="ctype" class="form-control form-style" onchange="sample();" required>
                                        <option value="select">--Select option--</option>
                                        <option value="file">File</option>
                                        <option value="link">Link</option>
                                    </select>
                                </div>
                                <div class="margin">
                                    <input type="text" id="link" name="link" placeholder="Enter a link" style="display:none;"
                                        class="form-control form-style" >
                                </div>
                                <div class="margin">
                                    <input type="file" id="pdf_file" name="pdf_file" style="display:none;" class=" form-style">
                                </div>
                                <div class="margin">
                                <input type="submit" value="Upload" onclick="uploadfiles();" class="log-btn">
                                </div>

                            </form>
                            
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </section>
       
 
    <script type="text/javascript">
        
         function uploadfiles(){
           
            var ctype = document.getElementById("ctype");
            if(ctype.value != "select"){
        
                var form = document.getElementById("form");
                var data = new FormData(form);
                
                
                $.ajax({
                        type: "POST",
                        url: "ajax/Upload_pdf.php",
                        data: data,
                        contentType: false,
                        processData: false,
                        success: function(data){
                            alert(data);
                        
                            if(data == 0)
                            {
                                alert("data inserted successfully");
                            }
                            else if(data == 1)
                            {
                                alert('data not inserted');
                            }
                            else if(data == 2)
                            {
                                alert("Please select an file/link");
                            }
                        }
                    });
                   
            }
            else{
                alert('Please select an appropriate field');
            }
        }

    </script>

   
    <script type="text/javascript">
        function{
            var value = document.getElementsByClassName("display");
            value.innerText = "";
        }
        
        function sample(){
            var a = document.getElementById("ctype");
            var b = document.getElementById("pdf_file");
            var c = document.getElementById("link");

            if(a.value == "file"){
                c.style.display = "none";
                b.style.display = "block";
            }
            else if(a.value == "link"){
                b.style.display = "none";
                c.style.display = "block";
            }
            else{
                b.style.display = "none";
                c.style.display = "none";
            }
        }

        function show(){
            var sidenav= document.getElementsByClassName("Ham");
            
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