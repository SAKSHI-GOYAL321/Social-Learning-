<?php 
session_start();
include('connection.php');
$id = $_POST['club_id'];
$email=$_SESSION['email'];
$query=$db->prepare('insert into clubmembers (email, club_id) values (?,?)');
$data=array($email,$id);
$execute=$query->execute($data);



?>