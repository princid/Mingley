<?php

session_start();


require_once("../model/Query.php");

if (!empty($_SESSION)) {

    $id = !empty($_GET['user_id']) ? $_GET['user_id'] : $_SESSION['id'];

    $getAll_table = 'users_table';

    // $posts_table = 'posts_table';

    // $profile_feed_condition = " $users_table.id = $posts_table.user_id ";

    // $where_condition = " $id = $posts_table.user_id ";

    $fetch_user_result = getAllUserRecord($conn, $getAll_table);
}
