<?php
include('connection.php');
    // var_dump($_GET);
    $id = $_POST['bid'];

    $query = $db->prepare('SELECT * FROM blogdata where bid = ?');
    $data = array($id);
    $execute=$query->execute($data);
    $datarow = $query->fetch();
    ?>
    <div class="blog-page">
        <div>
            <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-angle-up"></i></button>
        </div>
        <div class="back-arrow">
           <a href="./blog.php" > <img src="./img/left.png" /></a>
        </div>
        <div class="main-img">
            
              <h1 class="main-head"><?php echo $datarow['Title']?></h1>
              <img src="social/<?php echo $datarow['ImagePath'] ?>" alt="Reload">
        </div>
       
        <div class="blog-content"><?php echo $datarow['Content'] ?></div>
    </div>
    <?php
    // <i class="fa-solid fa-arrow-up"></i>
?>