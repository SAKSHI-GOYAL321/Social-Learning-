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
    <link rel="stylesheet" href="css/clubPage.css">
    
    <title>events page</title>
</head>
<body>

<a class="login-trigger" href="#" data-target="#login" data-toggle="modal">Login</a>

<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">
    
    <div class="modal-content">
      <div class="modal-body">
        <button data-dismiss="modal" class="close">&times;</button>
        <h4>Login</h4>
        <form>
          <input type="text" name="username" class="username form-control" placeholder="Username"/>
          <input type="password" name="password" class="password form-control" placeholder="password"/>
          <input class="btn login" type="submit" value="Login" />
        </form>
      </div>
    </div>
  </div>  
</div>



<script>
  connectEvents();
            function connectEvents(){
                var id = <?php echo $_GET['club_id'] ?>;
                var token = "<?php echo password_hash('Events', PASSWORD_DEFAULT); ?>";
                $.ajax({
                    type: "POST",
                    url: "ajax/ClubPage.php",
                    data: {club_id:id},
                    success: function(data){
                        $('#club-events').html(data);
                    }
                });
            }
</script>
</body>
</html>