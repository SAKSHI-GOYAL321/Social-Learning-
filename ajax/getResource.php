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
    <embed src="./<?php echo $datarow['Files'] ?>" width="500px" height="300px"  type="application/pdf" />
    <a href="<?php echo $datarow['Link'] ?>" ><?php echo $datarow['Link'] ?> </a>
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