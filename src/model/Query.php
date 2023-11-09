<?php
session_start();

require("../../config/connectDB.php");


// Function to let users sign up
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


// Function to let users log in 
function signIn($conn, $table, $user_email, $user_password)
{
    $signIn_check = "SELECT id, user_email, user_password FROM $table WHERE user_email = '$user_email' AND user_password = '$user_password' ";
    // $stmt_signIn_check = mysqli_prepare($conn, $signIn_check);
    $signIn_check_run = mysqli_query($conn, $signIn_check);

    if (mysqli_num_rows($signIn_check_run) > 0) {
        while($row = mysqli_fetch_assoc($signIn_check_run)) {
            $_SESSION["id"] = $row['id'];
            $_SESSION["first_name"] = $row['first_name'];
            // var_dump($row);
            // exit;
            return "Logged In Successfully!";
        }
    }
    else{
        return "Error: OOPS! Something went wrong...";
    }
}


// Function to fetch user's details
function fetchUserDetails($conn, $fetch_table, $condition){
    $fetch_query = "SELECT * FROM $fetch_table WHERE $condition";
    $fetch_query_run = mysqli_query($conn, $fetch_query);

    if($fetch_query_run && mysqli_num_rows($fetch_query_run) > 0) {
        
        $row = mysqli_fetch_assoc($fetch_query_run);

        $_SESSION['id'] = $row['id'];
        return $row;
    }
}


// Function to update user's profile, such as name, email, bio, etc..
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



// Function to create post (upload post)
function createPost($conn, $table, $user_id, $caption, $imageNamesAsString){
    // var_dump($users_table);
    // echo "rahoooooo";
    $insertPostQuery = "INSERT INTO $table (user_id, post_caption, post_images) VALUES ('$user_id', '$caption', '$imageNamesAsString')";
    $insertPostQuery_run = mysqli_query($conn, $insertPostQuery);


    if($insertPostQuery_run){

        // $post_data = mysqli_fetch_assoc($show_post_run);

        // $_SESSION['id'] = $post_data['id'];

        return "Post successfully uploaded...";

    }else{
        return "Error: " . mysqli_error($conn);
    }

}



// Function to show posts on Home Page's feed.
// function show_post_on_feed($conn, $users_table, $posts_table, $feed_post_condition){

//     $show_post = "SELECT * FROM $users_table JOIN $posts_table ON $feed_post_condition ORDER BY $posts_table.posted_at DESC";

//     $show_post_run = mysqli_query($conn, $show_post);

//     $post_data = array();

//     if($show_post_run && mysqli_num_rows($show_post_run) > 0){

//         while ($data = mysqli_fetch_assoc($show_post_run)) {
//             $post_data[] = $data;
//         }


//         return $post_data;
//     }
// }



// BY GPT BABA
// Function to show posts on Home Page's feed.
// function show_post_on_feed($conn, $users_table, $posts_table, $likes_table, $feed_post_condition, $current_user_id)
// {
//     $show_post = "SELECT 
//                     $users_table.*,
//                     $posts_table.*,
//                     COUNT(CASE WHEN $likes_table.like_status = 1 THEN 1 END) AS likes_count,
//                     MAX($likes_table.like_status) AS like_status
//                 FROM $users_table
//                 JOIN $posts_table ON $feed_post_condition
//                 LEFT JOIN $likes_table ON $posts_table.post_id = $likes_table.post_id AND $likes_table.liked_by_id = $current_user_id
//                 GROUP BY $posts_table.post_id
//                 ORDER BY $posts_table.posted_at DESC";

//     $show_post_run = mysqli_query($conn, $show_post);

//     $post_data = array();

//     if ($show_post_run && mysqli_num_rows($show_post_run) > 0) {

//         while ($data = mysqli_fetch_assoc($show_post_run)) {
//             $post_data[] = $data;
//         }

//         return $post_data;
//     }
// }

function show_post_on_feed($conn, $users_table, $posts_table, $likes_table, $feed_post_condition, $current_user_id)
{
    $show_post = "SELECT 
                    $users_table.*,
                    $posts_table.*,
                    (SELECT COUNT(*) FROM $likes_table WHERE $likes_table.post_id = $posts_table.post_id AND $likes_table.like_status = 1) AS likes_count,
                    MAX($likes_table.like_status) AS like_status
                FROM $users_table
                JOIN $posts_table ON $feed_post_condition
                LEFT JOIN $likes_table ON $posts_table.post_id = $likes_table.post_id AND $likes_table.liked_by_id = $current_user_id
                GROUP BY $posts_table.post_id
                ORDER BY $posts_table.posted_at DESC";

    $show_post_run = mysqli_query($conn, $show_post);

    $post_data = array();

    if ($show_post_run && mysqli_num_rows($show_post_run) > 0) {

        while ($data = mysqli_fetch_assoc($show_post_run)) {
            $post_data[] = $data;
        }

        return $post_data;
    }
}





// foreach ($post_data as $post) {
//     // var_dump($post);
//     // echo "Post Title: " . $post['post_caption'] . "<br>";
//     // echo "Post Content: " . $post['post_images'] . "<br>";
//     // echo "Post Owner: " . $post['first_name'] . "<br>";
//     $post_author = $post["first_name"]. " ". $post["last_name"];
//     $post_caption = $post["post_caption"];
//     $post_images = $post["post_images"];
// }


// Function to show our own posts on our profile.
function show_post_on_profile($conn, $users_table, $posts_table, $profile_feed_condition, $where_condition){

    $show_profile_post = "SELECT * FROM $users_table JOIN $posts_table ON $profile_feed_condition WHERE $where_condition ORDER BY $posts_table.posted_at DESC";

    $show_profile_post_run = mysqli_query($conn, $show_profile_post);

    $profile_post_data = array();

    if($show_profile_post_run && mysqli_num_rows($show_profile_post_run) > 0){

        while ($my_data = mysqli_fetch_assoc($show_profile_post_run)) {
            $profile_post_data[] = $my_data;
        }

        return $profile_post_data;
    }
}


// Function to check other users profile
function show_post_on_friends_profile($conn, $users_table, $posts_table, $profile_feed_condition, $where_condition){

    $show_profile_post = "SELECT * FROM $users_table JOIN $posts_table ON $profile_feed_condition WHERE $where_condition ORDER BY $posts_table.posted_at DESC";

    $show_profile_post_run = mysqli_query($conn, $show_profile_post);

    $profile_post_data = array();

    if($show_profile_post_run && mysqli_num_rows($show_profile_post_run) > 0){

        while ($my_data = mysqli_fetch_assoc($show_profile_post_run)) {
            $profile_post_data[] = $my_data;
        }

        return $profile_post_data;
    }
}


// Function to update the user's profile picture
function update_profile_pic($conn, $table, $profile_pic_name, $condition){
    
    $update_profile_pic = "UPDATE $table SET user_profile_pic = '$profile_pic_name' WHERE $condition ";
    
    $update_profile_pic_run = mysqli_query($conn, $update_profile_pic);

    // var_dump($conn);

    if ($update_profile_pic_run) {
        return "Your Profile Pic Updated Successfully!";
    } else {
        return "Error: " . mysqli_error($conn);
    }
}


// Function for showing all the unknown users on Home page's right bar to send them friend request
function getAllUserRecord($conn, $getAll_table){
    $getAllUser = "SELECT * FROM $getAll_table ";
    $getAllUser_run = mysqli_query($conn, $getAllUser);

    $getAllUser_data = array();

    if($getAllUser_run && mysqli_num_rows($getAllUser_run) > 0){
        while ($my_data = mysqli_fetch_assoc($getAllUser_run)) {
            $getAllUser_data[] = $my_data;
        }
        return $getAllUser_data;

    }
}



// Function for Post Like

function toggleLike($conn, $postID, $userID)
{
    $checkQuery = "SELECT * FROM likes_table WHERE post_id = $postID AND liked_by_id = $userID";
    $result = $conn->query($checkQuery);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $like_status = $row["like_status"];

        if ($like_status == 1) {
            $updateUnlike = "UPDATE likes_table SET like_status = '0' WHERE post_id = $postID AND liked_by_id = $userID";
            $conn->query($updateUnlike);
            return 'unliked';
        } else {
            $updateLike = "UPDATE likes_table SET like_status = '1' WHERE post_id = $postID AND liked_by_id = $userID";
            $conn->query($updateLike);
            return 'liked';
        }
    } else {
        $insertQuery = "INSERT INTO likes_table (post_id, liked_by_id, like_status) VALUES ($postID, $userID, 1)";
        $conn->query($insertQuery);
        return 'liked';
    }
}