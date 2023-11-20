<?php
session_start();
require("../../config/connectDB.php");


if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['postId']) && isset($_POST['commentContent'])){
    $postId = $_POST['postId'];

    $commentContent = mysqli_real_escape_string($conn, $_POST['commentContent']);

    $commentOwner = $_SESSION['id'];

    $comment_query = "INSERT INTO comment_table(comment_owner, post_id, comment_date, comment_text) VALUES ($commentOwner, $postId, NOW(), '$commentContent')";

    $comment_query_run = mysqli_query($conn, $comment_query);

    if($comment_query_run){
        echo json_encode(['status' => 'success', 'message' => 'Comment added successfully']);
    }else{
        echo json_encode(['status' => 'error', 'message' => 'Failed to add message']);
    }
}else{
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}