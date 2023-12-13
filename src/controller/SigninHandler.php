<?php
session_start();
require("../model/Query.php");
require_once("../../config/constants.php");

if (isset($_POST['Submit'])) {

    $user_email = trim(htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8'));
    $user_password = trim(md5($_POST['password']));

    $table = "users_table";

    $result = signIn($conn, $table, $user_email, $user_password);

    if($result["status"] === "Logged In Successfully!"){
        // $_SESSION['id'] = $row['id'];
        $_SESSION["message"] = $result['status'];

        $_SESSION["user_role_status"] = $result["user_role_status"];
        if($_SESSION["user_role_status"] == 1){
            header("location: " . BASE_URL . "admin/Dashboard.php");
            exit;
        }else{
            header("location: " . BASE_URL . "src/view/HomeFeed.php");
            exit;
        } 
    } else {
        $_SESSION["message"] = $result['status'];
        header("location: ".BASE_URL."src/view/SignIn.php");
        exit;
    }

}
