<?php
include('connection.php');
$id = $_POST['club_id'];
if(password_verify("Members", $_POST['token'])){
    $query=$db->prepare('SELECT club_admin FROM clubname WHERE club_id = ?');
    $data=array($id);
    $execute=$query->execute($data);

    $datarow=$query->fetch();
    ?>
    <div>
        <h4>Admin</h4>
        <p> <?php echo $datarow['club_admin']; ?></p>

    <?php
}
if(password_verify("Members",$_POST['token']))
{
    $query=$db->prepare('SELECT st.uname FROM user_details as st JOIN clubmembers as c ON st.email = c.email WHERE c.club_id = ?');
    $data=array($id);
    $execute=$query->execute($data);

    while($datarow=$query->fetch()){
        ?>
        <h4>Members</h4>
        <p><?php echo $datarow['uname']; ?></p>
    </div>
        <?php
    }
    


}



   
?>