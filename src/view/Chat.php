<?php

session_start();

$title = "Chat with your Friends...";

require_once("Navbar.php");

require_once("../controller/getAllUserRecord.php");

?>

<main>
    <div class="main-wrapper pt-80">
        <div class="container">

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

            <div class="row g-4">

                <!-- Left Bar Starts -->
                <div class="col-lg-3">
                    <aside class="widget-area">

                        <!-- Card follow START -->
                        <div class="col-sm-6 col-lg-12">
                            <div class="card rounded-2">
                                <!-- Card header START -->
                                <div class="card-header p-0 border-0">
                                    <h5 class="card-title mb-0">Suggested accounts :</h5>
                                </div>
                                <!-- Card header END -->

                                <!-- Card body START -->
                                <div class="card_body">

                                    <?php foreach ($fetch_user_result as $send_friend_request) {

                                        // $post_id = $feed_post_data["post_id"];
                                        $unknown_user_id = $send_friend_request["id"];
                                        $unknown_user_name = $send_friend_request['first_name'] . " " . $send_friend_request['last_name'];
                                        $unknown_user_pic = $send_friend_request['user_profile_pic'];
                                        $unknown_user_bio = $send_friend_request['user_bio'];

                                        // var_dump($unknown_user_name);

                                    ?>

                                        <!-- Connection item START -->
                                        <div class="hstack gap-2 mb-3 mt-3">
                                            <!-- Avatar -->
                                            <div class="avatar">
                                                <a href="#">
                                                    <?php if (!empty($unknown_user_pic)) { ?>
                                                        <img class="avatar-img rounded-circle" src="<?= BASE_URL ?>assets/profile_pic/<?= $unknown_user_id . "/" . $unknown_user_pic; ?>" alt="">
                                                    <?php } else { ?>
                                                        <img class="avatar-img rounded-circle" src="<?= BASE_URL ?>assets/profile_pic/profileDummy.png" alt="">
                                                    <?php } ?>
                                                </a>
                                            </div>
                                            <!-- Title -->
                                            <div class="overflow-hidden">
                                                <a class="h6 mb-0" href="#"><?= $unknown_user_name; ?> </a>
                                                <p title="<?= $unknown_user_bio; ?>" class="mb-0 small text-truncate"><?= $unknown_user_bio; ?></p>
                                            </div>
                                            <!-- Button -->
                                            <a class="btn btn-primary-soft rounded-circle icon-md ms-auto rightNav_anchor" href="#"><i class="fa-solid fa-plus"> </i></a>
                                        </div>
                                        <!-- Connection item END -->

                                    <?php } ?>

                                    <!-- View more button -->
                                    <div class="card-footer d-grid mt-3">
                                        <a class="btn btn-sm btn-primary-soft" href="#!">View more</a>
                                    </div>
                                </div>
                                <!-- Card body END -->
                            </div>
                        </div>
                        <!-- Card follow START -->

                    </aside>
                </div>
                <!-- Left Bar Ends -->

                <!-- Mid Post Section Starts here -->
                <div class="col-md-8 col-lg-6 vstack gap-1">

                    <!-- chat box start -->
                    <div class="card card-body rounded-2">
                        <div class="d-flex mb-3">
                            <!-- Avatar -->
                            <div class="avatar avatar-xs me-2">
                                <?php if (!empty($user_profile_pic)) { ?>
                                    <img class="avatar-img rounded-circle" src="<?= BASE_URL ?>assets/profile_pic/<?= $id . "/" . $user_profile_pic; ?>" alt="">
                                <?php } else { ?>
                                    <img class="avatar-img rounded-circle" src="<?= BASE_URL ?>assets/profile_pic/profileDummy.png" alt="">
                                <?php } ?>
                            </div>


                            <div class="chatUser">
                                @username
                            </div>


                        </div>
                        <hr class="divider">

                        <div class="chatArea">

                        </div>

                        <div class="chatInputArea">
                            <div class="d-flex mb-3">
                                <!-- Avatar -->
                                <div class="avatar avatar-xs me-2">
                                    <a href="#!">
                                        <?php if (!empty($user_profile_pic)) { ?>
                                            <img class="avatar-img rounded-circle" src="<?= BASE_URL ?>assets/profile_pic/<?= $id . "/" . $user_profile_pic; ?>" alt="">
                                        <?php } else { ?>
                                            <img class="avatar-img rounded-circle" src="<?= BASE_URL ?>assets/profile_pic/profileDummy.png" alt="">
                                        <?php } ?>
                                    </a>
                                </div>
                                <!-- chat input box  -->
                                <form class="nav nav-item w-100 position-relative">
                                    <input type="text" name="" id="" class="form-control pe-5 bg-light" rows="1" placeholder="Message...">
                                    <button class="nav-link bg-transparent px-3 position-absolute top-50 end-0 translate-middle-y border-0" type="submit">
                                        <i class="fa-solid fa-paper-plane"></i>
                                    </button>
                                </form>
                            </div>
                        </div>


                    </div>
                    <!-- chat box end -->




                </div>
                <!-- Mid Post Section ends here -->



            </div>

        </div>
    </div>

</main>