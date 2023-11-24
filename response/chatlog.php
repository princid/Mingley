<?php

include("../config/connectDB.php");

include("../includes/DateTime.php");

$msg      = mysqli_real_escape_string($conn, $_POST["message"]);
$receiver = $_POST['receive']; //receiver_id
$sender   = $_POST['send']; //sender_id

$sql = "INSERT INTO msg_table(receiver_id, sender_id, text_message, curr_date, curr_time)VALUES('$receiver', '$sender', '$msg', '$date', '$time' ) ";

$sql_result = mysqli_query($conn, $sql);

?>