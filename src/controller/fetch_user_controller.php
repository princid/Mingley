<?php 

session_start();

require("../model/Query.php");

if (!empty($_SESSION)) {

    $id = $_SESSION["id"];

    $table = 'users_table';

    $condition = " id = '$id' ";

    $result = fetchUserDetails($conn, $table, $condition);

    $first_name = $result['first_name'];
    $last_name = $result['last_name'];
    $user_name = $result['user_name'];
    $user_email = $result['user_email'];
    $user_register_date = $result['created_at'];

}


?>