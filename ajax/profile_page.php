<?php
    include('connection.php');
    session_start();
    if(password_verify("Profile", $_POST['token'])){
        $query = $db->prepare('SELECT * FROM profile WHERE email = ?');
        $data = array($_SESSION['email']);
        $execute = $query->execute($data);
        if($execute){
            if($datarow=$query->fetch()){
            ?>
            <div class="container">
                                <div class="card p-3 py-4">
                                    <div class="text-center"> <img src="<?php echo $datarow['photo'];?>" width="200" class="rounded-circle" /> </div>
                                    <div class="text-center mt-3"> 
                                        <h5 class="mt-2 mb-0"><?php  echo $datarow['fname'] . " " . $datarow['lname']; ?></h5> <span><?php echo $datarow['profession']; ?></span>
                                        <div class="px-4 mt-1">
                                            <p class="fonts"><?php echo $datarow['bio']; ?></p>
                                        </div>
  
                                        <div class="buttons"> <button class="btn btn-outline-primary px-4">Website</button> <button class="btn btn-primary px-4 ms-3">Contact</button> </div>
                                    </div>
                                </div>
            </div>

            <?php
            }
        }
    }

?>