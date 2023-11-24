<?php

session_start();
require("../../config/connectDB.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['postId']) && isset($_POST['commentContent'])) {
    $postId = $_POST['postId'];
    $commentContent = mysqli_real_escape_string($conn, $_POST['commentContent']);
    $commentOwner = $_SESSION['id'];

    // Inserting the comment into the database
    $comment_query = "INSERT INTO comment_table(comment_owner, post_id, comment_date, comment_text) VALUES ($commentOwner, $postId, NOW(), '$commentContent')";
    $comment_query_run = mysqli_query($conn, $comment_query);

    if ($comment_query_run) {
        // Getting all the additional information about the comment
        $get_comment_info_query = "SELECT c.comment_owner, c.comment_date, c.comment_text, u.user_name, u.user_profile_pic
                                   FROM comment_table c
                                   LEFT JOIN users_table u ON c.comment_owner = u.id
                                   WHERE c.post_id = '$postId'
                                   ORDER BY c.comment_date DESC
                                   LIMIT 1";
        $get_comment_info_query_run = mysqli_query($conn, $get_comment_info_query);

        if ($get_comment_info_data = mysqli_fetch_assoc($get_comment_info_query_run)) {
            echo json_encode([
                'status' => 'success',
                'message' => 'Comment added successfully',
                'commentInfo' => $get_comment_info_data,
            ]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to retrieve comment information']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to add message']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}
?>
