<?php

require("/var/www/html/PHP_Assesments/Mingley/config/connectDB.php");

function signUp($conn, $table, $first_name, $last_name, $user_name, $user_email, $user_password)
{
    $check_user = "SELECT id FROM $table WHERE user_email = ? OR user_name = ?";
    $stmt_check_user = mysqli_prepare($conn, $check_user);
    mysqli_stmt_bind_param($stmt_check_user, "ss", $user_email, $user_name);
    mysqli_stmt_execute($stmt_check_user);
    $result_check_user = mysqli_stmt_get_result($stmt_check_user);

    if (mysqli_num_rows($result_check_user) > 0) {
        // Email or Username already exists
        return "Email/Username already exists! Try with another Email ID/Username.";
    } else {
        $signUp_query = "INSERT INTO $table (first_name, last_name, user_name, user_email, user_password) VALUES (?, ?, ?, ?, ?)";
        $stmt_signUp = mysqli_prepare($conn, $signUp_query);

        if ($stmt_signUp) {
            mysqli_stmt_bind_param($stmt_signUp, "sssss", $first_name, $last_name, $user_name, $user_email, $user_password);

            if (mysqli_stmt_execute($stmt_signUp)) {
                // Registered successfully
                return "Registered Successfully!";
            } else {
                // Error during registration
                return "Error: " . mysqli_error($conn);
            }
            mysqli_stmt_close($stmt_signUp);
        } else {
            // Error preparing the statement
            return "Error: " . mysqli_error($conn);
        }
    }
}