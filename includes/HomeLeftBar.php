<!-- Left Bar Starts -->
<div class="col-lg-3">
    <aside class="widget-area">

        <!-- widget single item start -->
        <div class="card card-profile widget-item p-0 rounded-2">
            <div class="profile-banner">
                <figure class="profile-banner-small">
                    <img src="../../assets/img/banner2.png" class="rounded-2" alt="">
                    <a href="Profile.php" class="profile-thumb-2">
                        <?php if (!empty($user_profile_pic)) { ?>
                            <img class="avatar-img rounded-circle" src="<?= BASE_URL ?>assets/profile_pic/<?= $id . "/" . $user_profile_pic; ?>" alt="">
                        <?php } else { ?>
                            <img class="avatar-img rounded-circle" src="<?= BASE_URL ?>assets/profile_pic/profileDummy.png" alt="">
                        <?php } ?>
                    </a>
                </figure>
                <div class="profile-desc text-center">
                    <h5 class="mb-0"> <?php echo ($first_name . " " . $last_name); ?> </h5>
                    <small>@<?= $user_name; ?></small>
                    <p class="mt-2"><?= $user_bio; ?></p>
                </div>

                <div class="hstack gap-2 gap-xl-3 justify-content-center">
                    <!-- User stat item -->
                    <div style="text-align:center">
                        <?php if (!empty($total_posts)) { ?>
                            <h6 class="mb-0"><?= $total_posts; ?></h6>
                        <?php } else { ?>
                            <h6 class="mb-0">0</h6>
                        <?php } ?>
                        <small>Posts</small>
                    </div>
                    <!-- Divider -->
                    <div class="vr"></div>
                    <!-- User stat item -->
                    <div style="text-align:center">
                        <?php if (!empty($total_followers)) { ?>
                            <h6 class="mb-0"><?= $total_followers; ?></h6>
                        <?php } else { ?>
                            <h6 class="mb-0">0</h6>
                        <?php } ?>
                        <small>Followers</small>
                    </div>
                    <!-- Divider -->
                    <div class="vr"></div>
                    <!-- User stat item -->
                    <div style="text-align:center">
                        <?php if (!empty($total_followings)) { ?>
                            <h6 class="mb-0"><?= $total_followings; ?></h6>
                        <?php } else { ?>
                            <h6 class="mb-0">0</h6>
                        <?php } ?>
                        <small>Followings</small>
                    </div>
                </div>

                <hr>

                <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa-solid fa-house pe-2"></i>
                            <span> Feed </span>
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                                        <a class="nav-link" href="my-profile-connections.html"> <img class="me-2 h-20px fa-fw" src="assets/images/icon/person-outline-filled.svg" alt=""><span>Connections </span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="blog.html"> <img class="me-2 h-20px fa-fw" src="assets/images/icon/earth-outline-filled.svg" alt=""><span>Latest News </span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="events.html"> <img class="me-2 h-20px fa-fw" src="assets/images/icon/calendar-outline-filled.svg" alt=""><span>Events </span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="groups.html"> <img class="me-2 h-20px fa-fw" src="assets/images/icon/chat-outline-filled.svg" alt=""><span>Groups </span></a>
                                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa-solid fa-bell pe-2"></i>
                            <span>Notifications </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="fa-solid fa-gear pe-2"></i>
                            <span>Settings </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-footer text-center py-2">
                <a class="btn btn-link btn-sm" href="Profile.php">View Profile </a>
            </div>

        </div>

    </aside>
</div>
<!-- Left Bar Ends -->