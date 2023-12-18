<?php

session_start();


require_once("../model/Query.php");
require_once("fetch_user_controller.php");

if (isset($_POST['edit_profile_pic'])) {

    $id = $_SESSION["id"];

    $table = "users_table";

    $condition = " id = '$id' ";

    $imageName = $_FILES["profile_pic"]["name"];
    $imageSize = $_FILES["profile_pic"]["size"];
    $tmpName = $_FILES["profile_pic"]["tmp_name"];

    // var_dump($tmpName);

    $dirName =  "../../assets/profile_pic/" . $id;

    if (!is_dir($dirName)) {
        mkdir($dirName, 0777, true);
    }


    $validImageExtension = ['jpg', 'png', 'jpeg', 'gif'];
    $imageExtension = explode('.', $imageName);
    $imageExtension = strtolower(end($imageExtension));

    $profile_pic_name = $first_name . " - " . date("Y.m.d") . " - " . date("h.i.s A") . " - " . rand(10000, 999999) . "." . $imageExtension;

    $profile_pic_path = $dirName . '/' . $profile_pic_name;

    move_uploaded_file($tmpName, $profile_pic_path);

    $profile_pic_result = update_profile_pic($conn, $table, $profile_pic_name, $condition);
    // var_dump("jhfgfs");

    if ($profile_pic_result === "Your Profile Pic Updated Successfully!") {
        $_SESSION["message"] = $profile_pic_result;
        header("location: http://localhost/PHP_Assesments/Mingley/src/view/Profile.php");
        exit;
    } else {
        $_SESSION["error"] = $profile_pic_result;
        header("location: http://localhost/PHP_Assesments/Mingley/src/view/Profile.php");
        exit;
    }
}
