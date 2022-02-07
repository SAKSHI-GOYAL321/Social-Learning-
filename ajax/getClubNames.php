<?php 
    include('connection.php');
    if(password_verify("ClubNames",$_POST['token']))
    {
        $query = $db->prepare("SELECT * FROM clubname");
        $data = array();
        $execute = $query->execute($data); 
        while($datarow = $query->fetch())
        {
        ?>
                <div class="col-sm-4 ">
                            <div class="card wrap-image">
                                <div class="col-sm-4 paddoff">
                                    <div class="club-content">
                                        <div class="title">
                                            <p><?php echo $datarow['club_name'] ?></p>
                                        </div>
                                        <div class="btn">
                                            <a href="./clubPage.php?club_id=<?php echo $datarow['club_id']?>"><button class="btn btn-primary">Join</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8 paddoff">
                                    <div class="image">
                                        <img src="<?php echo $datarow['club_img'] ?>" alt="">
                                    </div>
                                </div>
                            </div>
                </div>
        <?php
        }
    }
?>