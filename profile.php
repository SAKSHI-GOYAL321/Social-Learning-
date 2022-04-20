<?php 
    session_start();
        include('ajax/connection.php');
        $email = $_SESSION['email'];
        $query = $db->prepare('SELECT * from profile WHERE email = ?');
        $data = array($email);
        $execute = $query->execute($data);
        if($execute){
            $datarow = $query->fetch();
        }
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
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <section id="top-nav">
        <div class="col-sm-12 paddoff">
            <div class="topnav">    
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
                    <div class="box-club">
                        <div>
                            <h2 style="text-align: center; color: black;">My Profile</h2>
                        </div>
                        <form class="form" id="form">
                            <div class="margin">
                                <label>First Name:</label>
                                <input type="text" id="fname" name="fname" placeholder="Enter First name"
                                    class="form-control form-style" value="<?php echo $datarow['fname']; ?>" required>
                            </div>
                            <div class="margin">
                                <label>Last Name:</label>
                                <input type="text" id="lname" name="lname" placeholder="Enter Last name"
                                    class="form-control form-style" value="<?php echo $datarow['lname']; ?>" required>
                            </div>
                            <div class="margin">
                                <label>Profession:</label>
                                <input type="text" id="profession" name="profession" placeholder="Enter your profession"
                                    class="form-control form-style" value="<?php echo $datarow['profession']; ?>" required>
                            </div>
                            <div class="margin">
                                <label>Bio:</label>
                                <input type="text" id="bio" name="bio" placeholder="Tell us about yourself"
                                    class="form-control form-style" value="<?php echo $datarow['bio']; ?>" required>
                            </div>
                            <div class="margin">
                                <label>Email:</label>
                                <input type="text" id="email" name="email" placeholder="Enter Email"
                                    class="form-control form-style" value="<?php echo $datarow['email']; ?>" disabled>
                            </div>
                            <div class="margin">
                                <label>Website:</label>
                                <input type="text" id="website" name="website" placeholder ="linkedin/github/portfolio "
                                    class="form-control form-style" value="<?php echo $datarow['website']; ?>" required>
                            </div>
                            <div class="margin">
                                <label>Profile Image</label>
                                <input type="File" id="photo" name="photo" class="form-control form-style" />
                                <img id="blah" class="blah" src="<?php echo $datarow['photo'];?>" alt="your image" />
                            </div>
                            <div class="margin">
                                <input type="submit" value= "Update" class="buton" id="button" name="button" onclick="UpdateProfile();" class="btn btn-primary" />
                            </div>
                        </form>
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
        function UpdateProfile(){
            var form = document.getElementById("form");
               var data = new FormData(form);
            //    alert("check1");
               $.ajax({
                       type: "POST",
                       url: "ajax/Update_Profile.php",
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
                //    alert("check1");
        }
        
    </script>
    <script type="text/javascript">
        photo.onchange = evt => {
  const [file] = photo.files
  if (file) {
    blah.src = URL.createObjectURL(file)
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