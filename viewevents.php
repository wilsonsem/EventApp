<?php
 session_start();
?>
<?php 
include("connections/connection.php");
// $event_title = 'Facebook DevC';
// $event_ds = 'Its all about developers circle';
// $event_venue = 'Uplifthub fed poly Bauchi';
// $event_date = "27 October 2018";
// $event_time = "6:00 pm";
// $event_duration = "2 hours";


$allevents = $db->query( "SELECT event_id, event_title, event_ds,event_venue,event_date,event_time, event_duration FROM events")
    or die($db->error);

while($row = $allevents->fetch_assoc()){
    echo $row['event_id'];
    echo $row['event_title'];
    echo $row['event_venue'];
    echo $row['event_ds'];
    echo $row['event_time'];
    echo $row['event_duration'];
}

?>