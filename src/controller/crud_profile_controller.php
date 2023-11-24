<?php
require_once("../model/Query.php");

class ProfileHandlerClass
{
    public function deleteProfileImage(array $data)
    {
        if (!empty($data)) {
            global $conn;
            $user_id = $data['user_id'];
            $delete_status = update($conn, "users_table", "`user_profile_pic` = NULL", "id = $user_id");
            if ($delete_status) {
                $response = array("status" => 200, "message" => "<b>Profile Image Deleted Successfully</b>");
                return json_encode($response);
            } else {
                $response = array("status" => 500, "message" => "<b>Something went Wrong...Unable to delete Profile Image...Try again later.</b>");
                return json_encode($response);
            }
        }
    }
}

// Check the action parameter sent via Ajax
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['callHandler'])) {
    $callHandler = $_POST['callHandler'];
    $data = $_POST['dataset'];

    // Create an instance of the class
    $myClass = new ProfileHandlerClass();

    // Call the deleteProfileImage function
    if ($callHandler === "deleteProfileImage") {
        $result = $myClass->deleteProfileImage($data);
        echo $result;
    }
} else {
    $response = array("status" => 500, "message" => "<b>Invalid Action</b>", "redirect" => BASE_URL);
    echo json_encode($response);
    exit();
}
