<?php

session_start();

require_once("../model/Query.php");

if (!empty($_SESSION)) {

    $user_id = !empty($_GET['user_id']) ? $_GET['user_id'] : $_SESSION['id'];

    $follows_table = 'follows_table';

    $followers_count = countFollowers($conn, $follows_table, $user_id);
    $followings_count = countFollowings($conn, $follows_table, $user_id);

    // if ($followers_count && $followings_count) {
    //     $total_followers = $followers_count['followers_count'];
    //     $total_followings = $followings_count['followings_count'];

    //     echo "Followers: " . $total_followers . "<br>";
    //     echo "Followings: " . $total_followings . "<br>";
    // }
}


?>
