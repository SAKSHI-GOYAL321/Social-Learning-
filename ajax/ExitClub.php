<?php
    include('connection.php');
    session_start();
    $id = $_POST['club_id'];
    $email = $_SESSION['email'];
    $query = $db->prepare('DELETE from clubmembers where club_id = ? AND email = ?');
    $array = array($id, $email);
    $execute = $query->execute($array);
    if($execute)
        echo 0;
    else
        echo 1;
?>