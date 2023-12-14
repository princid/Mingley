<?php

session_start();

require("../model/Query.php");

function isValidEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $errors = [];

    // Server-side validation for First Name
    $first_name = trim(htmlentities($_POST['firstname'], ENT_QUOTES, 'UTF-8'));
    if (empty($first_name) || strlen($first_name) < 2 || !preg_match("/^[a-zA-Z\s]+$/", $first_name)) {
        $errors['firstname'] = "*Firstname is invalid!";
    }

    // Server-side validation for Last Name
    $last_name = trim(htmlentities($_POST['lastname'], ENT_QUOTES, 'UTF-8'));
    if (empty($last_name) || strlen($last_name) < 2 || !preg_match("/^[a-zA-Z\s]+$/", $last_name)) {
        $errors['lastname'] = "*Lastname is invalid!";
    }

    // Server-side validation for Username
    $username = trim(htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8'));
    if (empty($username) || !preg_match("/^[a-z0-9]+$/", $username) || strlen($username) < 3 || strlen($username) > 20) {
        $errors['username'] = "*Username is invalid!";
    }

    // Server-side validation for Email
    $user_email = trim(htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8'));
    if (empty($user_email) || !isValidEmail($user_email)) {
        $errors['email'] = "*Email is invalid!";
    }

    // Server-side validation for Password
    $password = trim($_POST['password']);
    if (strlen($password) < 8 || !preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#$%^&*!])[A-Za-z\d@#$%^&*!]+$/", $password)) {
        $errors['password'] = "*Password is invalid!";
    }

    // Server-side validation for Confirm Password
    $confirmPassword = trim($_POST['confirmPassword']);
    if (strlen($confirmPassword) < 8 || $password !== $confirmPassword) {
        $errors['confirmPassword'] = "*Confirm Password is invalid!";
    }

    // Check for errors before proceeding with database operations
    if (empty($errors)) {
        // All input data is valid; proceed with database operations
        $user_password = trim(md5($password));
        // $user_password = password_hash($password, PASSWORD_DEFAULT);

        $table = "users_table";

        $result = signUp($conn, $table, $first_name, $last_name, $username, $user_email, $user_password);

        if ($result === "Registered Successfully!") {
            $_SESSION["message"] = $result;
            header("location: http://localhost/PHP_Assesments/Mingley/src/view/SignIn.php");
            exit;
        } else {
            $_SESSION["message"] = $result;
            header("location: http://localhost/PHP_Assesments/Mingley/src/view/SignUp.php");
            exit;
        }
    } else {
        // There are validation errors; store errors in session and redirect to the form
        $_SESSION['errors'] = $errors;
        header("location: http://localhost/PHP_Assesments/Mingley/src/view/SignUp.php");
        exit;
    }
}

?>
