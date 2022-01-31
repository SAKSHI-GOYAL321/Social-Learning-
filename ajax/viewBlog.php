<?php
include('connection.php');

    $id = $_POST['id'];
    $query = $db->prepare('SELECT * FROM blogdata where bid = ?');
    $data = array($id);
    $execute=$query->execute($data);
    $datarow = $query->fetch();
    ?>
    <div class="blog-page">
        <h1><?php $datarow['Title']?></h1>
        <img src="social/<?php $datarow['ImagePath'] ?>" alt="Reload">
        <pre><?php $datarow['Content'] ?></pre>
    </div>
    <?php
?>
