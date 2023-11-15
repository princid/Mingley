<?php

include("../config/connectDB.php");


$dt   = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
$date = $dt->format('F j, Y');
$tm   = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
$time = $tm->format('g:i a');

$msg      = str_replace("'","", $_POST["message"]);
$receiver = $_POST['receive']; //receiver_id
$sender   = $_POST['send']; //sender_id

$sql = "INSERT INTO msg_table(receiver_id, sender_id, text_message, curr_date, curr_time)VALUES('$receiver', '$sender', '$msg', '$date', '$time' ) ";
$sql_result = mysqli_query($conn, $sql);

// if($sql_result){
//     echo "Message sent";
// }else{
//     echo "Message sending failed";
// }

?>