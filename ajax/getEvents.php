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
    <div id="events-row" class="events_row ">
        <a id="dt" href="#pop-up_<?php echo $data_row['event_id']; ?>"><div class="event">
                <div class="date">
                    <p class="event_date"><?php echo substr($newDate, 0, 6)?> </p>
                </div>
                <div class="desc">
                    <p class="event_name">
                    <?php
                        if(strlen($data_row['event_name']) > 15)
                            echo substr($data_row['event_name'],0, 15). "...";
                        else
                            echo $data_row['event_name'];
                    ?>
                    </p>
                    <p class="event_time fa fa-clock-o"><?php echo substr($data_row['event_time'] ,0, 5)?> </p>
                </div>
        </a>
        <div class="pop-up" id="pop-up_<?php echo $data_row['event_id']; ?>" >
            <div class="pop-up__content">
                <a class="pop-up__close" href="./clubPage.php?club_id=<?php echo $data_row['club_id']; ?>">x</a>
                <h4><?php echo $data_row['event_name']; ?></h4>
                <p class="about_event_detail"><?php  echo $data_row['about_event']; ?></p>
                <div class="date-time">
                    <p><i class="fa fa-calendar"></i><?php echo $newDate; ?></p>
                    <p><i class="fa fa-clock-o"></i><?php echo substr($data_row['event_time'] ,0, 5) ?></p>
                </div>
                <div>
                    <a href="<?php echo $data_row['link'] ?>" target="_blank">Continue</a>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>
