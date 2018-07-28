<?php
 session_start();
?>
<?php 
// include("connections/connection.php");
// $event_title = 'Facebook DevC';
// $event_ds = 'Its all about developers circle';
// $event_venue = 'Uplifthub fed poly Bauchi';
// $event_date = "27 October 2018";
// $event_time = "6:00 pm";
// $event_duration = "2 hours";

$event_title = $_POST['event_title'];
$event_ds = $_POST['event_ds'];
$event_venue = $_POST['event_venue'];
$event_date = $_POST['event_date'];
$event_time = $_POST['event_time'];
$event_duration = $_POST['event_duration'];

$insertion = $db->query( "INSERT INTO events (event_title, event_ds,event_venue,event_date,event_time, event_duration) 
    VALUE ('$event_title', '$event_ds', '$event_venue', '$event_date', '$event_time', '$event_duration') ")
    or die($db->error);

?>