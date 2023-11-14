<?php





session_start();

require_once("../model/Query.php");

if (!empty($_SESSION)) {
    
    $postID = $_POST['post_id'];
    $userID = $_SESSION['id'];

    $like_stat = toggleLike($conn, $postID, $userID);

    require_once('show_post_on_feed.php');

    $count_like = $feed_post_result[0]['likes_count'];

    $response = ["likes_count" => $count_like, "status" => 200, "like_status" => $like_stat, "post_id" => $postID];
    // $response = ["status" => 200, "like_status" => $like_stat, "post_id" => $postID];

    echo json_encode($response);

    // echo $response;
}

?>