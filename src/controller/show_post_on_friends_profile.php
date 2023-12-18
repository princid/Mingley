<?php

session_start();


require_once("../model/Query.php");

$id = empty($_GET['user_id']) ? $_SESSION['id'] : $_GET['id'];

// var_dump($id);

if (!empty($_SESSION)) {

    // $id = $_GET['id'];

    var_dump($id);

    $users_table = 'users_table';

    $posts_table = 'posts_table';

    $likes_table = 'likes_table';

    $profile_feed_condition = " $users_table.id = $posts_table.user_id ";

    $where_condition = " $id = $users_table.id ";

    $del_condition = " $users_table.is_deleted = 0 ";

    $profile_feed_result = show_post_on_friends_profile($conn, $users_table, $posts_table, $likes_table, $profile_feed_condition, $where_condition, $del_condition, $id);
}
