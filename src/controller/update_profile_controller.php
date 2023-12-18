<?php 

session_start();

require("../model/Query.php");

if (($_SERVER['REQUEST_METHOD'] == "POST") && !empty($_SESSION)) {
    $first_name = trim(htmlentities($_POST['firstname'], ENT_QUOTES, 'UTF-8'));
    $last_name = trim(htmlentities($_POST['lastname'], ENT_QUOTES, 'UTF-8'));
    $user_name = trim(htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8'));
    $user_email = trim(htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8'));
    $user_bio = trim(htmlentities($_POST['user_bio'], ENT_QUOTES, 'UTF-8'));

    $id = $_SESSION["id"];

    $table = "users_table";

    $condition = " id = '$id' ";

    $result = updateProfile($conn, $table, $first_name, $last_name, $user_name, $user_email, $user_bio, $condition);

    if ($result === "Your Data Updated Successfully!") {
        $_SESSION["message"] = $result;
        header("location: http://localhost/PHP_Assesments/Mingley/src/view/Profile.php");
        exit;
    } else {
        $_SESSION["error"] = $result;
        header("location: http://localhost/PHP_Assesments/Mingley/src/view/Profile.php");
        exit;
    }
}

?>