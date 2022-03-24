<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <div class="col-sm-2">
                    <div class="sidenav">
                        <a href="#"><span style="padding: 4px;"><i class="fa fa-info"></i></span> About</a>
                        <a href="dashboard.php"><span style="padding: 4px;"><i class="fa fa-home"></i></span>Dashboard</a>
                        <a href="profile.php"><span style="padding: 4px;"><i class="fa fa-user-circle"></i></span>Profile</a>
                        <a href="blog.php"><span style="padding: 4px;"><i class="fa fa-pencil"></i></span>Blog</a>
                        <a href="resourse.php"><span style="padding: 4px;"><i class="fa fa-pencil"></i></span>Resourse</a>
                        <a href="clubDash.php"><span style="padding: 4px;"><i class="fa fa-cog"></i></span>Clubs</a>
                        <a href="#"><span style="padding: 4px;"><i class="fa fa-phone"></i></span>Contact</a>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="col-sm-8">
                    <div class="box-club">
                        <div>
                            <h2 style="text-align: center; color: slategray;">My Profile</h2>
                        </div>
                        <form action="" class="form">
                            <div class="margin">
                                <label>First Name:</label>
                                <input type="text" id="fname" name="fname" placeholder="Enter First name"
                                    class="form-control form-style" required>
                            </div>
                            <div class="margin">
                                <label>Last Name:</label>
                                <input type="text" id="lname" name="lname" placeholder="Enter Last name"
                                    class="form-control form-style" required>
                            </div>
                            <div class="margin">
                                <label>Email:</label>
                                <input type="text" id="email" name="email" placeholder="Enter Email"
                                    class="form-control form-style" required>
                            </div>
                            <div class="margin">
                                <label>Website:</label>
                                <input type="text" id="website" name="website" placeholder="Enter your website"
                                    class="form-control form-style" required>
                            </div>
                            <div class="margin">
                                <label>Interest:</label>
                                <div class="checkbox checkbox12" style="width:80%; float:right;">
                                    <label>
                                        <input type="checkbox" value="">
                                        <i class="fa fa-2x icon-checkbox"></i>
                                        Web Development
                                    </label>
                                </div>
                                <div class="checkbox checkbox12" style="width:80%; float:right;">
                                    <label>
                                        <input type="checkbox" value="" >
                                        <i class="fa fa-2x icon-checkbox"></i>
                                        Data Science
                                    </label>
                                </div>
                                <div class="checkbox checkbox12" style="width:80%; float:right;">
                                    <label>
                                        <input type="checkbox" value="" >
                                        <i class="fa fa-2x icon-checkbox"></i>
                                        AI/ML
                                    </label>
                                </div>
                                <div class="checkbox checkbox12" style="width:80%; float:right;">
                                    <label>
                                        <input type="checkbox" value="" >
                                        <i class="fa fa-2x icon-checkbox"></i>
                                        Android Development
                                    </label>
                                </div>
                                <div class="checkbox  checkbox12" style="width:80%; float:right;">
                                    <label>
                                        <input type="checkbox" value="" disabled>
                                        <i class="fa fa-2x icon-checkbox"></i>
                                        Option is disabled
                                    </label>
                                </div>
                                <div class="checkbox disabled checkbox12" style="width:80%; float:right;">
                                    <label>
                                        <input type="checkbox" value="" disabled checked>
                                        <i class="fa fa-2x icon-checkbox"></i>
                                        Option is disabled & checked
                                    </label>
                                </div>
                            </div>
                            <div class="margin">
                                <input type="submit" value="Update" class="log-btn">
                            </div>
                        </form>
                    </div>
                    </div>
                    <div class="col-sm-2">
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
            
                                            <!-- <div class="margin form-style-checkbox">
                                                <input type="checkbox" value = "Web Development" class="checkbox-link">
                                                <label class="form-style-checkbox" >Web Development:</label>
                                                <input type="checkbox" value = "Data Science" class="checkbox-link">
                                                <label class="form-style-checkbox">Data Science:</label>
                                                <input type="checkbox" value = "AI/ML" class="checkbox-link">
                                                <label class="form-style-checkbox">AI/ML:</label>
                                                <input type="checkbox" value = "Android Development" class="checkbox-link">
                                                <label class="form-style-checkbox">Android Development</label>
                                                 <label>Other</label><input type="text" value = "other" class="form-style"> 
                                            </div> -->
                                            <!-- <select id="interest" name="interest" class="form-control form-style" onclick="sample();" required>
                                                <option value="webd">Web Development</option>
                                                <option value="DataS">Data Science</option>
                                                <option value="AI">AI/ML</option>
                                                <option value="Android">Android Development</option>
                                                <option value="other" type="text" placeholder="others">Others</option>
                                            </select>
                                              <div id="Choose-other" style ="display: none;" >
                                                  <input type="text" id="other" name="other" class="form-control form-style " required>
                                              </div> -->
                                        <!-- </div> -->
                                        
                    
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
        function sample(){

            var a = document.getElementById("interest");
            var b = document.getElementById("Choose-other");
            if(a.value == "other"){
                // a.style.display = "none";
                b.style.display = "block";
            }
            else{
                b.style.display = "none";
            }       
        }
    </script>
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

<!-- var testform = document.getElementById('testadd');
				var data = new FormData(testform);	
				//alert('ok');
						$.ajax(
						{
							type:'POST',
							url:"ajax/createtest.php",
							data:data,
							contentType:false,  
						    processData:false, 
							success:function(data)
							{
								alert(data);
							}
				    	}); -->