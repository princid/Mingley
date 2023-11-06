<?php
session_start();

require("../../config/connectDB.php");

function signUp($conn, $table, $first_name, $last_name, $user_name, $user_email, $user_password)
{
    $check_user = "SELECT id FROM $table WHERE user_email = '$user_email' OR user_name = '$user_name' ";
    $check_user_run = mysqli_query($conn, $check_user);

    if (mysqli_num_rows($check_user_run) > 0) {
        // Email or Username already exists
        return "Email/Username already exists! Try with another Email ID/Username.";
    } else {
        $signUp_query = "INSERT INTO $table (first_name, last_name, user_name, user_email, user_password) VALUES ('$first_name', '$last_name', '$user_name', '$user_email', '$user_password')";
        $signUp_query_run = mysqli_query($conn, $signUp_query);

        if($signUp_query_run){
            return "Registered Successfully!";
        }else{
            return "Error: " . mysqli_error($conn);
        }
    }
}

// 
function signIn($conn, $table, $user_email, $user_password)
{
    $signIn_check = "SELECT id, user_email, user_password FROM $table WHERE user_email = '$user_email' AND user_password = '$user_password' ";
    // $stmt_signIn_check = mysqli_prepare($conn, $signIn_check);
    $signIn_check_run = mysqli_query($conn, $signIn_check);

    if (mysqli_num_rows($signIn_check_run) > 0) {
        while($row = mysqli_fetch_assoc($signIn_check_run)) {
            $_SESSION["id"] = $row['id'];
            // var_dump($row);
            // exit;
            return "Logged In Successfully!";
        }
    }
    else{
        return "Error: OOPS! Something went wrong...";
    }
}

function fetchUserDetails($conn, $table, $condition){
    $fetch_query = "SELECT * FROM $table WHERE $condition";
    $fetch_query_run = mysqli_query($conn, $fetch_query);

    if($fetch_query_run && mysqli_num_rows($fetch_query_run) > 0) {
        $row = mysqli_fetch_assoc($fetch_query_run);
        // var_dump($row);
        // exit;
        $_SESSION['id'] = $row['id'];
        return $row;
    }
}


function updateProfile($conn, $table, $first_name, $last_name, $user_name, $user_email, $user_bio, $condition){

    // $check_user = "SELECT id FROM $table WHERE user_email = '$user_email' OR user_name = '$user_name' ";
    // $check_user_run = mysqli_query($conn, $check_user);

    // if (mysqli_num_rows($check_user_run) > 0) {
    //     // Email or Username already exists
    //     return "Email/Username already exists! Try with another Email ID/Username.";
    // } else {
        $update_query = " UPDATE $table SET first_name = '$first_name', last_name = '$last_name', user_name = '$user_name', user_email = '$user_email', user_bio = '$user_bio' WHERE $condition ";
        $update_query_run = mysqli_query($conn, $update_query);

        if ($update_query_run) {
            return "Your Data Updated Successfully!";
        } else {
            return "Error: " . mysqli_error($conn);
        }
    // }
    
}

function create_post($conn, $table, $id, $caption, $imageNamesAsString){
    $insertPostQuery = "INSERT INTO $table (user_id, post_caption, post_images) VALUES ('$id', '$caption', '$imageNamesAsString')";
    $insertPostQuery_run = mysqli_query($conn, $insertPostQuery);

    if($insertPostQuery_run){
        return "Post successfully uploaded...";
    }else{
        return "Error: " . mysqli_error($conn);
    }
}























































// function signUp($conn, $table, $first_name, $last_name, $user_name, $user_email, $user_password)
// {
//     $check_user = "SELECT id FROM $table WHERE user_email = ? OR user_name = ?";
//     $stmt_check_user = mysqli_prepare($conn, $check_user);
//     mysqli_stmt_bind_param($stmt_check_user, "ss", $user_email, $user_name);
//     mysqli_stmt_execute($stmt_check_user);
//     $result_check_user = mysqli_stmt_get_result($stmt_check_user);

//     if (mysqli_num_rows($result_check_user) > 0) {
//         // Email or Username already exists
//         return "Email/Username already exists! Try with another Email ID/Username.";
//     } else {
//         $signUp_query = "INSERT INTO $table (first_name, last_name, user_name, user_email, user_password) VALUES (?, ?, ?, ?, ?)";
//         $stmt_signUp = mysqli_prepare($conn, $signUp_query);

//         if ($stmt_signUp) {
//             mysqli_stmt_bind_param($stmt_signUp, "sssss", $first_name, $last_name, $user_name, $user_email, $user_password);

//             if (mysqli_stmt_execute($stmt_signUp)) {
//                 // Registered successfully
//                 return "Registered Successfully!";
//             } else {
//                 // Error during registration
//                 return "Error: " . mysqli_error($conn);
//             }
//             mysqli_stmt_close($stmt_signUp);
//         } else {
//             // Error preparing the statement
//             return "Error: " . mysqli_error($conn);
//         }
//     }
// }