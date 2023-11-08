<?php 

session_start();

require_once("../model/Query.php");

if (!empty($_SESSION)) {

    // $id = !empty($_GET['user_id']) ? $_GET['user_id'] : $_SESSION['id'];
    $id = $_SESSION['id'];

    $fetch_table = 'users_table';

    $condition = " id = '$id' ";

    $result = fetchUserDetails($conn, $fetch_table, $condition);

    $first_name = $result['first_name'];
    $last_name = $result['last_name'];
    $user_name = $result['user_name'];
    $user_email = $result['user_email'];
    $user_bio = $result['user_bio'];
    $user_profile_pic = $result['user_profile_pic'];
    $user_register_date = $result['created_at'];

}


?>