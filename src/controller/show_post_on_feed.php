<?php 

session_start();


require_once("../model/Query.php");

if (!empty($_SESSION)) {
    
    $users_table = 'users_table';

    $posts_table = 'posts_table';

    $feed_post_condition = " $users_table.id = $posts_table.user_id ";

    $del_condition = " $users_table.is_deleted = 0 ";

    $likes_table = 'likes_table';
    
    $current_user_id = $_SESSION['id'];
    
    $feed_post_result = show_post_on_feed($conn, $users_table, $posts_table, $likes_table, $feed_post_condition, $del_condition, $current_user_id);
    
    
    
}
