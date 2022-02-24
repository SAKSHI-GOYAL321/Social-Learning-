<?php
include('connection.php');
$clubid=$_POST['club_id'];

$query=$db->prepare('select * from events where club_id=?');
$data=array($clubid);
$execute=$query->execute($data);

while($data_row=$query->fetch())
{
    $name = $data_row['event_name'];
    $date = $data_row['event_date'];
    $time = $data_row['event_time'];
    $desc = $data_row['about_event'];
    $link = $data_row['link'];
?>
    <div class="events_row ">
        <a href="#pop-up" onclick="popup($name, $date, $time, $desc, $link);"><div class="event">
                <div class="date">
                    <p class="event_date"><?php echo $data_row['event_date'];?> </p>
                </div>
                <div class="desc">
                    <p class="event_name"><?php echo $data_row['event_name'];?> </p>
                    
                    <p class="event_time fa fa-clock-o"><?php echo $data_row['event_time'];?> </p>
                </div>
        </a>
        <div class="pop-up" id="pop-up">
            <div class="pop-up__content">
            <a class="pop-up__close" href="#container">x</a>
            <h4><?php echo $data_row['event_name']; ?></h4>
            <p class="about_event_detail"><?php  echo $data_row['about_event']; ?></p>
            <p><?php echo $data_row['event_date']; ?></p>
            <p><?php echo $data_row['event_time']; ?></p>
            <button class="btn-primary open-file-style" onclick="window.location.href = "<?php echo $data_row['link']; ?>">Click Here</button>
            </div>
        </div>
    </div>
<?php
}

function popup($name, $date, $time, $about, $link){
    
}

?>
