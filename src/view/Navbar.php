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
                                    <a href="HomeFeed.php">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>

                                <!-- Chat Page -->
                                <li class="msg <?= $active_item == 2 ? 'active' : ''; ?>">
                                    <a class="msg-trigger-btn" href="Chat.php">
                                        <i class="fa-solid fa-message"></i>
                                    </a>
                                </li>

                                <!-- Search Page -->
                                <li class="search-trigger <?= $active_item == 3 ? 'active' : ''; ?>">
                                    <a class="search-trigger-btn" href="SearchPage.php">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </a>
                                </li>

                                <!-- Notification Dropdown -->
                                <li class="notification-trigger">
                                    <a class="msg-trigger-btn" href="" id="notifDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-bell"></i><span class="position-absolute top-10 translate-middle badge border border-light rounded-circle bg-danger p-1"><span class="visually-hidden">unread messages</span></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="notifDropdown" style="width: 450px">

                                        <div class="card notifDropdownDiv">
                                            <div class="card-header d-flex justify-content-between align-items-center">
                                                <h6 class="m-0">Notifications <span class="badge bg-danger bg-opacity-10 text-danger ms-2">4 new</span></h6>
                                            </div>
                                            <div class="card-body p-0">
                                                <ul class="list-group list-group-flush list-unstyled notifDropdownUL">
                                                    
                                                </ul>
                                            </div>
                                            <div class="card-footer text-center notifDropdownFooter">
                                                <a href="" class="btn btn-sm btn-primary-soft">Clear All</a>
                                            </div>
                                        </div>

                                    </div>

                                </li>

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
                                            View profile
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