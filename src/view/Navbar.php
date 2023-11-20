<?php

// error_reporting(0);

session_start();


require_once("../../config/constants.php");

require_once("../controller/fetch_user_controller.php");



// var_dump($first_name);
// exit;

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
                                <li class="<?= $active_item == 1 ? 'active' : ''; ?>">
                                    <a href="HomeFeed.php">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>


                                <li class="msg <?= $active_item == 2 ? 'active' : ''; ?>">
                                    <a class="msg-trigger-btn" href="Chat.php">
                                        <i class="fa-solid fa-message"></i>
                                    </a>
                                </li>

                                <!-- Pending -->
                                <li class="search-trigger <?= $active_item == 3 ? 'active' : ''; ?>">
                                    <a class="search-trigger-btn" href="SearchPage.php">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </a>
                                </li>

                                <!-- Notification Dropdown -->
                                <li class="notification-trigger">
                                    <a class="msg-trigger-btn" href="#" id="notifDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-bell"></i><span class="position-absolute top-10 translate-middle badge border border-light rounded-circle bg-danger p-2"><span class="visually-hidden">unread messages</span></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="notifDropdown" style="width: 450px">

                                        <div class="card notifDropdownDiv">
                                            <div class="card-header d-flex justify-content-between align-items-center">
                                                <h6 class="m-0">Notifications <span class="badge bg-danger bg-opacity-10 text-danger ms-2">4 new</span></h6>
                                                <a class="small" href="#">Clear all</a>
                                            </div>
                                            <div class="card-body p-0">
                                                <ul class="list-group list-group-flush list-unstyled notifDropdownUL">
                                                    <!-- Notif item -->
                                                    <li>
                                                        <div class="list-group-item list-group-item-action rounded badge-unread d-flex border-0 mb-1 p-3">
                                                            <div class="avatar text-center d-none d-sm-inline-block">
                                                                <img class="avatar-img rounded-circle" src="../../assets/img/profile6.png" alt="">
                                                            </div>
                                                            <div class="ms-sm-3">
                                                                <div class=" d-flex">
                                                                    <p class="small mb-2"><b>Judy Nguyen</b> sent you a friend request.</p>
                                                                    <p class="small ms-3 text-nowrap text-end">Just now</p>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <button class="btn btn-sm py-1 btn-primary me-2">Accept </button>
                                                                    <button class="btn btn-sm py-1 btn-danger-soft">Delete </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Notif item -->
                                                    <li>
                                                        <div class="list-group-item list-group-item-action rounded badge-unread d-flex border-0 mb-1 p-3 position-relative">
                                                            <div class="avatar text-center d-none d-sm-inline-block">
                                                                <img class="avatar-img rounded-circle" src="../../assets/img/profile6.png" alt="">
                                                            </div>
                                                            <div class="ms-sm-3 d-flex">
                                                                <div>
                                                                    <p class="small mb-2">Wish <b>Amanda Reed</b> a happy birthday (Nov 12)</p>
                                                                    <button class="btn btn-sm btn-outline-success py-2 px-2 me-2">Say happy birthday 🎂</button>
                                                                </div>
                                                                <p class="small ms-3">2min</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- Notif item -->
                                                    <li>
                                                        <a href="#" class="list-group-item list-group-item-action rounded d-flex border-0 mb-1 p-3">
                                                            <div class="avatar text-center d-none d-sm-inline-block">
                                                                <div class="avatar-img rounded-circle bg-success"><span class="text-white position-absolute top-50 start-50 translate-middle fw-bold">WB</span></div>
                                                            </div>
                                                            <div class="ms-sm-3" style="margin: auto">
                                                                <div class="d-flex">
                                                                    <p class="small mb-2">Webestica has 15 like and 1 new activity</p>
                                                                    <p class="small ms-3">1hr</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <!-- Notif item -->
                                                    <li>
                                                        <a href="#" class="list-group-item list-group-item-action rounded d-flex border-0 p-3 mb-1">
                                                            <div class="avatar text-center d-none d-sm-inline-block">
                                                                <img class="avatar-img rounded-circle" src="../../assets/img/profile6.png" alt="">
                                                            </div>
                                                            <div class="ms-sm-3 d-flex">
                                                                <p class="small mb-2"><b>Bootstrap in the news:</b> The search giant’s parent company, Alphabet, just joined an exclusive club of tech stocks.</p>
                                                                <p class="small ms-3">4hr</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-footer text-center notifDropdownFooter">
                                                <a href="#" class="btn btn-sm btn-primary-soft">See all incoming activity</a>
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

                        <!-- header top search start -->
                        <!-- <div class="header-top-search">
                            <form class="top-search-box">
                                <input type="text" placeholder="Search" class="top-search-field">
                                <button class="top-search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </div> -->
                        <!-- header top search end -->

                        <!-- profile picture start -->
                        <div class="profile-setting-box">
                            <div class="profile-thumb-small">
                                <a href="#" class="profile-triger h-100 w-100" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <!-- <figure> -->
                                    <?php if (!empty($user_profile_pic)) { ?>
                                        <img class="avatar-img rounded-circle border border-primary border-2 p-1" src="<?= BASE_URL ?>assets/profile_pic/<?= $id . "/" . $user_profile_pic; ?>" alt="">
                                    <?php } else { ?>
                                        <img class="avatar-img rounded-circle border border-primary border-2 p-1" src="<?= BASE_URL ?>assets/profile_pic/profileDummy.png" alt="">
                                    <?php } ?>
                                    <!-- <img src="../../assets/img/profile6.png" alt="profile picture"> -->
                                    <!-- </figure> -->
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                                    <!-- Profile info -->
                                    <li class="px-3">
                                        <div>
                                            <h5><?php echo ($first_name . " " . $last_name); ?></h5>
                                            <small class="profileDropdownMail"><?php echo $user_email; ?></small>
                                        </div>

                                        <a class="dropdown-item btn btn-primary-soft btn-sm my-2 text-center" href="http://localhost/PHP_Assesments/Mingley/src/view/Profile.php">
                                            View profile
                                        </a>
                                    </li>

                                    <!-- Links -->
                                    <!-- <li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Settings &amp; Privacy</a></li>
                                    <li>
                                        <a class="dropdown-item" href="#" target="_blank">
                                            <i class="fa-fw bi bi-life-preserver me-2"></i>Support
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#" target="_blank">
                                            <i class="fa-fw bi bi-card-text me-2"></i>Documentation
                                        </a>
                                    </li> -->
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item bg-danger-soft-hover text-danger" href="SignOut.php">
                                            <!-- <i class="bi bi-power fa-fw me-2 text-danger"></i> -->
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