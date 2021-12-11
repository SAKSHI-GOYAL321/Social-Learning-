<?php 
include('connection.php');
if(password_verify("getdata",$_POST['token']))
{
    $query = $db->prepare('SELECT * FROM blogdata');
    $data = array();
    $execute=$query->execute($data);
?>
    <div  style="width:100%;" class="content-2">
        <div class="col-sm-3">
            <div class="create">
                <i class="fa fa-plus-circle" style="font-size:48px"></i>
                <a href="createPost.php">Create Post</a>
            </div>
        </div>
        <?php
            while($datarow=$query->fetch())
            {
        ?>
        <div class="col-sm-3">
            <div class="box">
                <div>
                    <img src="social/<?php echo $datarow['ImagePath']; ?>" alt="" style="width:100%;">  
                </div>
                <div style =" ">
                    <p><?php echo $datarow['Title'];?></p>
                    <a href="blogpage.php?bid=<?php echo $datarow['bid']; ?>" class="btn">View More</a>
                    <!-- <button onclick="view(
                        <?php
                        //  echo $datarow['id']
                         ?> 
                        );" class="btn">View More</button>  -->
                </div>
            </div>
        </div>

            <?php
            }
            ?>
    </div>
<?php
}
?>