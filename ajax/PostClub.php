<?php
    session_start();
    include("connection.php");
    $valid_extension = array('jpeg','jpg','png','PNG','JPG','JPEG','jfif','JFIF','svg');
	$path = '../img/club_images/';

    if(!empty($_FILES["image_file"])){
        $clubName = $_POST['title'];
        $clubDesc = $_POST['write'];
        $clubImg = $_FILES['image_file']['name'];
        $tempname = $_FILES['image_file']['tmp_name'];

        $ext = pathinfo($clubImg, PATHINFO_EXTENSION); 
        $Admin = $_SESSION['uname'];

        if(in_array($ext, $valid_extension)){
			$path = $path.strtolower($clubImg);
		}
		if(move_uploaded_file($tempname, $path)){
            
		}
        $clubImg = "img/club_images/" . strtolower($clubImg);
        $query = $db->prepare('INSERT INTO clubname (club_name, club_desc, club_img, club_admin) VALUES (?,?,?,?)');
		$data=array($clubName, $clubDesc, $clubImg, $Admin);
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
    else{
        echo 2;
    }

?>