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
        <div class="back-arrow">
           <a href="./blog.php" > <img src="./img/left.png" /></a>
        </div>
        <h1 class="main-head"><?php echo $datarow['Title']?></h1>
        <img src="social/<?php echo $datarow['ImagePath'] ?>" alt="Reload">
        <div class="blog-content"><?php echo $datarow['Content'] ?></div>
        <div class="up-arrow" onclick="topFunction()" id="myBtn">
            <button <i class="fa-solid fa-arrow-up"></i>
        </div>
    </div>
    <?php
?>