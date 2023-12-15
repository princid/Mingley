<?php

session_start();

require_once("../../config/constants.php");

require_once("../controller/fetch_user_controller.php");

// Checking if Session is active or not
if (empty($_SESSION['id'])) {
    header("location: SignIn.php");
    exit();
}

?>

<!-- header area start -->
<header>
    <div class="header-top sticky bg-white d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <!-- header top navigation start -->
                    <div class="header-top-navigation">
                        <nav>
                            <ul class="main_navbar">

                                <!-- Home Page -->
                                <li class="<?= $active_item == 1 ? 'active' : ''; ?>">
                                    <a title="Home" href="HomeFeed.php">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>

                                <!-- Chat Page -->
                                <li class="msg <?= $active_item == 2 ? 'active' : ''; ?>">
                                    <a title="Chat with Minglers" class="msg-trigger-btn" href="Chat.php">
                                        <i class="fa-solid fa-message"></i>
                                    </a>
                                </li>

                                <!-- Search Page -->
                                <li class="search-trigger <?= $active_item == 3 ? 'active' : ''; ?>">
                                    <a title="Search Other Minglers" class="search-trigger-btn" href="SearchPage.php">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </a>
                                </li>

                                <!-- Notification Dropdown -->
                                <li class="notification-trigger">
                                    <a title="Notifications" class="msg-trigger-btn" href="" id="notifDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-bell"></i><span class="position-absolute top-10 translate-middle badge border border-light rounded-circle bg-danger p-1"><span class="visually-hidden">unread messages</span></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="notifDropdown" style="width: 450px">

                                        <div class="card notifDropdownDiv">
                                            <div class="card-header d-flex justify-content-between align-items-center">
                                                <h6 class="m-0">Notifications <span class="badge bg-danger bg-opacity-10 text-danger ms-2">4 new</span></h6>
                                            </div>
                                            <div class="card-body p-0">
                                                <?php

                                                $get_notif  = "SELECT * FROM notif_table JOIN follows_table WHERE receiver_id = $id AND receiver_id = follows_table.user_id AND sender_id = follows_table.follower_id AND follows_table.follow_status = 1 ORDER BY notif_id DESC";

                                                $get_notif_result = mysqli_query($conn, $get_notif);

                                                if ($get_notif_result && mysqli_num_rows($get_notif_result) > 0) {
                                                    foreach ($get_notif_result as $notif_data) {

                                                        $sender_name   = $notif_data['sender_name'];
                                                        $notif_content = $notif_data["notif_content"];
                                                        $notif_timing  = $notif_data["notif_date"] . " - " . $notif_data["notif_time"];

                                                        if ($notif_data['is_read'] == 0) {
                                                            $unreadNotificationsExist = true; // Set the flag to true

                                                ?>
                                                            <ul class="list-group list-group-flush list-unstyled notifDropdownUL">
                                                                <li class="list-group-item">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar me-3">
                                                                            <div class="avatar-img rounded-circle bg-primary">
                                                                                <span class="text-white position-absolute top-50 start-50 translate-middle fw-bold senderInitial"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <p class="mb-0"><b><?= $sender_name; ?> </b><?= $notif_content; ?></p>
                                                                            <small class="text-muted"><?= $notif_timing; ?></small>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>

                                                        <?php
                                                        }
                                                    }
                                                    if ($unreadNotificationsExist) { // Display the button only if there are unread notifications
                                                        ?>
                                                        <div class="card-footer text-center notifDropdownFooter">
                                                            <a href="" class="btn btn-sm btn-primary-soft" id="clearNotifications"><i class="fa-solid fa-check pe-2"></i> Mark all as read </a>
                                                        </div>
                                                    <?php
                                                    } else { // If no unread notifications, display the "No new notification!" message
                                                    ?>
                                                        <div class="card-footer text-center notifDropdownFooter">
                                                            <a href="" class="btn btn-sm btn-primary-soft"><i class="fa-solid fa-xmark pe-2"></i> No new notification! </a>
                                                        </div>
                                                    <?php
                                                    }
                                                } else { // If there are no notifications at all
                                                    ?>
                                                    <div class="card-footer text-center notifDropdownFooter">
                                                        <a href="" class="btn btn-sm btn-primary-soft"><i class="fa-solid fa-check pe-2"></i> No new notification! </a>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>

                                </li>

                                <!-- Only if you're super admin, then this icon will be displayed on your navbar -->
                                <?php if ($user_role == 1) { ?>
                                    <li>
                                        <a title="Admin Dashboard" class="" href=<?php echo BASE_URL . "admin/Dashboard.php" ?>>
                                            <i class="fa-solid fa-chart-pie pe-2"></i>
                                        </a>
                                    </li>
                                <?php } ?>

                            </ul>
                        </nav>
                    </div>
                    <!-- header top navigation start -->
                </div>

                <div class="col-md-2">
                    <!-- brand logo start -->
                    <div class="brand-logo text-center">
                        <a href="HomeFeed.php">
                            <img src="../../assets/img/logo.png" alt="brand logo">
                        </a>
                    </div>
                    <!-- brand logo end -->
                </div>

                <div class="col-md-5">
                    <div class="header-top-right d-flex align-items-center justify-content-end">

                        <!-- profile picture start -->
                        <div class="profile-setting-box">
                            <div class="profile-thumb-small">
                                <a href="" class="profile-triger h-100 w-100" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <!-- <figure> -->
                                    <?php if (!empty($user_profile_pic)) { ?>
                                        <img class="avatar-img rounded-circle border border-primary border-2 p-1" src="<?= BASE_URL ?>assets/profile_pic/<?= $id . "/" . $user_profile_pic; ?>" alt="">
                                    <?php } else { ?>
                                        <img class="avatar-img rounded-circle border border-primary border-2 p-1" src="<?= BASE_URL ?>assets/profile_pic/profileDummy.png" alt="">
                                    <?php } ?>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                                    <!-- Profile info -->
                                    <li class="px-3">
                                        <div>
                                            <h5><?php echo ($first_name . " " . $last_name); ?></h5>
                                            <small class="profileDropdownMail"><?php echo $user_email; ?></small>
                                        </div>

                                        <a class="dropdown-item btn btn-primary-soft btn-sm my-2 text-center" href="Profile.php">
                                            My Profile
                                        </a>
                                    </li>

                                    <li class="dropdown-divider"></li>

                                    <li>
                                        <a class="dropdown-item bg-danger-soft-hover text-danger" href="SignOut.php">
                                            <i class="fa-solid fa-power-off text-danger pe-2 mx-auto"></i>
                                            Sign Out
                                        </a>
                                    </li>

                                </ul>

                            </div>
                        </div>
                        <!-- profile picture end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->

<script src="../../assets/js/jquery.js"></script>

<script>
    const senderInitials = document.querySelectorAll('.senderInitial');
    const notificationContainer = document.querySelector('.notifDropdownUL');

    <?php
    if ($get_notif_result) {
        $index = 0;
        foreach ($get_notif_result as $notif_data) {
            $notif_content_first_char = !empty($notif_data["sender_name"]) ? json_encode(substr($notif_data["sender_name"], 0, 1)) : "''";
            echo "senderInitials[$index].innerHTML = $notif_content_first_char;";
            $index++;
        }
    }
    ?>

</script>


<script>
    $(document).ready(function() {
        $('#clearNotifications').on('click', function(e) {
            e.preventDefault();

            // Send an AJAX request to mark all notifications as read
            $.post('../controller/follow_action.php', {
                action: 'mark_all_as_read',
                userId: <?php echo $id; ?>
            }, function(response) {
                console.log(response);
            });
        });
    });
</script>