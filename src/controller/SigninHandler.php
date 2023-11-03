<?php
session_start();
require("../model/Query.php");

if (isset($_POST['Submit'])) {


    $user_email = trim(htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8'));
    $user_password = trim(md5($_POST['password']));

    $table = "users_table";

    $result = signIn($conn, $table, $user_email, $user_password);

    if($result === "Logged In Successfully!"){
        $_SESSION["message"] = $result;
        header("location: http://localhost/PHP_Assesments/Mingley/src/view/HomeFeed.php");
        exit;
    } else {
        $_SESSION["message"] = $result;
        header("location: http://localhost/PHP_Assesments/Mingley/src/view/SignIn.php");
        exit;
    }

}

    // $user_email = mysqli_real_escape_string($conn, $_POST['email']);
    // $user_password = md5($_POST['password']);

// Remember Me functionality
// if (isset($_POST['remember']) && $_POST['remember'] == "on") {

//     // Create a unique token
//     $token = md5(uniqid(rand(), true));

//     // Store the token and user's email in cookies
//     setcookie("remember_user", $user_email, time() + 3600 * 24 * 30, "/");
//     setcookie("remember_token", $token, time() + 3600 * 24 * 30, "/");

//     // Store the token in the database for later validation
//     $sql = "UPDATE `users_table` SET remember_token = '{$token}' WHERE user_email = '{$user_email}'";
//     mysqli_query($conn, $sql);
//     // var_dump($sql);
// } else {
//     // If "Remember Me" was not checked, clear the cookies and token from the database
//     setcookie("remember_user", "", time() - 3600, "/");
//     setcookie("remember_token", "", time() - 3600, "/");
//     $sql = "UPDATE `users_table` SET remember_token = NULL WHERE user_email = '{$user_email}'";
//     mysqli_query($conn, $sql);
// }
