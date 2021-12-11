<?php
    include('connection.php');
    var_dump($_GET);
    echo $bid;
    $id = $_GET['bid'];

    $query = $db->prepare('SELECT * FROM blogdata where bid=?');
    $data = array($id);
    $execute=$query->execute($data);

    while($datarow = $query->fetch()){
        ?>
            <h1><?php echo $datarow['Title']; ?></h1>
            <img src="<?php echo $datarow['ImagePath']; ?>" alt="Reload">
            <p><?php echo $datarow['Content']; ?></p>
        <?php
    }
?>