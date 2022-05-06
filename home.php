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
    <title>LOGIN - SIGNUP</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section>
        <div id="login" class="login-box">
            <div class="col-sm-12 paddoff">
                <div class="headder">
                    <div class="log-in">
                        <div class="col-sm-1 paddoff">
                            <div class="login-wrap"></div>
                        </div>
                        <div class="col-sm-10 paddoff">

                            <div class="login-wrap login-html">
                                <div class="middle">
                                    <form action="">
                                        <div class="margin">
                                            <label>USERNAME:</label>
                                            <input type="text" id="Username" name="Username" placeholder="Enter name"
                                                class="form-control bradius" required>
                                        </div>
                                        <div class="margin"> 
                                            <label for="">PASSWORD:</label>
                                            <input type="password" id="password" name="password"
                                                placeholder="Enter password " class="form-control bradius pw" required>
                                            <i class="fa fa-eye icon" onclick="myPassword();"></i>
                                            <!-- <input type="checkbox" name="my password" id="my password" onclick="myPassword();" >Show -->
                                        </div>
                                        <div class="margin">
                                            <input type="checkbox" name="myElegibility" checked required>
                                            <span>Keep me Signed in </span>
                                        </div>
                                        <div class="margin">
                                        <input type="submit" class="log-btn">
                                            <!-- <button type="submit" class="log-btn">
                                                <h5>LOGIN<h5>
                                            </button> -->
                                        </div>
                                    </form>
                                </div>
                                <div class="last margin">
                                    <div>
                                        <hr>
                                        <p>Forgot password</p>
                                    </div>
                                    <div class="account margin">
                                        <h5>Don't have an account? <span onclick="showsignup();" class="btn-btn">SignUp</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-1 paddoff">
                            <div class="login-wrap"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div id="signup" class="login-box " style="display: none;">
            <div class="col-sm-12 paddoff">
                <div class="headder">
                    <div class="log-in">
                        <div class="col-sm-1 paddoff">
                            <div class="login-wrap"></div>
                        </div>
                        <div class="col-sm-10 paddoff">
                            <div class="login-wrap login-html">

                                <div class="middle">
                                    <form action="">
                                        <div class="">
                                            <label>USERNAME:</label>
                                            <input type="text" id="Username" name="Username" placeholder="Enter name"
                                                class="form-control bradius" required>
                                        </div>
                                        <div>
                                            <label for="">PASSWORD:</label>
                                            <input type="password" id="password" name="password"
                                                placeholder="Enter password " class="form-control bradius" required>
                                        </div>
                                        <div>
                                            <label for="">CONFIRM PASSWORD:</label>
                                            <input type="password" id="same password" name="same password"
                                                placeholder="Comfirm password " class="form-control bradius" required>
                                        </div>
                                        <div>
                                            <label for="">E mail:</label>
                                            <input type="text" id="email" name="email" placeholder="Enter email "
                                                class="form-control bradius" required>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="myElegibility" checked required>
                                            <span>Accept terms and conditions </span>
                                        </div>
                                        <div>
                                            <input type="submit" class="log-btn">
                                            <!-- <button type="submit" class="log-btn">
                                                <h5>SIGNUP<h5>
                                            </button> -->
                                        </div>
                                    </form>
                                </div>
                                <div class="last">
                                    <div>
                                        <hr>
                                        <p>Forgot password</p>
                                    </div>
                                    <div class="account">
                                        <h5>Already have an account? <span onclick="showlogin();" class="btn-btn">LOGIN</span></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-1 paddoff">
                            <div class="login-wrap"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script type="text/javascript">
        var loginform = document.getElementById('login');
            var signupform = document.getElementById('signup');
        
        function showlogin() {
            signupform.style.display = "none";
            loginform.style.display = "block"
        }
        function showsignup() {
            loginform.style.display = "none";
            signupform.style.display = "block";

        }

        function myPassword(){
            var x = document.getElementById('password')
            if (x.type == "password")
            {
                x.type = "text";
            }
            else{
                x.type = "password";
            }
        }
    </script>
    <script type="text/javascript">
        function submitdata()
        {
            var uname = document.getElementById('Username').value;
            var pw = document.getElementById('password').value;
            var cpw = document.getElementById('confirm password').value;
            var email = document.getElementById('email').value;
            var token ="<?php echo password_hash("hello", PASSWORD_DEFAULT);?>";
    
            $.ajax({
    
                    type: "POST",
                    url: "ajax/submitdata.php",
                    data: {uname:uname,pw:pw,cpw:cpw,email:email,token:token},
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
	$('form').submit(function(e){
		e.preventDefault();
	});
</script>
</body>

</html>