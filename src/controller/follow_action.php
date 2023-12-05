<?php
session_start();
require("../../config/connectDB.php");
require_once("../model/Query.php");


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['userId'])) {
    $userId = $_POST['userId'];
    $followerId = $_SESSION['id'];

    // Check if the user is already being followed
    $query = "SELECT * FROM follows_table INNER JOIN users_table ON follows_table.follower_id = users_table.id WHERE user_id = $userId AND follower_id = $followerId";
    $result = mysqli_query($conn, $query);
    $follower_array_data = mysqli_fetch_assoc($result);

    $follower_name = $follower_array_data['user_name'];

    if ($result) {
        if (mysqli_num_rows($result) === 0) {
            $insertQuery = "INSERT INTO follows_table (user_id, follower_id, follow_status, created_at) VALUES ($userId, $followerId, 1, NOW())";
            if (mysqli_query($conn, $insertQuery)) {
                // Successfully followed
                echo json_encode(['status' => 'success', 'message' => 'User followed', 'follow_status' => 1, 'follower_name' => $follower_name, 'currentUserId' => $followerId ]);
            } else {
                // Error in database operation
                echo json_encode(['status' => 'error', 'message' => 'Failed to follow user']);
            }
        } else {
            // If already following, update the follow status
            $updateQuery = "UPDATE follows_table SET follow_status = 1 - follow_status WHERE user_id = $userId AND follower_id = $followerId";
            if (mysqli_query($conn, $updateQuery)) {
                // Successfully updated follow status

                // Fetch the updated follow status from the database
                $updatedStatusQuery = "SELECT follow_status FROM follows_table WHERE user_id = $userId AND follower_id = $followerId";
                $updatedStatusResult = mysqli_query($conn, $updatedStatusQuery);
                $updatedStatus = mysqli_fetch_assoc($updatedStatusResult)['follow_status'];

                // Counting Current Total Followers
                $followers_count = countFollowers($conn, 'follows_table', $userId);

                $followers_count['followers_count'] = empty($followers_count['followers_count']) ? 0 : $followers_count['followers_count'];

                echo json_encode(['status' => 'success', 'message' => 'Follow status updated', 'follow_status' => $updatedStatus, 'followers_count' => $followers_count['followers_count'], 'follower_name' => $follower_name, 'currentUserId' => $followerId ]);
            } else {
                // Error in database operation
                echo json_encode(['status' => 'error', 'message' => 'Failed to update follow status']);
            }
        }
    } else {
        // Error in database operation
        echo json_encode(['status' => 'error', 'message' => 'Database error']);
    }
} else {
    // Invalid request method or missing parameters
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}
