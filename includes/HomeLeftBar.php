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
                        <a class="nav-link" href="">
                            <i class="fa-solid fa-rotate-right pe-2"></i>
                            <span> Refresh Feed </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="SearchPage.php">
                            <i class="fa-solid fa-magnifying-glass pe-2"></i>
                            <span> Search Minglers </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="Profile.php">
                            <i class="fa-regular fa-user pe-2"></i>
                            <span> View your Profile </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="Chat.php">
                            <i class="fa-regular fa-message pe-2"></i>
                            <span> Chat with Minglers </span>
                        </a>
                    </li>

                    <?php if ($_SESSION['id'] && $current_user_data['user_role_status'] == 1) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../../admin/Dashboard.php">
                            <i class="fa-solid fa-chart-pie pe-2"></i>
                            <span> Admin Dashboard </span>
                        </a>
                    </li>
                    <?php } ?>
                </ul>

            </div>
            <div class="card-footer py-2 mt-2">
                <small>Hey <strong><?= $first_name; ?></strong>! Have fun on <strong class="brand_name">Mingley</strong>...</small>
            </div>

        </div>

    </aside>
</div>
<!-- Left Bar Ends -->