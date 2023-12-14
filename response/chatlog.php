<?php

include("../config/connectDB.php");

include("../includes/DateTime.php");

// Function to make clickable links if someone has sent a link in the msg
function makeClickableLinks($text)
{
    $text = preg_replace('/(http[s]?:\/\/[^\s]+)/', '<a href="$1" class="text-light" target="_blank">$1</a>', $text);
    return $text;
}

$msg      = trim(mysqli_real_escape_string($conn, $_POST["message"]));
$receiver = $_POST['receive']; //receiver_id
$sender   = $_POST['send']; //sender_id

// Convert URLs to clickable links
$msg = makeClickableLinks($msg);

// Remove extra consecutive whitespaces
$msg = preg_replace('/\s{2,}/', ' ', $msg);

$sql = "INSERT INTO msg_table(receiver_id, sender_id, text_message, curr_date, curr_time)VALUES('$receiver', '$sender', '$msg', '$date', '$time' ) ";

$sql_result = mysqli_query($conn, $sql);

?>