<?php
include('connection.php');
$clubid=$_POST['club_id'];

$query=$db->prepare('select * from events where club_id=?');
$data=array($clubid);
$execute=$query->execute($data);

while($data_row=$query->fetch())
{
    $newDate = date('d M Y',strtotime($data_row['event_date']));
    // echo $newDate;
    
    // $newTime = strftime('%H:%M %r');
    // echo $newTime;
    // print_r(strptime($newTime,'%H:%M %r'));

?>
    <div class="events_row ">
        <a href="#pop-up_<?php echo $data_row['event_id']; ?>"><div class="event">
                <div class="date">
                    <p class="event_date"><?php echo $data_row['event_date']; ?> </p>
                </div>
                <div class="desc">
                    <p class="event_name"><?php echo $data_row['event_name'];?> </p>
                    
                    <p class="event_time fa fa-clock-o"><?php echo substr($data_row['event_time'] ,0, 5)?> </p>
                </div>
        </a>
        <div class="pop-up" id="pop-up_<?php echo $data_row['event_id']; ?>" >
            <div class="pop-up__content">
            <a class="pop-up__close" href="#container">x</a>
            <h4><?php echo $data_row['event_name']; ?></h4>
            <p class="about_event_detail"><?php  echo $data_row['about_event']; ?></p>
            <p><?php echo $data_row['event_date']; ?></p>
            <p><?php echo substr($data_row['event_time'] ,0, 5) ?></p>
            <a href="<?php echo $data_row['link'] ?>" target="_blank">Continue</a>
            </div>
        </div>
    </div>
<?php
}


?>
