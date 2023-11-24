<?php
session_start();

require_once("../model/Query.php");
require_once("fetch_user_controller.php");
require_once("../../includes/DateTime.php");

if (isset($_POST['upload_button'])) {
    $user_id = $_SESSION["id"];
    $caption = trim(htmlentities($_POST['caption'], ENT_QUOTES, 'UTF-8'));
    $post_id = $_POST['post_id'];
    
    // Created a directory for the user if it doesn't exist
    $user_directory = '../../assets/posts/' . $user_id;
    if (!is_dir($user_directory)) {
        mkdir($user_directory, 0777, true);
    }

    $post_directory = $user_directory . '/' . $post_id;
    mkdir($post_directory, 0777, true);

    // Limiting the number of uploads to 10
    $maxUploads = 10;
    $uploadedFileNames = [];

    if (count($_FILES['files']['name']) > $maxUploads) {
        // Displaying an error message if more than 10 images are selected
        $_SESSION["message"] = "You can upload up to 10 images only.";
        header("location: ".BASE_URL."src/view/HomeFeed.php");
        exit;
    }

    for ($i = 0; $i < count($_FILES['files']['name']); $i++) {
        $tmpFilePath = $_FILES['files']['tmp_name'][$i];
        $fileType = pathinfo($_FILES['files']['name'][$i], PATHINFO_EXTENSION);
        
        if (in_array($fileType, ['jpg', 'jpeg', 'png', 'gif'])) {
            $newImageName = $first_name . " - " . date("Y.m.d") . " - " . date("h.i.s A") . " - " . rand(10000, 999999). ".". $fileType;
            
            $uploadedFileNames[] = $newImageName;
            
            $newFilePath = $post_directory . '/' . $newImageName;

            move_uploaded_file($tmpFilePath, $newFilePath);
        }
    }
    
    // Convert the array of image names to a comma-separated string.
    $imageNamesAsString = implode(',', $uploadedFileNames);

    $table = 'posts_table';

    $result_post = createPost($conn, $table, $user_id, $caption, $imageNamesAsString, $date, $time);

    if ($result_post === "Post successfully uploaded...") {
        $_SESSION["message"] = $result_post;
        header("location:".BASE_URL."src/view/HomeFeed.php");
        exit;
    } else {
        $_SESSION["message"] = $result_post;
        header("location:".BASE_URL."src/view/HomeFeed.php");
        exit;
    }
}
