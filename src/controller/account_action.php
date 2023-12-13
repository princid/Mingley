<?php
// Include any necessary configuration or database connection files
session_start();

require_once("../model/Query.php");

// Check if the required parameters are present in the URL
if (isset($_GET['id']) && isset($_GET['action'])) {
    $user_id = intval($_GET['id']);
    $action = intval($_GET['action']);

    // Check if the action is valid (1 for deactivate, 0 for activate)
    if ($action == 1) {
        // Update the user's account status to deleted
        $delete_account = "UPDATE users_table SET is_deleted = 1 WHERE id = $user_id";
        $delete_account_run = mysqli_query($conn, $delete_account);

        $_SESSION["message"] = "User deleted successfully";
        echo '<script>window.location.href = "' . BASE_URL . 'admin/Dashboard.php";</script>';
        exit();
    } elseif ($action == 0) {
        // Update the user's account status to activated (or undeleted)
        $activate_account = "UPDATE users_table SET is_deleted = 0 WHERE id = $user_id";
        $activate_account_run = mysqli_query($conn, $activate_account);

        $_SESSION["message"] = "User activated successfully";
        echo '<script>window.location.href = "' . BASE_URL . 'admin/Dashboard.php";</script>';
        exit();
    }
}

echo '<script>window.location.href = "' . BASE_URL . 'admin/Dashboard.php";</script>';
exit();
