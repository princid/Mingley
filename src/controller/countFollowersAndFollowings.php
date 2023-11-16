<?php

session_start();

require_once("../model/Query.php");

if (!empty($_SESSION)) {

    $user_id = !empty($_GET['user_id']) ? $_GET['user_id'] : $_SESSION['id'];

    $follows_table = 'follows_table';

    $followers_count = countFollowers($conn, $follows_table, $user_id);
    $followings_count = countFollowings($conn, $follows_table, $user_id);

}


?>
