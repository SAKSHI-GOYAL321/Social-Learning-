<?php
    include('connection.php');
    if(password_verify("getdata",$_POST['token']))
{
    $query = $db->prepare('SELECT * FROM resources');
    $data = array();
    $execute=$query->execute($data);
?>

<?php
            while($datarow=$query->fetch())
            {
?>
<div class="box">
    <p> <?php echo $datarow['Topic']; ?> </p>
    <embed src="Uploaded_Resources/WDB+JavaScript+Introduction.pdf" width="40%" height="100px" style="float:left" type="application/pdf" />
    <!-- ./Uploaded_Resources/WDB+JavaScript+Introduction.pdf -->
   <!-- ./ -->
   <?php 
//    echo $datarow['Files']
 ?>
</div>
<?php
            }
        }
            ?>