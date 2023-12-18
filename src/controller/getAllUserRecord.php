<?php

session_start();


require_once("../model/Query.php");

if (!empty($_SESSION)) {

    $id = !empty($_GET['user_id']) ? $_GET['user_id'] : $_SESSION['id'];

    $getAll_table = 'users_table';

    $fetch_user_result = getAllUserRecord($conn, $getAll_table);
    
    $current_user_data = currentUser($conn, $getAll_table, $id);
}
