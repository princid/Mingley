<?php
session_start();

require_once("../model/Query.php");

if (!empty($_SESSION)) {

    $postID = $_POST['post_id'];
    $receiver_id = $_POST['user_id'];
    $userID = $_SESSION['id'];

    $like_stat = toggleLike($conn, $postID, $userID);

    // Likes Counter
    $likes_table = 'likes_table';
    $likesCounter = likesCounter($conn, $likes_table, $postID);

    // Sending response to the ajax
    $response = ["likes_count" => $likesCounter, "status" => 200, "like_status" => $like_stat, "post_id" => $postID, "sender_id" => $userID, "receiver" => $receiver_id];

    echo json_encode($response);
}
