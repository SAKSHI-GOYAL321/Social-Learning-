<?php
include('connection.php');
if(password_verify("Members",$_POST['token']))
{
    $query=$db->prepare('select club_admin from clubname')
}


    echo 
?>