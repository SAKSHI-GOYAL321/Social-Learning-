<?php
include('connection.php');
if(password_verify("Members",$_POST['token']))
{
    $query=$db->prepare('SELECT st.uname FROM user_details as st JOIN clubmembers as c ON st.email = c.email');
    $data=array();
    $execute=$query->execute($data);

    while($datarow=$query->fetch()){

        echo $datarow['uname'];



    }
    


}



   
?>