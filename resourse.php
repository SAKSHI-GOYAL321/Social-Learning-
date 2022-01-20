<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resource</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.min.css">
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
    <!-- id="side-nav" -->
    <section id = "side-nav">
        <div class="col-sm-12 paddoff">
            <div class="contain">
                <div class="Ham paddoff">
                    <div class="sidenav">
                        <a href="profile.php" style="text-align: center;" class="tooltip"><i  class="fa fa-user-circle "></i><span class="tooltiptext"> Profile </span></a>
                        <a href="dashboard.php" style="text-align: center; " class="tooltip"><i class="fa fa-home"></i><span class="tooltiptext"> Dashboard <span></a>
                        <a href="blog.php"style="text-align: center;" class="tooltip"><i class="fa fa-pencil"></i><span class="tooltiptext">Blog</span></a>
                        <a href="resourse.php" style="text-align: center;" class="tooltip"><i class="fa fa-pencil"></i><span class="tooltiptext">Resourse</span></a>
                        <a href="#" style="text-align: center;" class="tooltip"><i class="fa fa-info"></i> <span class="tooltiptext">About</span></a>
                        <a href="#"style="text-align: center;" class="tooltip"><i class=" fa fa-cog"></i><span class="tooltiptext">Services</span></a>
                        <a href="#"style="text-align: center;" class="tooltip"><i class="fa fa-phone"></i><span class="tooltiptext" >Services</span></a>
                  </div>
                </div>
                <div class="col-sm-12">
                    <div class="content">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-8 left">
                            <div style="width:100%; float:left;">
                                <div class="heading">
                                    <h1>Resources</h1>
                                </div>
                                <div class ="center hl">
                                    <button class = "btn-style " id="bg1" onclick="getResource();" >FILE</button>
                                    <button class="btn-style " id="bg2" onclick="getLinksData();">LINK</button>
                                </div>
                                <div style="width:100%;">
                                    <div class="Resources" id="Resources" style="float:left;width: 100%;"></div>
                                </div> 
                                <!-- <div style="width:100%">
                                    <div class="Links" id="Links" style="float:left; width:100%"></div>
                                </div> -->
                            </div>
                        </div> 
                        <div class="col-sm-2 ">                         
                            <div class="Data vl">
                                <form >
                                    <div class="filestyle hl mg">
                                        <label>Select a Field</label>
                                        <select id="subj" name="subj" class="form-control form-style">
                                            <option value="select">--Search--</option>
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
                                </form>
                                <form action="" id="resoucedata" class="input" >
                                    <div class="filestyle">
                                        <label for="">Select a Field:</label>
                                        <select name="cfield" id="cfield" class="form-control">
                                            <option value="Data Structure and Algorithm">Data Structure and Algorithm</option>
                                            <option value="DataBase Management System">DataBase Management System</option>
                                            <option value="Programming Languages">Programming Languages</option>
                                            <option value="Object Oriented Programming">Object Oriented Programming</option>
                                            <option value="Networking">Networking</option>
                                            <option value="Operating System">Operating System</option>
                                            <option value="Software Engineering">Software Engineering</option>
                                            <option value="Development">Development</option>
                                        </select>
                                        <div class="margin">
                                            <label>Topic:</label>
                                            <input type="text" id="topic" name="topic" placeholder="eg: Web Development" class="form-control form-style" required>
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
                                            <input type="file" id="pdf_file" name="pdf_file" style="display:none;" class=" form-style btn btn-info">
                                        </div>
                                        <div class="margin">
                                            <input type="submit" value="Upload" style="margin-top:5px;" onclick="uploadfiles();" class="log-btn btn btn-success">
                                        </div>
                                    </div> 
                                </form>   
                            </div>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                </div>   
            </div>
        </div>
    </section>
    
   <script type = "text/javascript">
          getResource();
        //   getLinksData();

          function getLinksData(){
            var bg_file = document.getElementById("bg1");
            var bg_link = document.getElementById("bg2");
            bg_file.style.backgroundColor = " rgb(213 218 220)";
            bg_link.style.backgroundColor = "rgb(4, 90, 120)";

              var token = "<?php echo password_hash("Links_page", PASSWORD_DEFAULT)?>";
              $.ajax({
                    type: "POST",
                    url: "ajax/getResource.php",
                    data:{token:token},
                    success: function(data){
                        // alert(data);
                    $('#Resources').html(data);
                }
            });
          }
         

        function getResource(){
            var bg_file = document.getElementById("bg1");
            var bg_link = document.getElementById("bg2");
            bg_file.style.backgroundColor = "rgb(4, 90, 120)";
            bg_link.style.backgroundColor = "rgb(213 218 220)";

            var token = "<?php echo password_hash("getdata", PASSWORD_DEFAULT)?>";
            $.ajax({
                    type: "POST",
                    url: "ajax/getResource.php",
                    data:{token:token},
                    success: function(data){
                        // alert(data);
                    $('#Resources').html(data);
                }
            });
        }

        function uploadfiles(){
           
           var ctype = document.getElementById("ctype");
           if(ctype.value != "select"){
       
               var form = document.getElementById("resoucedata");
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

        // function show(){
        //     var sidenav= document.getElementsByClassName("Ham");
        //     console.log("check1");
        //     if(sidenav.style.display==="none"){
        //         alert("if ");
        //         sidenav.classList.remove = "non-active";
        //         sidenav.classList.add="active";
        //     }
        //     else{
        //         sidenav.classList.remove = "active";
        //         sidenav.classList.add="non-active";
        //         alert("else");
        //     }
        //     sidenav.classList.toggle("active");
        //     console.log("check3");
        // } 

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


