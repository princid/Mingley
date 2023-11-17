<?php

session_start();

require_once("../model/Query.php");

if (!empty($_SESSION)) {
    $id = !empty($_GET['user_id']) ? $_GET['user_id'] : $_SESSION['id'];
    
    $posts_table = 'posts_table';

    $condition1 = " $id = $posts_table.user_id ";

    $condition2 = " $posts_table.is_deleted = 0 ";

    $count_post_result = countPost($conn, $posts_table, $condition1, $condition2);

}
