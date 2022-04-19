<?php
    include('connection.php');
    if(password_verify('Discussion', $_POST['token'])){
        $id = $_POST['club_id'];
        $query = $db->prepare('SELECT d.description, d.image, d.date, u.uname, p.fname, p.lname, p.photo, d.club_id FROM clubdiscussion d JOIN user_details u ON d.email = u.email JOIN profile p ON p.email = u.email WHERE club_id = ? ORDER BY d.sno DESC');
        $data = array($id);
        $execute = $query->execute($data);
        if($execute){
            ?>
        <div class="block">
            <?php
            while($datarow = $query->fetch()){
           ?>
            <div class="items">
                <div class="user-img">
                    <img src="<?php echo $datarow['photo']; ?>" alt="">
                    <span><?php 
                    if($datarow['fname'] == ""){
                        echo $datarow['uname'];
                    }
                    else{
                        echo $datarow['fname'] . " " . $datarow['lname'];
                    }
                    ?></span>
                </div>
                <div class="discuss">
                    <?php
                        if($datarow['image'] != ""){
                        ?>
                            <img src="<?php echo $datarow['image']; ?>" alt="">
                        <?php
                        } ?>
                    <p> <?php echo $datarow['description']; ?></p>
                </div>

            </div>
        </div>
            <?php


            }
        }
    }

?>