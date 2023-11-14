<?php

session_start();

require_once("../model/Query.php");

if (!empty($_SESSION)) {
    $id = !empty($_GET['user_id']) ? $_GET['user_id'] : $_SESSION['id'];
    
    $posts_table = 'posts_table';

    $condition = " $id = $posts_table.user_id ";

    $count_post_result = countPost($conn, $posts_table, $condition);

}
