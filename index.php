<?php
 session_start();
?>
<?php 
include("connections/connection.php");
$surname = 'Mohammed';
$lastname = 'Sunday';
$phonenum = '+2348123456789';
$email = 'uplifthub@gmail.com';

// $firstname = $_POST['firstname'];
// $lastname = $_POST['lastname'];
// $phonenum = $_POST['phonenum'];
// $email = $_POST['email'];

$insertion = $db->query( "INSERT INTO users (surname, lastname, email,phonenum) 
    VALUE ('$surname', '$lastname', '$email', '$phonenum') ")
    or die($db->error);

?>