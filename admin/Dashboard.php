<?php
session_start();

// Including Contants
include("../config/constants.php");

// Including the Databse Connection
include("../config/connectDB.php");

// Fetching all the data to count the total number of users
$fetch_name = "SELECT * FROM users_table WHERE user_role_status != 1 ORDER BY user_role_status ";
$fetch_name_run = mysqli_query($conn, $fetch_name);
$total_users = mysqli_num_rows($fetch_name_run);



// Fetching data to count total number of active users
$fetch_active_users = "SELECT * FROM users_table WHERE user_role_status != 1 AND is_deleted = 0 ORDER BY user_role_status ";
$fetch_active_users_run = mysqli_query($conn, $fetch_active_users);

$active_users = mysqli_num_rows($fetch_active_users_run);

// Fetching the data to count total number of inactive users
$fetch_inactive_users = "SELECT * FROM users_table WHERE is_deleted = 1 AND user_role_status != 1 ";
$fetch_inactive_users_run = mysqli_query($conn, $fetch_inactive_users);

// Find total number of deleted/inactive users
$deleted_users = $total_users - $active_users;

// Fetching all user's data to display them on user's table.
$fetch_query = "SELECT * FROM users_table ORDER BY user_role_status DESC, is_deleted ASC";
$fetch_query_run = mysqli_query($conn, $fetch_query);

// Check if the query was successful
if ($fetch_query_run) {
    // Fetch all rows
    $fetch_data = [];
    while ($row = mysqli_fetch_assoc($fetch_query_run)) {
        $fetch_data[] = $row;
    }
    // Check if the logged-in user is a Super Admin
    $isSuperAdmin = false;
    foreach ($fetch_data as $userData) {
        if ($userData['id'] == $_SESSION['id'] && $userData['user_role_status'] == 1) {
            $isSuperAdmin = true;
            break; // No need to continue checking once we find a Super Admin
        }
    }

    // Protecting the page to be accessed by the Super Admin only.
    if (!$isSuperAdmin) {
        header("location: ../src/view/HomeFeed.php");
        exit();
    }
} else {
    echo "Error: " . mysqli_error($conn);
}

?>


<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mingley Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image" href="../assets/img/logo2.png">

    <link rel="stylesheet" href="../assets/css/Dasboard.css">

    <!-- Bootstrap CSS CDN Link -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->

    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap JS CDN Link -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->

</head>

<body>

    <!-- Main Dashboard -->
    <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
        <!-- Vertical Navbar -->
        <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
            <div class="container-fluid nav_container">
                <!-- Toggler -->
                <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Brand -->
                <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="../src/view/HomeFeed.php">
                    <!-- Title -->
                    <h2 class="mb-0 brand_logo">Mingley <span class="trademark">&reg;</span> </h2>
                </a>
                <!-- Divider -->
                <hr class="navbar-divider my-2 opacity-2">

                <!-- Left Bar Collapse -->
                <div class="collapse navbar-collapse" id="sidebarCollapse">
                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <i class="fa-solid fa-rotate-right"></i> Refresh
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../src/view/HomeFeed.php">
                                <i class="fa-solid fa-house"></i> Home Feed
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../src/view/Chat.php">
                                <i class="fa-solid fa-message"></i> All Messages
                                <span class="badge bg-soft-primary text-primary rounded-pill d-inline-flex align-items-center ms-auto">6</span>
                            </a>
                        </li>
                    </ul>

                    <!-- Divider -->
                    <hr class="navbar-divider my-2 opacity-2">

                    <!-- Navigation -->
                    <ul class="navbar-nav mb-md-4">
                        <li>
                            <div class="nav-link text-xs font-semibold text-uppercase text-muted ls-wide" href="#">
                                Inactive Users
                                <span class="badge bg-soft-primary text-primary rounded-pill d-inline-flex align-items-center ms-4">
                                    <?php if ($deleted_users < 10) {
                                        echo '0' . $deleted_users;
                                    } else {
                                        echo $deleted_users;
                                    }
                                    ?>
                                </span>
                            </div>
                        </li>

                        <!-- Displaying Inactive users -->
                        <?php foreach ($fetch_inactive_users_run as $inactive_user_data) {
                            if ($inactive_user_data['is_deleted'] == 1) { ?>
                                <li>
                                    <a href="javascript:void(0)" class="nav-link d-flex align-items-center">
                                        <div class="me-4">
                                            <div class="position-relative d-inline-block text-white">
                                                <?php if (!empty($inactive_user_data['user_profile_pic'])) { ?>
                                                    <img src="<?php echo BASE_URL ?>assets/profile_pic/<?php echo $inactive_user_data['id'] . "/" . $inactive_user_data['user_profile_pic']; ?>" alt="" class="avatar rounded-circle">

                                                <?php } else { ?>
                                                    <img src="<?php echo BASE_URL ?>assets/profile_pic/profileDummy.png" class="avatar rounded-circle">
                                                <?php } ?>

                                                <span class="position-absolute bottom-2 end-2 transform translate-x-1/2 translate-y-1/2 border-2 border-solid border-current w-3 h-3 bg-danger rounded-circle"></span>
                                            </div>
                                        </div>

                                        <div>
                                            <span class="d-block text-sm font-bold">
                                                <?php echo ($inactive_user_data['user_name']); ?>
                                            </span>

                                        </div>
                                    </a>
                                </li>

                            <?php } ?>

                        <?php } ?>
                    </ul>
                </div>
                
            </div>
        </nav>

        <!-- Main content -->
        <div class="h-screen flex-grow-1 overflow-y-lg-auto">
            <!-- Header -->
            <header class="bg-surface-primary mb-5 pt-6">

                <?php if (isset($_SESSION['message'])) { ?>
                    <div class="alertBox">
                        <div class="alert alert-success" role="alert">
                            <h1>
                                <?php
                                echo $_SESSION['message'];
                                unset($_SESSION['message']);
                                ?>
                            </h1>
                        </div>
                    </div>
                <?php } ?>
                <div id="msg"></div>

                <div class="container-fluid">
                    <div class="mb-npx">
                        <div class="row align-items-center">
                            <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                                <!-- Title -->
                                <h2 class="mb-0 brand_logo">Mingley</h2>
                            </div>
                            <!-- Actions -->
                            <div class="col-sm-6 col-12 text-sm-end">
                                <div class="mx-n1">
                                    <a href="../src/view/HomeFeed.php" class="btn btn-sm btn-warning border-base mx-1">
                                        <span class=" pe-2">
                                            <i class="fa-solid fa-house"></i>
                                        </span>
                                        <span>Home</span>
                                    </a>

                                    <a href="../src/view/Profile.php" class="btn btn-sm btn-primary mx-1">
                                        <span class=" pe-2">
                                            <i class="fa-solid fa-id-card"></i>
                                        </span>
                                        <span>My Mingley Profile </span>
                                    </a>

                                    <a target="_blank" href="https://github.com/princid" class="btn btn-sm btn-dark mx-1">
                                        <span class=" pe-2">
                                            <i class="fa-brands fa-github"></i>
                                        </span>
                                        <span>My Github Profile </span>
                                    </a>

                                    <a href="../src/view/SignOut.php" class="btn btn-sm btn-danger mx-1">
                                        <span>Log Out</span>
                                        <span class=" pe-2">
                                            <i class="fa-solid fa-right-from-bracket ps-2"></i>
                                        </span>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main -->
            <main class="py-6 bg-surface-secondary">
                <div class="container-fluid">
                    <!-- Card stats -->
                    <div class="row g-6 mb-6">

                        <!-- Total Users card -->
                        <div class="col-xl-4 col-sm-6 col-12">
                            <div class="card shadow border-0 top_card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <span class="h6 font-semibold text-dark text-md d-block mb-2">Total
                                                Users</span>
                                            <span class="h3 font-bold mb-0"><?php if ($total_users < 10) {
                                                                                echo '0' . $total_users;
                                                                            } else {
                                                                                echo $total_users;
                                                                            } ?></span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle">
                                                <i class="fa-solid fa-users"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2 mb-0 text-sm">
                                        <span class="badge badge-pill bg-soft-success text-success me-2">
                                            <i class="bi bi-arrow-up me-1"></i>13%
                                        </span>
                                        <span class="text-nowrap text-xs font-semibold text-muted">Since last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Active Users card -->
                        <div class="col-xl-4 col-sm-6 col-12">
                            <div class="card shadow border-0 top_card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <span class="h6 font-semibold text-dark text-md d-block mb-2">Active
                                                Users</span>
                                            <span class="h3 font-bold mb-0"><?php if ($active_users < 10) {
                                                                                echo '0' . $active_users;
                                                                            } else {
                                                                                echo $active_users;
                                                                            } ?></span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                                                <i class="fa-solid fa-user-check"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2 mb-0 text-sm">
                                        <span class="badge badge-pill bg-soft-danger text-danger me-2">
                                            <i class="bi bi-arrow-down me-1"></i>-5%
                                        </span>
                                        <span class="text-nowrap text-xs font-semibold text-muted">Since last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Deleted Users Card -->
                        <div class="col-xl-4 col-sm-6 col-12">
                            <div class="card shadow border-0 top_card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <span class="h6 font-semibold text-dark text-md d-block mb-2">Deleted
                                                Users</span>
                                            <span class="h3 font-bold mb-0"><?php if ($deleted_users < 10) {
                                                                                echo '0' . $deleted_users;
                                                                            } else {
                                                                                echo $deleted_users;
                                                                            } ?></span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-danger text-white text-lg rounded-circle">
                                                <i class="fa-solid fa-user-xmark"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2 mb-0 text-sm">
                                        <span class="badge badge-pill bg-soft-success text-success me-2">
                                            <i class="bi bi-arrow-up me-1"></i>30%
                                        </span>
                                        <span class="text-nowrap text-xs font-semibold text-muted">Since last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- <div id="alertBox"></div> -->

                    <!-- User's Editable Data -->
                    <div class="card shadow border-0 mb-7 userListDiv">
                        <div class="headerCard">
                            <h3 class="h3 mb-0 ls-tight">User's List</h3>

                            <!-- Filter Box -->
                            <div class="">
                                <label for="#userStatusFilter " class="fs-5 primary-text fw-bold me-2">Status Filter :</label>
                                <select id="userStatusFilter" class="fs-6 p-1 fw-bold">
                                    <option value="all">All</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table id="table_id" class="table table-hover table-nowrap display">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th class="text-center" scope="col">Account Creation Date</th>
                                        <th class="text-center" scope="col">Status</th>
                                        <!-- <th class="text-center" scope="col">Change Status</th> -->
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="tabular_card">
                                    <?php
                                    foreach ($fetch_query_run as $user_data) {

                                        if ($user_data['is_deleted'] == 1) { ?>

                                            <!-- If the user's account is deleted, then show this on Frontend table -->
                                            <tr data-user-id="<?php echo $user_data['id']; ?>">
                                                <td>
                                                    <?php if (!empty($user_data['user_profile_pic'])) { ?>
                                                        <img title="<?php echo $user_data['user_name'] ?>" src="<?php echo BASE_URL ?>assets/profile_pic/<?php echo $user_data['id'] . "/" . $user_data['user_profile_pic']; ?>" alt="" class="avatar avatar-sm rounded-circle me-2">

                                                    <?php } else { ?>
                                                        <img title="<?php echo $user_data['user_name'] ?>" src="<?php echo BASE_URL ?>assets/profile_pic/profileDummy.png" class="avatar avatar-sm rounded-circle me-2">
                                                    <?php } ?>

                                                    <a title="Account Deleted" class="text-danger text-truncate font-semibold" href="javascript:void(0)">
                                                        <?php echo strtoupper($user_data['first_name'] . " " . $user_data['last_name']); ?>
                                                    </a>
                                                </td>

                                                <td>
                                                    <div class="text-danger">
                                                        <?php echo ($user_data['user_email']); ?>
                                                    </div>
                                                </td>

                                                <td class="text-center">
                                                    <div class="text-danger">
                                                        <?php echo ($user_data['created_at']); ?>
                                                    </div>
                                                </td>

                                                <td class="text-center">
                                                    <span class="badge badge-lg badge-dot" id="status-badge-<?php echo $user_data['id']; ?>">
                                                        <?php if ($user_data['is_deleted'] != 1) { ?>
                                                            <i class="bg-success"></i>Active
                                                        <?php } else { ?>
                                                            <i class="bg-danger"></i>Inactive
                                                        <?php } ?>
                                                    </span>
                                                </td>

                                                <td class="text-center">

                                                    <?php if ($user_data['user_role_status'] == 1) { ?>

                                                        <button type="button" disabled="disabled" class="btn btn-sm btn-square btn-success editBtn">
                                                            <i class="bi bi-pencil-square"></i>
                                                        </button>

                                                        <button type="button" disabled="disabled" class="btn btn-sm btn-square btn-danger delBtn">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    <?php } else { ?>

                                                        <a href="#activateModal_<?php echo $user_data['id']; ?>" rel="modal:open">
                                                            <button title="Activate User" type="button" class="btn btn-sm btn-square btn-success activateBtn">
                                                                <!-- <i class="bi bi-person-check"></i> -->
                                                                <i class="fa-solid fa-user-check"></i>
                                                            </button>
                                                        </a>

                                                        <div id="activateModal_<?php echo $user_data['id']; ?>" class="modal">
                                                            <p>Are you sure, you want to activate <?php echo $user_data['user_name']; ?> 's account?</p>
                                                            <a class="closeBtn" href="#" rel="modal:close">Close</a>

                                                            <a href=<?php echo "http://localhost/PHP_Assesments/Mingley/src/controller/account_action.php?id=" . $user_data['id'] . "&action=0" ?> rel="">
                                                                <button type="button" name="activate_user" class="btn btn-sm btn-success activate-user-btn activateAnchor" data-user-id="<?php echo $user_data['id']; ?>">Activate</button>
                                                            </a>
                                                        </div>

                                                    <?php } ?>


                                                </td>

                                            </tr>

                                        <?php } else { ?>

                                            <!-- If the user's account is not deleted, then show this on Frontend table -->
                                            <tr data-user-id="<?php echo $user_data['id']; ?>">
                                                <td>
                                                    <?php if (!empty($user_data['user_profile_pic'])) { ?>
                                                        <img title="<?php echo $user_data['user_name'] ?>" src="<?php echo BASE_URL ?>assets/profile_pic/<?php echo $user_data['id'] . "/" . $user_data['user_profile_pic']; ?>" alt="" class="avatar avatar-sm rounded-circle me-2">

                                                    <?php } else { ?>
                                                        <img title="<?php echo $user_data['user_name'] ?>" src="<?php echo BASE_URL ?>assets/profile_pic/profileDummy.png" class="avatar avatar-sm rounded-circle me-2">
                                                    <?php } ?>

                                                    <?php
                                                    if ($user_data['user_role_status'] == 0) { ?>
                                                        <a class="text-heading font-semibold" href=<?= "http://localhost/PHP_Assesments/Mingley/src/view/FriendProfile.php?user_id=" . $user_data['id'] ?>>
                                                            <?php echo strtoupper($user_data['first_name'] . " " . $user_data['last_name']); ?>
                                                        </a>
                                                    <?php } else { ?>
                                                        <a class="text-muted font-semibold" href=<?= "http://localhost/PHP_Assesments/Mingley/src/view/FriendProfile.php?user_id=" . $user_data['id'] ?>>
                                                            <?php echo strtoupper($user_data['first_name'] . " " . $user_data['last_name'] . " (You)"); ?>
                                                        </a>
                                                    <?php } ?>
                                                </td>

                                                <td>
                                                    <?php echo ($user_data['user_email']); ?>
                                                </td>

                                                <td class="text-center">
                                                    <?php echo ($user_data['created_at']); ?>
                                                </td>

                                                <td class="text-center">
                                                    <span class="badge badge-lg badge-dot" id="status-badge-<?php echo $user_data['id']; ?>">
                                                        <?php if ($user_data['is_deleted'] != 1) { ?>
                                                            <i class="bg-success"></i>Active
                                                        <?php } else { ?>
                                                            <i class="bg-danger"></i>Inactive
                                                        <?php } ?>
                                                    </span>
                                                </td>

                                                <td class="text-center">

                                                    <?php if ($user_data['user_role_status'] == 1) { ?>

                                                        <button type="button" disabled="disabled" class="btn btn-sm btn-square btn-danger delBtn">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    <?php } else { ?>

                                                        <a href="#delModal_<?php echo $user_data['id']; ?>" rel="modal:open">
                                                            <button title="Delete User" type="button" class="btn btn-sm btn-square btn-danger delBtn">
                                                                <i class="bi bi-trash-fill"></i>
                                                            </button>
                                                        </a>

                                                        <div id="delModal_<?php echo $user_data['id']; ?>" class="modal">
                                                            <p>Are you sure, you want to delete <?php echo $user_data['user_name']; ?> 's account?</p>
                                                            <a class="closeBtn" href="#" rel="modal:close">Close</a>

                                                            <a href=<?php echo "http://localhost/PHP_Assesments/Mingley/src/controller/account_action.php?id=" . $user_data['id'] . "&action=1" ?> rel="">
                                                                <button type="button" name="delete_user" class="btn btn-sm btn-danger delete-user-btn delAnchor" data-user-id="<?php echo $user_data['id']; ?>">Delete</button>
                                                            </a>
                                                        </div>

                                                    <?php } ?>


                                                </td>

                                            </tr>

                                        <?php } ?>

                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer border-0 py-5">
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Including jQuery :) -->
    <script src="../assets/js/jquery.js"></script>

    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

    <!-- cdn links for jquery table -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <!-- Customized the jQuery table -->
    <script>
        $(document).ready(function() {
            const table = $('#table_id').DataTable({
                "paging": true,
                "pageLength": 5,
                "order": [3, 'asc'],
                // "order": [0, 'asc'],
                "pagingType": "simple_numbers",
                "language": {
                    "paginate": {
                        "next": "&gt;",
                        "previous": "&lt;"
                    },
                    "lengthMenu": "Show <select>" +
                        "<option value='5'>5</option>" +
                        "<option value='10'>10</option>" +
                        "<option value='25'>25</option>" +
                        "<option value='-1'>All</option>" +
                        "</select> entries",
                    "searchPlaceholder": "Search..."
                }
            });
        });


        // For Filtering the Data
        // Initial load of the DataTable with all data
        table.columns(3).search('').draw();

        // Add change event handler to the dropdown
        $('#userStatusFilter').on('change', function() {
            var status = $(this).val();

            if (status === 'all') {
                // Show all rows
                table.columns(3).search('').draw();
            } else if (status === 'active') {
                // Filter rows based on active status
                table.columns(3).search('Active').draw();
            } else if (status === 'inactive') {
                // Filter rows based on inactive status
                table.columns(3).search('Inactive').draw();
            }
        });
    </script>

    <!-- For alerting the messages -->
    <script>
        const alertBox = document.querySelector(".alertBox");
        setTimeout(() => {
            alertBox.innerHTML = "";
        }, 3000);
    </script>

    <!-- <script src="../assets/js/alertMessage.js"></script> -->

</body>

</html>