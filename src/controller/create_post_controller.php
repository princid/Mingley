<?php

session_start();

// require("../../config/connectDB.php");
require("../model/Query.php");

if (isset($_POST['upload_button'])) {
    
    $id = $_SESSION["id"]; // Get the user's ID, you may need to adjust this

    $caption = trim(htmlentities($_POST['caption'], ENT_QUOTES, 'UTF-8'));
    
    // Create a directory for the user if it doesn't exist
    $user_directory = '../../assets/posts/' . $id;
    if (!is_dir($user_directory)) {
        mkdir($user_directory, 0777, true);
    }
    
    // Generate a unique post ID, you can use a function or database auto-increment.
    $post_id = uniqid();
    $post_directory = $user_directory . '/' . $post_id;
    mkdir($post_directory, 0777, true);

    
    $fileCount = count($_FILES['files']['name']);
    $$uploadedFileNames = [];
    
    for ($i = 0; $i < $fileCount; $i++) {
        $tmpFilePath = $_FILES['files']['tmp_name'][$i];
        $fileType = pathinfo($_FILES['files']['name'][$i], PATHINFO_EXTENSION);
        
        if (in_array($fileType, ['jpg', 'jpeg', 'png', 'gif'])) {
            $newImageName = $post_id . " - " . date("Y.m.d") . " - " . date("h.i.s A") . " - " . rand(10000, 999999). ".". $fileType;
            
            $uploadedFileNames[] = $newImageName;
            
            $newFilePath = $post_directory . '/' . $newImageName;

            move_uploaded_file($tmpFilePath, $newFilePath);
        }
    }
    
    // Convert the array of image names to a comma-separated string.
    $imageNamesAsString = implode(', ', $uploadedFileNames);

    $table = 'posts_table';

    var_dump($table);
    $result = create_post($conn, $table, $id, $caption, $imageNamesAsString);


    if ($result === "Post successfully uploaded...") {
        $_SESSION["message"] = $result;
        header("location: http://localhost/PHP_Assesments/Mingley/src/view/HomeFeed.php");
        exit;
    } else {
        $_SESSION["message"] = $result;
        header("location: http://localhost/PHP_Assesments/Mingley/src/view/HomeFeed.php");
        exit;
    }


}

else{
    echo "dfgvbdfjg";
}


?>