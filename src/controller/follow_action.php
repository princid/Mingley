<?php

session_start();
require("../../config/connectDB.php");
require_once("../model/Query.php");
require_once("../../includes/DateTime.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['userId'])) {
    $userId = $_POST['userId'];
    $followerId = $_SESSION['id'];

    // Get follower name
    $followerQuery = "SELECT user_name FROM users_table WHERE id = $followerId";
    $followerResult = mysqli_query($conn, $followerQuery);

    if ($followerResult) {
        $followerData = mysqli_fetch_assoc($followerResult);
        $follower_name = $followerData['user_name'];

        // Check if the action is "mark_all_as_read"
        if (isset($_POST['action']) && $_POST['action'] === 'mark_all_as_read') {
            // Update the is_read column in the notif_table
            $updateIsReadQuery = "UPDATE notif_table SET is_read = 1 WHERE receiver_id = $followerId";
            $updateIsReadResult = mysqli_query($conn, $updateIsReadQuery);

            if ($updateIsReadResult) {
                // Successfully marked all notifications as read
                echo json_encode(['status' => 'success', 'message' => 'All notifications marked as read']);
            } else {
                // Error in database operation
                echo json_encode(['status' => 'error', 'message' => 'Failed to mark all notifications as read']);
            }
            exit; // Exit the script after handling the "mark_all_as_read" action
        }

        // Check if the user is already being followed
        $query = "SELECT * FROM follows_table WHERE user_id = $userId AND follower_id = $followerId";
        $result = mysqli_query($conn, $query);

        $notifCheckQuery = "SELECT * FROM notif_table WHERE receiver_id = $userId AND sender_id = $followerId";
        $notifCheckQueryResult = mysqli_query($conn, $notifCheckQuery);

        if ($result && $notifCheckQueryResult) {
            if (mysqli_num_rows($result) === 0 && mysqli_num_rows($notifCheckQueryResult) === 0) {
                // User is not being followed, insert new follow record and notification
                $insertQuery = "INSERT INTO follows_table (user_id, follower_id, follow_status, created_at) VALUES ($userId, $followerId, 1, NOW())";

                $notif_content = "started following you";
                $insertNotif = "INSERT INTO notif_table (receiver_id, sender_id, sender_name, notif_content, notif_date, notif_time) VALUES ('$userId', '$followerId', '$follower_name', '$notif_content', '$date', '$time') ";
                $insertNotifRun = mysqli_query($conn, $insertNotif);

                if (mysqli_query($conn, $insertQuery) && $insertNotifRun) {
                    // Successfully followed
                    echo json_encode(['status' => 'success', 'message' => 'User followed', 'follow_status' => 1, 'follower_name' => $follower_name, 'currentUserId' => $followerId, 'time' => $date . " - " . $time]);
                } else {
                    // Error in database operation
                    echo json_encode(['status' => 'error', 'message' => 'Failed to follow user']);
                }
            } else {
                // If already following, update the follow status
                $updateQuery = "UPDATE follows_table SET follow_status = 1 - follow_status WHERE user_id = $userId AND follower_id = $followerId";

                $updateNotif = "UPDATE notif_table SET sender_name = '$follower_name', notif_date = '$date', notif_time = '$time' WHERE receiver_id = $userId AND sender_id = $followerId ";
                $updateNotifRun = mysqli_query($conn, $updateNotif);

                if (mysqli_query($conn, $updateQuery) && $updateNotifRun) {
                    // Successfully updated follow status. Fetch the updated follow status from the database
                    $updatedStatusQuery = "SELECT follow_status FROM follows_table WHERE user_id = $userId AND follower_id = $followerId";
                    $updatedStatusResult = mysqli_query($conn, $updatedStatusQuery);
                    $updatedStatus = mysqli_fetch_assoc($updatedStatusResult)['follow_status'];

                    // Counting Current Total Followers
                    $followers_count = countFollowers($conn, 'follows_table', 'users_table', $userId);
                    $followers_count['followers_count'] = empty($followers_count['followers_count']) ? 0 : $followers_count['followers_count'];

                    echo json_encode(['status' => 'success', 'message' => 'Follow status updated', 'follow_status' => $updatedStatus, 'followers_count' => $followers_count['followers_count'], 'follower_name' => $follower_name, 'currentUserId' => $followerId, 'time' => $date . " - " . $time]);
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
        // Error in getting follower name
        echo json_encode(['status' => 'error', 'message' => 'Failed to get follower name']);
    }
} else {
    // Invalid request method or missing parameters
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}
?>
