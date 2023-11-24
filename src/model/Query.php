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

        if ($signUp_query_run) {
            return "Registered Successfully!";
        } else {
            return "Error: " . mysqli_error($conn);
        }
    }
}


// Function to let users log in 
function signIn($conn, $table, $user_email, $user_password)
{
    $signIn_check = "SELECT id, user_email, user_password FROM $table WHERE user_email = '$user_email' AND user_password = '$user_password' ";
    $signIn_check_run = mysqli_query($conn, $signIn_check);

    if (mysqli_num_rows($signIn_check_run) > 0) {
        while ($row = mysqli_fetch_assoc($signIn_check_run)) {
            $_SESSION["id"] = $row['id'];
            $_SESSION["first_name"] = $row['first_name'];

            return "Logged In Successfully!";
        }
    } else {
        return "Error: OOPS! Something went wrong...";
    }
}


// Update Query
function update($conn, $table_name, $set_data, $condition)
{
    try {
        if (!empty($condition)) {
            $update_query = "UPDATE $table_name SET $set_data WHERE $condition";

            $update_result = mysqli_query($conn, $update_query);
            if ($update_result) {
                return $update_result;
            } else {
                return false;
            }
        } else {
            echo "No Condition Available";
            return false;
        }
    } catch (Exception $e) {
        echo "Error : " . $e->getMessage();
        return false;
    }
}


// Function to fetch user's details
function fetchUserDetails($conn, $fetch_table, $condition)
{
    $fetch_query = "SELECT * FROM $fetch_table WHERE $condition";
    $fetch_query_run = mysqli_query($conn, $fetch_query);

    if ($fetch_query_run && mysqli_num_rows($fetch_query_run) > 0) {

        $row = mysqli_fetch_assoc($fetch_query_run);

        $_SESSION['id'] = $row['id'];
        return $row;
    }
}


// Function to update user's profile, such as name, email, bio, etc..
function updateProfile($conn, $table, $first_name, $last_name, $user_name, $user_email, $user_bio, $condition)
{
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
function createPost($conn, $table, $user_id, $caption, $imageNamesAsString, $date, $time)
{
    $insertPostQuery = "INSERT INTO $table (user_id, post_caption, post_images, post_date, post_time) VALUES ('$user_id', '$caption', '$imageNamesAsString', '$date', '$time')";

    $insertPostQuery_run = mysqli_query($conn, $insertPostQuery);

    if ($insertPostQuery_run) {
        return "Post successfully uploaded...";
    } else {
        return "Error: " . mysqli_error($conn);
    }
}

// Function to show post on Home Feed page. 
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


// Function to show post on Profile page.
function show_post_on_profile($conn, $users_table, $posts_table, $likes_table, $profile_feed_condition, $where_condition, $current_user_id)
{
    $show_post = "SELECT 
                    $users_table.*,
                    $posts_table.*,
                    (SELECT COUNT(*) FROM $likes_table WHERE $likes_table.post_id = $posts_table.post_id AND $likes_table.like_status = 1) AS likes_count,
                    MAX($likes_table.like_status) AS like_status
                FROM $users_table
                JOIN $posts_table ON $profile_feed_condition
                LEFT JOIN $likes_table ON $posts_table.post_id = $likes_table.post_id AND $likes_table.liked_by_id = $current_user_id
                WHERE $where_condition
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


// Function to show Post on friend's profile page.
function show_post_on_friends_profile($conn, $users_table, $posts_table, $likes_table, $profile_feed_condition, $where_condition, $id)
{
    $show_post = "SELECT 
                    $users_table.*,
                    $posts_table.*,
                    (SELECT COUNT(*) FROM $likes_table WHERE $likes_table.post_id = $posts_table.post_id AND $likes_table.like_status = 1) AS likes_count,
                    MAX($likes_table.like_status) AS like_status
                FROM $users_table
                JOIN $posts_table ON $profile_feed_condition
                LEFT JOIN $likes_table ON $posts_table.post_id = $likes_table.post_id AND $likes_table.liked_by_id = $id
                WHERE $where_condition
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


// Function to update the user's profile picture
function update_profile_pic($conn, $table, $profile_pic_name, $condition)
{

    $update_profile_pic = "UPDATE $table SET user_profile_pic = '$profile_pic_name' WHERE $condition ";

    $update_profile_pic_run = mysqli_query($conn, $update_profile_pic);

    if ($update_profile_pic_run) {
        return "Your Profile Pic Updated Successfully!";
    } else {
        return "Error: " . mysqli_error($conn);
    }
}


// Function for showing all the unknown users on Home page's right bar to send them friend request
function getAllUserRecord($conn, $getAll_table)
{

    $getAllUser = "SELECT * FROM $getAll_table ";

    $getAllUser_run = mysqli_query($conn, $getAllUser);

    $getAllUser_data = array();

    if ($getAllUser_run && mysqli_num_rows($getAllUser_run) > 0) {
        while ($my_data = mysqli_fetch_assoc($getAllUser_run)) {
            $getAllUser_data[] = $my_data;
        }
        return $getAllUser_data;
    }
}


// Function for getting the data of current user
function currentUser($conn, $getAll_table, $user_id)
{

    $getAllUser = "SELECT * FROM $getAll_table WHERE id = '$user_id' ";

    $getAllUser_run = mysqli_query($conn, $getAllUser);

    if ($getAllUser_run && mysqli_num_rows($getAllUser_run) > 0) {
        return mysqli_fetch_assoc($getAllUser_run);
    }
    return null;
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

// Function to Count Post Like
function likesCounter($conn, $likes_table, $postID)
{
    // Query to check total likes on a post
    $checkQuery = "SELECT COUNT(like_id) as total_likes FROM $likes_table WHERE post_id = $postID and like_status = '1'";
    $result = mysqli_query($conn, $checkQuery);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $total_likes = $row["total_likes"];
        return $total_likes;
    } else {
        return 0;
    }
}


// Function to Count post
function countPost($conn, $posts_table, $condition1, $condition2)
{
    $post_count = "SELECT user_id, COUNT(post_id) AS total_posts
                    FROM $posts_table 
                    WHERE $condition1 AND $condition2
                    GROUP BY user_id";

    $post_count_run = mysqli_query($conn, $post_count);

    if ($post_count_run && mysqli_num_rows($post_count_run) > 0) {

        return mysqli_fetch_assoc($post_count_run);
    }
    return null;
}


// Function to count Followers
function countFollowers($conn, $follows_table, $user_id)
{
    $query = "SELECT
                user_id,
                COUNT(*) AS followers_count
            FROM $follows_table
            WHERE user_id = $user_id AND follow_status = '1'
            GROUP BY user_id";

    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    }

    return null;
}


// Function to count Followings
function countFollowings($conn, $follows_table, $user_id)
{
    $query = "SELECT
                follower_id AS user_id,
                COUNT(*) AS followings_count
            FROM $follows_table
            WHERE follower_id = $user_id AND follow_status = '1'
            GROUP BY follower_id";

    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    }

    return null;
}


// Function to display Follower's data
function showFollowers($conn, $follows_table, $users_table, $user_id)
{
    $show_follower_query = "SELECT *
                            FROM $follows_table INNER JOIN $users_table ON $follows_table.follower_id = $users_table.id
                            WHERE user_id = $user_id AND follow_status = '1'";

    $result = mysqli_query($conn, $show_follower_query);

    $get_followers = array();

    if ($result && mysqli_num_rows($result) > 0) {

        while ($my_data = mysqli_fetch_assoc($result)) {
            $get_followers[] = $my_data;
        }
        return $get_followers;
    }
}


// Function to display Following's data
function showFollowings($conn, $follows_table, $users_table, $user_id)
{
    $show_follower_query = "SELECT *
                            FROM $follows_table INNER JOIN $users_table ON $follows_table.user_id = $users_table.id
                            WHERE follower_id = $user_id AND follow_status = '1'";

    $result = mysqli_query($conn, $show_follower_query);

    $get_followings = array();

    if ($result && mysqli_num_rows($result) > 0) {
        while ($my_data = mysqli_fetch_assoc($result)) {
            $get_followings[] = $my_data;
        }
        return $get_followings;
    }
}
