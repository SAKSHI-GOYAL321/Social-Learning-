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
    <title>Create Post</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="./Hamburger.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
    <style>
        .content{
            width: 80%;
            margin: 7% auto;
            margin-top: 10vh;
        }
        .title{
            text-align: center;
        }
        .title h3{
            font-weight: 600;
            color: #0d3d66;
            text-shadow: 0px 2px 12px #8383d0;
            font-size: 40px;
            margin-bottom: 43px;
            margin-top: 20px;
        }
        .title .form-control{
            margin: 14px 0px;
        }
        .txt-alg{
            text-align: center;
        }
        input[type=submit]{
            padding: 7px 3%;
            font-size: 1.6rem;
            border-radius: 14px;
            border: 2px solid gray;
            background-color: #ced0e5;
            box-shadow: inset 0px 0px 12px 0px #493e91;
        }
        .mg-10{
            margin: 10px 0px;
        }
        @media (max-height:1200px) {

        }
    </style>
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
                        <form id = "form">
                            <div class="title">
                                <h3>Create Your Blog</h3>
                                <input type="text" name="title" id="title" placeholder="Enter title here" class="form-control ">
                            </div>
                            <div class="para">
                                <textarea name="write" id="write" placeholder="Start writing..." cols="53" rows="20" class="form-control "></textarea>
                            </div>
                            <div class="mg-10">
                                <label>Upload a Image</label>
                                <input type="file" id="image_file" name="image_file" class="form-control ">
                            </div>
                            <div class="txt-alg" >
                                <input type="submit" value="Post" name="submit" id="submit" onclick="BlogPost();">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        CKEDITOR.replace('write');
    </script>

    <script type="text/javascript">
        function BlogPost()
        {
            var form = document.getElementById("form");
            var data = new FormData(form);
    
            $.ajax({
    
                    type: "POST",
                    url: "ajax/SubmitBlog.php",
                    data: data,
                    contentType: false,
                    processData: false,
                    success: function(data){
                        if(data == 0)
                        {
                            alert('data inserted successfully');
                        }
                        else if(data == 1)
                        {
                            alert('data not inserted');
                        }
                        else if(data == -1)
                        {
                            alert("Please check your password");
                        }
                        else
                        {
                            alert(data);
                        }
                    }
            });
        }
    </script>
    <script type="text/javascript">
        $('form').submit(function(e) {
            e.preventDefault();
        });
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