<?php
    include('connection.php');
    $valid_extension = array('jpeg','jpg','png','PNG','JPG','JPEG','jfif','JFIF','svg');
	$path = '../img/';
    echo "check2";
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
        $email=$_POST['email'];
        $profession=$_POST['profession'];
        $bio=$_POST['bio'];
        $website = $_POST['website'];
        if(!empty($_FILES["photo"])){
            $img = $_FILES['photo']['name'];
            $tmp = $_FILES['photo']['tmp_name'];
            $ext = pathinfo($img, PATHINFO_EXTENSION); 
    
            if(in_array($ext, $valid_extension)){
                $path = $path.strtolower($img);
            }
            if(move_uploaded_file($tmp, $path)){
        
            }
        }
        else{
            $path = '../img/user_profile.png';
        }
        $query = $db->prepare('SELECT * FROM profile WHERE email = ?');
        $data = array($email);
        $execute = $query->execute($data);
        if($execute){
            if($query->fetch() > 0){
                $query = $db->prepare('UPDATE profile set fname = ? , lname = ?, website = ?, photo = ?, profession=?, bio=? where email= ?');
                $data=array($fname, $lname, $website, $path, $profession,$bio, $email);
                $execute=$query->execute($data);
            }
            else{
                $query = $db->prepare('INSERT INTO profile(fname, lname, website, photo, email, profession, bio) VALUES (?,?,?,?,?,?,?)');
                $data=array($fname, $lname, $website, $path, $email,$profession,$bio);
                $execute=$query->execute($data);
            }

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
            echo "2";
        }
?>