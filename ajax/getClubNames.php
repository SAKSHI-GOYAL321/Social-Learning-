<?php 
    session_start();
    include('connection.php');
    if(password_verify("ClubNames",$_POST['token']))
    {
        $email = $_SESSION['email'];
        $query = $db->prepare("SELECT club_name, club_img, club_id, club_desc FROM clubname where club_admin_email=?");
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
                                            <a class="btn-1" href="./clubPage.php?club_id=<?php echo $datarow['club_id']; ?>"><button class="width100 btn btn-primary">Open</button></a>
                                            <button onclick="DeleteClub(<?php echo $datarow['club_id']; ?>)"class=" btn-1 btn btn-primary">Delete</button>
                                        </div>
                                    </div>
                                </div>
                                <figure class="col-sm-8 paddoff hover-img">
                                    
                                    <img class="image" src="<?php echo $datarow['club_img'] ?>" alt="">
                                
                                <figcaption>
                                    <p><?php echo $datarow['club_desc'] ?></p>
                                </figcaption>
                              </figure>
                        </div>
                </div>
        <?php
        }
    }


    if(password_verify("ClubNames",$_POST['token']))
    {
        $email = $_SESSION['email'];
        $query = $db->prepare("SELECT c.club_name, c.club_img, c.club_id, c.club_desc FROM clubname as c join clubmembers as m on c.club_id=m.club_id where m.email=?");
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
                                            <a class="btn-1" href="./clubPage.php?club_id=<?php echo $datarow['club_id']; ?>"><button class="width100 btn btn-primary">Open</button></a>
                                            <button onclick="DeleteClub(<?php echo $datarow['club_id']; ?>)"class=" btn-1 btn btn-primary">Exit</button>
                                        </div>
                                    </div>
                                </div>
                                <figure class="col-sm-8 paddoff hover-img">
                                    
                                    <img class="image" src="<?php echo $datarow['club_img'] ?>" alt="">
                                
                                <figcaption>
                                    <p><?php echo $datarow['club_desc'] ?></p>
                                </figcaption>
                              </figure>
                        </div>
                </div>
        <?php
        }
    }
 
 
    if(password_verify("ClubNames",$_POST['token'])){
        $email = $_SESSION['email'];
        $query = $db->prepare("SELECT c.club_name, c.club_img, c.club_id, c.club_desc FROM clubname as c join clubmembers as m on c.club_id=m.club_id where m.email!=? AND c.club_admin_email!=?");
        $data = array($email,$email);
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
                                            <a class="btn-1" href="./clubPage.php?club_id=<?php echo $datarow['club_id']?>"><button onclick="removeButton(<?php echo $datarow['club_id']; ?>)" class="width100 btn btn-primary">Join</button></a>
                                            <!-- <button onclick="DeleteClub()"class=" btn-1 btn btn-primary">Delete</button> -->
                                        </div>
                                    </div>
                                </div>
                                <figure class="col-sm-8 paddoff hover-img">
                                    
                                    <img class="image" src="<?php echo $datarow['club_img'] ?>" alt="">
                                
                                <figcaption>
                                    <p><?php echo $datarow['club_desc'] ?></p>
                                </figcaption>
                              </figure>
                    
                            
                            </div>
                           
                </div>
        <?php
        }
    }
?>

