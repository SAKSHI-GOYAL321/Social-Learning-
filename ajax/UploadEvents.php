<?php
    include('connection.php');
    
    $EventsName = $_POST['name'];
    $EventsDate = $_POST['date'];
    $EventsTime = $_POST['time'];
    $EventsAbout= $_POST['about'];
    $link = $_POST['link'];
    $club_id = $_POST['club_id'];
   

    $query = $db->prepare("INSERT INTO events (event_name,event_date,event_time,about_event,link, club_id) VALUES(?,?,?,?,?,?)");
    $data = array($EventsName,$EventsDate, $EventsTime, $EventsAbout,$link, $club_id);
    $execute = $query->execute($data);

    if($execute){
        echo 0;
    }
    else
    {
        echo 1;
    }
?>