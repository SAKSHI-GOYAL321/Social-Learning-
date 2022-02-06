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
            <div class = "col-sm-6">
                <div class="box">
                    <p> <?php echo $datarow['Topic']; ?> </p>
                    <embed src="./<?php echo $datarow['Files'] ?>" width="100%" height="248px"  type="application/pdf" />
                    <div class="open-file-style btn-primary">
                        <a href="./<?php echo $datarow['Files'] ?>"  target=”_blank”>Open File</a>
                    </div>
            </div>
                <?php 
 ?>
</div>
<?php
            }
        }
        else if(password_verify("Links_page", $_POST['token']))
        {
            $query = $db->prepare('SELECT * FROM resources WHERE Link IS NOT NULL;');
            $data = array();
            $execute=$query->execute($data);

        ?>
            <table border="2" id="customers">
                <tr>
                    <th>Topic</th>
                    <th>url</th>
                    <th>Visit site</th>
                </tr>
                <?php
                while($datarow = $query->fetch()){
                ?>
                <tr>
                    <td><?php echo $datarow['Topic'] ?></td>
                    <td><?php echo $datarow['Link'] ?></td>
                    <td><div class="open-link-style btn-info">
                        <a href="<?php echo $datarow['Link'] ?>"  target=”_blank”>OPEN LINK</a>
                    </div></td>
                </tr>

                <?php
                }
                ?>
            </table>
    
<?php
        }
            ?>