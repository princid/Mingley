<?php
session_start();

require_once("../model/Query.php");

if ($_SERVER["REQUEST_METHOD"] && isset($_POST['delete_account_btn'])) {
    $account_id = $_SESSION['id'];

    // Validating the ID
    if (!is_numeric($account_id)) {
        $_SESSION["message"] = "Invalid user ID";
        header("location: " . BASE_URL . "src/view/Profile.php");
        exit;
    }

    $table = 'users_table';
    $tab_col = 'is_deleted';
    $del_condition = "id = '$account_id'";

    $del_account = "UPDATE $table SET $tab_col = 1 WHERE $del_condition";

    $del_account_run = mysqli_query($conn, $del_account);

    if ($del_account_run) {
        $_SESSION["message"] = "Account Deleted Successfully!";
        header("location: " . BASE_URL . "src/view/SignIn.php");
        exit;
    } else {
        $_SESSION["message"] = "Error: OOPS! Something went wrong...";
        header("location: " . BASE_URL . "src/view/Profile.php");
        exit;
    }
}
