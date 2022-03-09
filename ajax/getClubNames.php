<?php 
    session_start();
    include('connection.php');
    if(password_verify("ClubNames",$_POST['token']))
    {
        $email = $_SESSION['email'];
        $query = $db->prepare("SELECT club_name, club_img, club_id FROM clubname where club_admin_email=?");
        $data = array($email);
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
                                        <div class="btn-style-block">
                                            <a class="btn-1" href="./clubPage.php?club_id=<?php echo $datarow['club_id']?>"><button class="width100 btn btn-primary">Open</button></a>
                                            <button onclick="DeleteClub()"class=" btn-1 btn btn-primary">Delete</button>
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
    if(password_verify("ClubNames",$_POST['token'])){
        $email = $_SESSION['email'];
        $query = $db->prepare("SELECT club_name, club_img, club_id FROM clubname where club_admin_email != ?");
        $data = array($email);
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
                                        <div class="btn-style-block">
                                            <a class="btn-1" href="./clubPage.php?club_id=<?php echo $datarow['club_id']?>"><button class="width100 btn btn-primary">Join</button></a>
                                            <!-- <button onclick="DeleteClub()"class=" btn-1 btn btn-primary">Delete</button> -->
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