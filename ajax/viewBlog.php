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
        <h1><?php echo $datarow['Title']?></h1>
        <img src="social/<?php echo $datarow['ImagePath'] ?>" alt="Reload">
        <p><?php echo $datarow['Content'] ?></p>
    </div>
    <?php
?>
