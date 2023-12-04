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
    
    $current_user_data = currentUser($conn, $getAll_table, $id);

    // $logged_in_user = 
    // var_dump($current_user_data);
    // $fetch_username = $fetch_user_result['user_name'];
    // var_dump($fetch_username);
}
