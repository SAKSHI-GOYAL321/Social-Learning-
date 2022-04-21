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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <section>
        <div id="login" class="login-box">
            <div class="col-sm-12 paddoff">
                <div class="headder">
                    <!-- <div class="log-in"> -->
                        <div class="col-sm-6 paddoff">
                            <div class="login-wrap">

                        <img class="landing-img" src="img/landing.png" />
                            </div>
                        </div>
                        <div class="col-sm-4 log-in paddoff">
                            <div class="login-wrap login-html">
                                <div class="middle">
                                <h2>Welcome Back..</h2>
                                    <form action="">
                                        <div class="margin">
                                            <label>EMAIL:</label>
                                            <input type="email" id="emails" name="emails" placeholder="Enter email"
                                                class="form-control bradius" required>
                                        </div>
                                        <div class="margin">
                                            <label for="">PASSWORD:</label>
                                            <input type="password" id="passwords" name="passwords"
                                                placeholder="Enter password " class="form-control bradius pw" required>
                                            <i class="fa fa-eye icon" onclick="myPassword();"></i>
                                        </div>
                                        <div class="margin">
                                            <input type="checkbox" name="myElegibility" checked required>
                                            <span>Keep me Signed in </span>
                                        </div>
                                        <div class="margin">
                                            <input type="submit" onclick="login();" class="log-btn" value="LOGIN">
                                        </div>
                                    </form>
                                </div>
                                <div class="last margin">
                                    <div class="line">
                                        <hr>
                                        <p>Forgot password</p>
                                    </div>
                                    <div class="account margin">
                                        <h5>Don't have an account? <span onclick="showsignup();"
                                                class="btn-btn">SignUp</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 paddoff">
                            <div class="login-wrap"></div>
                        </div>
                    <!-- </div> -->
                </div>

            </div>
        </div>
        <div id="signup" class="login-box " style="display: none;">
            <div class="col-sm-12 paddoff">
                <div class="headder">
                    <!-- <div class="log-in"> -->
                        <div class="col-sm-6 paddoff">
                            <div class="login-wrap">
                            <img class="landing-img" src="img/landing.png" />
                            </div>
                        </div>
                        <div class="col-sm-4 log-in paddoff">
                            <div class="login-wrap login-html">


                                <div class="middle">
                                    
                                    <form action="">
                                        <div>
                                            <label>USERNAME:</label>
                                            <input type="text" id="Username" name="Username" placeholder="Enter name"
                                                class="form-control bradius" required>
                                        </div>
                                        <div>
                                            <label for="">PASSWORD:</label>
                                            <input type="password" id="password" name="password"
                                                placeholder="Enter password "
                                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                                class="form-control bradius" required>
                                        </div>
                                        <div>
                                            <label for="">CONFIRM PASSWORD:</label>
                                            <input type="password" id="same password" name="same password"
                                                placeholder="Comfirm password " class="form-control bradius" required>
                                        </div>
                                        <div>
                                            <label for="">E mail:</label>
                                            <input type="email" id="email" name="email" placeholder="Enter email "
                                                class="form-control bradius" required>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="myElegibility" checked required>
                                            <span>Accept terms and conditions </span>
                                        </div>
                                        <div>
                                            <input type="submit" onclick="save();" class="log-btn">
                                        </div>
                                    </form>
                                </div>
                                <div class="last">
                                    <div>
                                        <hr>
                                        <p>Forgot password</p>
                                    </div>
                                    <div class="account">
                                        <h5>Already have an account? <span onclick="showlogin();"
                                                class="btn-btn">LOGIN</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 paddoff">
                                <div class="login-wrap"></div>
                            </div>
                        </div>
                    <!-- </div> -->

                </div>
            </div>
    </section>
    <script type="text/javascript">
        var loginform = document.getElementById('login');
        var signupform = document.getElementById('signup');

        function showlogin() {
            signupform.style.display = "none";
            loginform.style.display = "block";
        }
        function showsignup() {
            loginform.style.display = "none";
            signupform.style.display = "block";
        }
        function myPassword() {
            var x = document.getElementById('password')
            if (x.type == "password") {
                x.type = "text";
            }
            else {
                x.type = "password";
            }
        }
    </script>
    <script type="text/javascript">
        function save() {
            var uname = document.getElementById('Username').value;
            var pass = document.getElementById('password').value;
            var cpass = document.getElementById('same password').value;
            var email = document.getElementById('email').value;
            var token = "<?php echo password_hash("hello", PASSWORD_DEFAULT);?>";
            if (uname != "" && email != "" && pass != "" && cpass != "") {
                var a = ValidateEmail(email);
                var b = passmatch(pass, cpass);

                if (a == true && b == true) {
                    $.ajax({
                        type: "POST",
                        url: "ajax/submitdata.php",
                        data: { uname: uname, pass: pass, email: email, token: token }, 
                        success: function (data) {
                            if (data == 0) {
                                alert('data inserted successfully');
                            }
                            else if (data == 1) {
                                alert('data not inserted');
                            }
                            else {
                                alert(data);
                            }
                        }
                    });
                }
            }
            else {
                alert("INPUT ALL THE DATA");
            }
        }
        function ValidateEmail(mail) {
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            if (reg.test(mail)) {
                return true;
            }
            else {
                alert("You have entered an invalid email address!");
                return false;
            }
        }
        function passmatch(a, b) {
            if (a == b) { return (true); }
            else { alert("You have entered an invalid Password!"); return (false); }
        }
    </script>

    <script type="text/javascript">
        function login() {
            var emails = document.getElementById('emails').value;
            var passwords = document.getElementById('passwords').value;
            if (emails != "" && passwords != "") {
                if (ValidateEmail(emails)) {
                    $.ajax({
                            type: 'POST',
                            url: "ajax/login.php",
                            data: {emails:emails, passwords:passwords},
                            success: function (data) {
                                if (data == 0) {
                                    window.location.href ="dashboard.php";
                                }
                                else if (data == 1) {
                                    alert('invalid credentials');
                                }
                                else if(data == 2){
                                    alert("please follow the proper format");
                                }
                                else if(data == 3){
                                    alert('Email-Id not found');
                                }
                                else {
                                    alert(data);
                                }
                            }
                        });
                }
            }
        }
        function ValidateEmail(mail) {
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            if (reg.test(mail)) {
                return true;
            }
            else {
                alert("You have entered an invalid email address!");
                return false;
            }
        }
    </script>

    <!-- <script type="text/javascript">
        function login() {
            var token = "<?php echo password_hash("getdata", PASSWORD_DEFAULT)?>";
            $.ajax(
                {
                    type: "POST",
                    url: "get.php",
                    data: { token: token },
                    success: function (data) {
                    }
                })
        }

    </script> -->
    <script type="text/javascript">
        $('form').submit(function (e) {
            e.preventDefault();
        });
    </script>

</body>
</html