<?php
	session_start();
	$valid_extension = array('jpeg','jpg','png','PNG','JPG','JPEG','jfif','JFIF');
	$path = '../img/';
    include("connection.php");
    if(!empty($_FILES["image_file"]))
	{
		$title=$_POST['title'];
		$write=$_POST['write'];
		$img = $_FILES['image_file']['name'];
		$tmp = $_FILES['image_file']['tmp_name'];
		$ext = pathinfo($img, PATHINFO_EXTENSION); 

		if(in_array($ext, $valid_extension)){
			$path = $path.strtolower($img);
		}
		if(move_uploaded_file($tmp, $path)){
	
		}
			$query = $db->prepare('INSERT INTO BlogData(Author, title, content, ImagePath) VALUES (?,?,?,?)');
			$data=array($_SESSION['uname'], $title, $write, $path);
			$execute=$query->execute($data);
			
			if($execute)
			{
				echo 0;
			}
			else
			{
				echo 1;
			}
		}	
		else
		{
			echo "attack";
		}
?>