<?php
    include('connection.php');
    $id = $_POST['club_id'];
    echo $id;
    $query = $db->prepare('DELETE from clubname where club_id = ?');
    $array = array($id);
    $execute = $query->execute($array);
    if($execute)
        echo 0;
    else
        echo 1;
?>