<?php
    include('connection.php');
    session_start();
    if(password_verify("Profile", $_POST['token'])){
        $query = $db->prepare('SELECT * FROM profile p join user_details u ON (p.email = u.email) WHERE p.email = ?');
        $data = array($_SESSION['email']);
        $execute = $query->execute($data);
        if($execute){
            if($datarow=$query->fetch()){
            ?>
            <div class="container">
                                <div class="card p-3 py-4">
                                    <div class="edit">
                                        <i style='font-size:24px' class='fa fa-edit'></i> 
                                    </div>
                                    <div class="text-center"> <img src="<?php echo $datarow['photo'];?>" class="rounded-circle" style="width:150px; height: 150px;" /> </div>
                                    <div class="text-center mt-3"> 
                                        <h5 class="mt-2 mb-0">
                                            <?php  
                                            if($datarow['fname'] != '')
                                            {
                                                echo $datarow['fname'] . " " . $datarow['lname']; 
                                            }
                                            else{
                                                echo $datarow['uname'];
                                            }
                                            ?>
                                        </h5> 
                                        <span><?php echo $datarow['profession']; ?></span>
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