<?php
 session_start();

// $event_title = 'Facebook DevC';
// $event_ds = 'Its all about developers circle';
// $event_venue = 'Uplifthub fed poly Bauchi';
// $event_date = "27 October 2018";
// $event_time = "6:00 pm";
// $event_duration = "2 hours";

function getTotal(int $event_id)
{
    $total_c = 0;
    include("connections/connection.php");
    $sql =  "SELECT count(event_id) as total FROM events WHERE event_id=".$event_id;

    
    $allevents = $db->query($sql)
        or die($db->error);

    while($row = $allevents->fetch_assoc()){
       $total_c = $row['total'];
    }

    return $total_c;
}

function isAttended(int $user_id, $event_id) : bool
{
    $attended = false;
    include("connections/connection.php");
    $sql =  "SELECT count(event_id) as total FROM event_attendees WHERE event_id=".$event_id . " AND user_id =".$user_id;

    
    $allevents = $db->query($sql)
        or die($db->error);

    while($row = $allevents->fetch_assoc()){
       $attended = ($row['total'] == 0 )? false : true;
    }

    return $attended;
}

function wantsToAttend(int $user_id, $event_id) : bool
{
    $attended = false;
    include("connections/connection.php");
    if(isAttended()){
        return true;
    }else{
        $sql =  "INSERT INTO `event_attendees`(`user_id`, `event_id`) VALUES ($user_id, $event_id)";
    }
    
    $allevents = $db->query($sql)
        or die($db->error);

  
    if($allevents) return true; else return false;
}

echo getTotal(2);
echo isAttended(2, 1 );
echo isAttended(1, 3 );

?>