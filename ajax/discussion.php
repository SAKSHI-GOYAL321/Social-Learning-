<?php
    include('connection.php');
    session_start();
    if(password_verify('profile-photo', $_POST['token'])){
        $email = $_SESSION['email'];
        $query = $db->prepare('SELECT photo from profile where email = ?');
        $data = array($email);
        $execute = $query->execute($data);
        if($execute){
            $datarow = $query->fetch();
        ?>
                <img src = "<?php echo $datarow['photo']; ?>" />
        <?php
        }
        else{
            echo "else part";
        }
    }

?>