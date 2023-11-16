<?php
require_once("../model/Query.php");


function userPostDeleteHandler($data)
{
    global $conn;

    $update_status = update($conn, "posts_table", "`is_deleted`='1'", "post_id=$data[post_id]");
    if ($update_status) {
        $response = array("status" => 200, "message" => "<b>Post Deleted Successfully</b>");
        return json_encode($response);
    } else {
        $response = array("status" => 500, "message" => "<b>Something went Wrong...Unable to delete Post...Try again later.</b>");
        return json_encode($response);
    }
}

function editPostHandler($data)
{
    global $conn;
    $post_caption =  htmlentities(trim($data["post_caption"], " "), ENT_HTML5);

    $update_status = update($conn, "posts_table", "`post_caption`='$post_caption'", "post_id=$data[post_id]");
    if ($update_status) {
        $response = array("status" => 200,"update_caption"=>$post_caption ,"message" => "<b>Post Updated Successfully</b>");
        return json_encode($response);
    } else {
        $response = array("status" => 500, "message" => "<b>Something went Wrong...Unable to update Post...Try again later.</b>");
        return json_encode($response);
    }
}



// Check the action parameter sent via Ajax
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['callHandler'])) {
    $callHandler = $_POST['callHandler'];

    if (!empty($_POST['dataset'])) {
        $data = $_POST['dataset'];
    }

    // Call the desired function based on the action
    if ($callHandler === "userPostDeleteHandler") {
        $result = userPostDeleteHandler($data);
        echo $result;
    } else if ($callHandler === "editPostHandler") {
        $result = editPostHandler($data);
        echo $result;
    }
} else {
    $response = array("status" => 500, "message" => "<b>Invalid Action</b>", "redirect" => BASE_URL . "src/view/HomeFeed.php");
    echo json_encode($response);
    exit();
}
