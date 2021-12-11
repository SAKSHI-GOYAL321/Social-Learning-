<?php 
	include('connection.php');
	if(password_verify("hello", $_POST['token']))
	{
		$uname=$_POST['uname'];
		$pass=$_POST['pass'];
		// $cpw=$_POST['cpw'];
		$email=$_POST['email'];
		//database
		$hash_pass = password_hash($pass,PASSWORD_DEFAULT);
			//1->query prepare
			$query = $db->prepare('INSERT INTO user_details(uname,pw,email) VALUES (?,?,?)');
			//2->query mein data bhejo
			$data=array($uname,$hash_pass,$email);
			//3->query execute kro
			$execute=$query->execute($data);
			//4->query success pe action
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
