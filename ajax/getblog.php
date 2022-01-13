<?php 
include('connection.php');
if(password_verify("data", $_POST['token'])){
    $query = $db->prepare('SELECT * FROM blogdata where bid > ( (select COUNT(*) from blogdata) - 3)');
    $data = array();
    $execute=$query->execute($data);
    $datarow=$query->fetch();
    ?>
    <div class="col-sm-6 paddoff">
        <div class="grid">
            <figure class=" blog-main effect-zoe">
                <div class="imgblur" id="main-img">
                    <img src="social/<?php echo $datarow['ImagePath']; ?>" alt="img25"/>
                </div>
                <figcaption>
                    <h2><?php echo $datarow['Title']; ?></h2>
                    <h5 class="icon-links"><span ><i class="fa fa-user-circle"></i></span> <?php echo $datarow['Author']; ?> . <?php echo $datarow['Date']; ?></h5>
                </figcaption>
            </figure>
        </div>
</div>
        <div class="col-sm-6 paddoff">
    <?php
    //2nd Part
    $datarow=$query->fetch();
    ?>
        <div class="grid">
            <figure class=" blog-top effect-zoe">
                <img src="social/<?php echo $datarow['ImagePath']; ?>" alt="img25"/>
                <figcaption>
                    <h2><?php echo $datarow['Title']; ?></h2>
                    <h5 class="icon-links"><span ><i class="fa fa-user-circle"></i></span> <?php echo $datarow['Author']; ?> . <?php echo $datarow['Date']; ?></h5>
                </figcaption>
            </figure>
        </div>
    <?php
    //3rd Part
    $datarow=$query->fetch();
    ?>
        <div class="grid">
            <figure class=" blog-btm effect-zoe">
                <img src="social/<?php echo $datarow['ImagePath']; ?>" alt="img25"/>
                <figcaption>
                    <h2><?php echo $datarow['Title']; ?></h2>
                    <h5 class="icon-links"><span ><i class="fa fa-user-circle"></i></span> <?php echo $datarow['Author']; ?> . <?php echo $datarow['Date']; ?></h5>
                </figcaption>
            </figure>
        </div>
    </div>
        


    <div class="grid">
        <?php while($datarow = $query->fetch()){
            ?>
					<figure class="effect-zoe">
						<img src="social/<?php echo $datarow['ImagePath']; ?>" alt="img25"/>
						<figcaption>
							<h2>Creative <span>Zoe</span></h2>
							<p class="icon-links">
								<a href="#"><span class="icon-heart"></span></a>
								<a href="#"><span class="icon-eye"></span></a>
								<a href="#"><span class="icon-paper-clip"></span></a>
							</p>
							<p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
						</figcaption>			
					</figure>
				<?php 
            }
                ?>	
	</div>
 <?php
}
if(password_verify("lowerdata",$_POST['token']))
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
                    <img src="social/<?php echo $datarow['ImagePath']; ?>" alt="Reload" style="width:100%;">
                </div>
                <div style =" ">
                    <p><?php echo $datarow['Title'];?></p>
                    <a href="blogpage.php?bid=<?php echo $datarow['bid']; ?>" class="btn">View More</a>
                </div>
            </div>
        </div>

    <?php
        }
    ?>
    </div>
<?php
}
else if(password_verify("upperdata",$_POST['token']))
{
    $query = $db->prepare('SELECT * FROM blogdata where bid > ( (select COUNT(*) from blogdata) - 3)');
    $data = array();
    $execute=$query->execute($data);

    //Ist Part 
    $datarow=$query->fetch();
?>
    <div class="col-sm-6 paddoff">
        <div class="blog-main">
            <p><?php echo $datarow['Title']; ?></p>
            <h5><span ><i class="fa fa-user-circle"></i></span> <?php echo $datarow['Author']; ?> . <?php echo $datarow['Date']; ?></h5>                                
        </div>
    </div>
    <div class="col-sm-6 paddoff">
    <?php
    //2nd Part
    $datarow=$query->fetch();
    ?>
        <div class="blog-top">
        <!-- echo $datarow['Title'];  -->
            <p><?php ?></p>
            <h5></h5>
        </div>
    <?php
    //3rd Part
    $datarow=$query->fetch();
    ?>
        <div class="blog-btm">
            <p><?php echo $datarow['Title']; ?></p>
            <h5><span ><i class="fa fa-user-circle"></i></span> <?php echo $datarow['Author']; ?> . <?php echo $datarow['Date']; ?></h5>
        </div>  
    </div>

<?php
}
?>