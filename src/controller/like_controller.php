<?php

// session_start();

// require_once("../../config/connectDB.php");

// // Get the post ID and user ID from the AJAX request
// $postID = $_POST['post_id'];

// $userID = $_SESSION['id'];

// // Checking if the user has already liked the post
// $checkQuery = "SELECT * FROM likes_table WHERE post_id = $postID AND liked_by_id = $userID";
// $result = $conn->query($checkQuery);

// if ($result->num_rows > 0) {
//     $row = $result->fetch_assoc();

//     $like_status = $row["like_status"];

//     if($like_status == 1){
//         // User has already liked the post, so unlike it
//         $updateUnlike = "UPDATE likes_table SET like_status = '0' WHERE post_id = $postID AND liked_by_id = $userID";
//         $conn->query($updateUnlike);
//         $response = 'unliked';
//     }
//     else{
//         // User has already unliked the post, so like it
//         $updateLike = "UPDATE likes_table SET like_status = '1' WHERE post_id = $postID AND liked_by_id = $userID";
//         $conn->query($updateLike);
//         $response = 'liked';
//     }
// } else {
//     // User has not liked the post, so like it
//     $insertQuery = "INSERT INTO likes_table (post_id, liked_by_id, like_status) VALUES ($postID, $userID, 1)";
//     $conn->query($insertQuery);
//     $response = 'liked';
// }

// // Close the database connection
// $conn->close();

// // Send the response back to the client
// echo $response;



session_start();

require_once("../model/Query.php");

if (!empty($_SESSION)) {
    
    $postID = $_POST['post_id'];
    $userID = $_SESSION['id'];

    $like_stat = toggleLike($conn, $postID, $userID);

    require_once('show_post_on_feed.php');

    $count_like = $feed_post_result[0]['likes_count'];

    $response = ["likes_count" => $count_like, "status" => 200, "like_status" => $like_stat];

    echo json_encode($response);

    // echo $response;
}

?>