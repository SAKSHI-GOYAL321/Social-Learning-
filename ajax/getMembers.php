<?php
include('connection.php');
$id = $_POST['club_id'];
if(password_verify("Members", $_POST['token'])){
    $query=$db->prepare('SELECT club_admin FROM clubname WHERE club_id = ?');
    $data=array($id);
    $execute=$query->execute($data);

    $datarow=$query->fetch();
    ?>
    <div class="members-list">
        <h4>Admin</h4>
        <a href="profile_page.php"><p ><?php echo $datarow['club_admin']?></p></a>

    <?php
}
if(password_verify("Members",$_POST['token']))
{
    $query=$db->prepare('SELECT st.uname FROM user_details as st JOIN clubmembers as c ON st.email = c.email WHERE c.club_id = ?');
    $data=array($id);
    $execute=$query->execute($data);
    ?>
    <h4>Members</h4>
    <?php

    while($datarow=$query->fetch()){
        ?>

        
        <!-- <p><?php echo $datarow['uname'];  ?></p> -->
        <a href="profile_page.php"><p ><?php echo $datarow['uname']?></p></a>
    </div>
        <?php
    }
    


}



   
?>