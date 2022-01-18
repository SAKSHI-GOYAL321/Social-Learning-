<?php
    include('connection.php');
    if(password_verify("getdata",$_POST['token']))
    {
        $query = $db->prepare('SELECT * FROM resources WHERE Files IS NOT NULL;');
        $data = array();
        $execute=$query->execute($data);
?>
<?php
            while($datarow=$query->fetch())
            {
?>
                <div class="box">
                    <p> <?php echo $datarow['Topic']; ?> </p>
                    <embed src="./<?php echo $datarow['Files'] ?>" width="400px" height="248px"  type="application/pdf" />
                    <div class="open-file-style">
                        <a href="./<?php echo $datarow['Files'] ?>"   target=”_blank”>Open File</a>
                    </div>
                <?php 
 ?>
</div>
<?php
            }
        }
            ?>