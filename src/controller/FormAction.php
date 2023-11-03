
<?php

session_start();

require("../model/Query.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $first_name = trim(htmlentities($_POST['firstname'], ENT_QUOTES, 'UTF-8'));
    $last_name = trim(htmlentities($_POST['lastname'], ENT_QUOTES, 'UTF-8'));
    $user_name = trim(htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8'));
    $user_email = trim(htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8'));
    $user_password = trim(md5($_POST['password']));
    // $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $table = "users_table";

    $result = signUp($conn, $table, $first_name, $last_name, $user_name, $user_email, $user_password);

    if ($result === "Registered Successfully!") {
        $_SESSION["message"] = $result;
        header("location: http://localhost/PHP_Assesments/Mingley/src/view/SignIn.php");
        exit;
    } else {
        $_SESSION["message"] = $result;
        header("location: http://localhost/PHP_Assesments/Mingley/src/view/SignUp.php");
        exit;
    }
}

?>