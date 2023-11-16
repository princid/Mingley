<?php

session_start();

$title = "Profile Page";

require_once("Navbar.php");


require_once('../controller/countPost.php');
$total_posts = $count_post_result[0]['total_posts'];


require_once('../controller/countFollowersAndFollowings.php');
$total_followers = $followers_count['followers_count'];
$total_followings = $followings_count['followings_count'];


require_once("../controller/show_post_on_profile.php");


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

                <!-- Main content START -->
                <div class="col-lg-8 vstack">
                    <!-- My profile START -->
                    <div class="card rounded">
                        <!-- Cover image -->
                        <div class="rounded-top profile_banner_img">
                            <!-- Card body START -->

                            <!-- Profile Avatar -->
                            <div class=" position-relative" style="width: 10rem; height:10rem; margin: 20px;">
                                <?php if (!empty($user_profile_pic)) { ?>
                                    <img class="avatar-img rounded-circle border border-white border-3" src="<?= BASE_URL ?>assets/profile_pic/<?= $id . "/" . $user_profile_pic; ?>" alt="">
                                <?php } else { ?>
                                    <img class="avatar-img rounded-circle border border-white border-3" src="<?= BASE_URL ?>assets/profile_pic/profileDummy.png" alt="">
                                <?php } ?>

                                <!-- Update Profile Image -->
                                <button class="changeImage border border-white border-3" type="button" data-bs-toggle="modal" data-bs-target="#modalEditImage">
                                    <!-- <i class="fa-solid fa-camera" style="color: #ffffff;"></i> -->
                                    <i class="fa-solid fa-pencil" style="color: #ffffff;"></i>
                                </button>

                                <div class="modal fade" id="modalEditImage" tabindex="-1" aria-labelledby="modalImage" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalImage"><strong>Profile Picture</strong></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                            </div>

                                            <form action="<?= BASE_URL ?>src/controller/profile_pic_controller.php" method="post" id="" name="" enctype="multipart/form-data">

                                                <div class="modal-body w-75 m-auto" style="text-align:center">

                                                    <small>A picture helps people recognize you and lets you know when you’re signed in to your account</small>

                                                    <div class="" style="width: 10rem; height:10rem; margin: 20px auto;">
                                                        <?php if (!empty($user_profile_pic)) { ?>
                                                            <img class="avatar-img rounded-circle border border-white border-3" src="<?= BASE_URL ?>assets/profile_pic/<?= $id . "/" . $user_profile_pic; ?>" alt="">
                                                        <?php } else { ?>
                                                            <img class="avatar-img rounded-circle border border-white border-3" src="<?= BASE_URL ?>assets/profile_pic/profileDummy.png" alt="">
                                                        <?php } ?>
                                                    </div>

                                                    <div class="profilePicButtons d-flex" style="justify-content:space-between; align-items:center;">

                                                        <div class="changeButton">
                                                            <!-- <button class="btn btn-danger-soft me-2 " type="button">
                                                                <i class="fa-solid fa-pencil" style="color: #0555e1;"></i>
                                                                Change
                                                            </button> -->
                                                            <input type="file" name="profile_pic" id="profile_pic" accept=".jpg, .jpeg, .png, .gif">

                                                        </div>

                                                        <div class="removeButton">
                                                            <button class="btn btn-outline-danger pe-3 " type="button">
                                                                <i class="fa-solid fa-trash-can"></i>
                                                                Remove
                                                            </button>
                                                        </div>

                                                    </div>



                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary w-25 p-2" data-bs-dismiss="modal">Close</button>

                                                    <input class="btn w-25 btn-outline-success p-2" type="submit" name="edit_profile_pic" id="edit_profile_pic" value="SAVE CHANGES">
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>


                            </div>

                            <!-- Update Banner Image -->
                            <!-- <button class="btn btn-danger-soft me-2 bannerUpdate" type="button" data-bs-toggle="modal" data-bs-target="#modalEditBanner">
                                <i class="bi bi-pencil-fill pe-1"></i>
                                Edit Banner
                            </button> -->

                            <!-- Modal for banner updation -->
                            <div class="modal fade" id="modalEditBanner" tabindex="-1" aria-labelledby="editBanner" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editBanner"><strong>Update Banner</strong></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <form action="<?= BASE_URL ?>src/controller/update_profile_controller.php" method="post" id="update_form" name="update_form">
                                            <div class="modal-body">

                                                <input type="file" name="" id="">

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary p-2" data-bs-dismiss="modal">Close</button>
                                                <!-- <button type="button" class="btn btn-outline-success p-2">SAVE CHANGES</button> -->
                                                <input class="btn w-25 btn-outline-success p-2" type="submit" name="Submit" value="SAVE CHANGES">
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="mt-sm-4 d-flex" style="align-items: flex-start; justify-content:space-between; ">
                            <!-- Info -->
                            <div class="userInfo">
                                <h1 class="mb-0 h5"><?= $first_name . " " . $last_name ?> <i class="bi bi-patch-check-fill text-primary small"></i></h1>
                                <p><?= "@" . $user_name ?></p>
                            </div>

                            <div class="userDetails">
                                <div class="hstack gap-2 gap-xl-3 justify-content-start">
                                    <!-- User stat item -->
                                    <div style="text-align:center">
                                        <a href="">
                                            <?php if (!empty($total_posts)) { ?>
                                                <h6 class="mb-0"><?= $total_posts; ?></h6>
                                            <?php } else { ?>
                                                <h6 class="mb-0">0</h6>
                                            <?php } ?>
                                            <small>Posts</small>
                                        </a>
                                    </div>
                                    <!-- Divider -->
                                    <div class="vr"></div>
                                    <!-- User stat item -->
                                    <div style="text-align:center">
                                        <a href="">
                                            <?php if (!empty($total_followers)) { ?>
                                                <h6 class="mb-0"><?= $total_followers; ?></h6>
                                            <?php } else { ?>
                                                <h6 class="mb-0">0</h6>
                                            <?php } ?>
                                            <small>Followers</small>
                                        </a>
                                    </div>
                                    <!-- Divider -->
                                    <div class="vr"></div>
                                    <!-- User stat item -->
                                    <div style="text-align:center">
                                        <a href="">
                                            <?php if (!empty($total_followings)) { ?>
                                                <h6 class="mb-0"><?= $total_followings; ?></h6>
                                            <?php } else { ?>
                                                <h6 class="mb-0">0</h6>
                                            <?php } ?>
                                            <small>Followings</small>
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <!-- Button -->
                            <div class="d-flex justify-content-center">

                                <!-- Update Profile -->
                                <button class="btn btn-danger-soft me-2" type="button" data-bs-toggle="modal" data-bs-target="#modalEditProfile">
                                    <i class="bi bi-pencil-fill pe-1"></i>
                                    Edit profile
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="modalEditProfile" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel2"><strong>Edit Profile</strong></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="<?= BASE_URL ?>src/controller/update_profile_controller.php" method="post" id="update_form" name="update_form">
                                                <div class="modal-body">

                                                    <label for="">First Name</label>
                                                    <input type="text" value="<?= $first_name; ?>" id="firstname" name="firstname">
                                                    <div class="formError firstname"></div>

                                                    <label for="">Last Name</label>
                                                    <input type="text" value="<?= $last_name; ?>" id="lastname" name="lastname">
                                                    <div class="formError lastname"></div>

                                                    <label for="">Username</label>
                                                    <input type="text" value="<?= $user_name; ?>" id="username" name="username">
                                                    <div class="formError username"></div>

                                                    <label for="">Add Bio</label>
                                                    <input type="text" value="<?= $user_bio; ?>" id="user_bio" name="user_bio">
                                                    <div class="formError user_bio"></div>

                                                    <label for="">User Email</label>
                                                    <input type="text" value="<?= $user_email; ?>" id="email" name="email">
                                                    <div class="formError email"></div>

                                                    <!-- <input type="file" name="" id=""> -->
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn w-25 btn-outline-secondary p-2" data-bs-dismiss="modal">CLOSE</button>
                                                    <!-- <button type="button" class="btn btn-outline-success p-2">SAVE CHANGES</button> -->
                                                    <input class="btn w-25 btn-outline-success p-2" type="submit" name="Submit" value="SAVE CHANGES">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                                <div class="dropdown ms-sm-4">
                                    <!-- Card share action menu -->
                                    <button class="icon-md btn btn-light" type="button" id="profileAction2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots"></i>
                                    </button>
                                    <!-- Card share action dropdown menu -->
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileAction2">
                                        <li><a class="dropdown-item" href="#"> <i class="fa-solid fa-share pe-2"></i>Share profile in a message</a></li>
                                        <!-- <li><a class="dropdown-item" href="#"> <i class="bi bi-file-earmark-pdf fa-fw pe-2"></i>Save your profile to PDF</a></li> -->
                                        <li><a class="dropdown-item" href="#"> <i class="fa-solid fa-lock pe-2"></i>Lock profile</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#"> <i class="fa-solid fa-gear pe-2"></i>Profile settings</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>


                        <!-- Card body END -->
                        <!-- <div class="card-footer mt-3 pt-2 pb-0">
                            <ul class="nav nav-bottom-line align-items-center justify-content-center justify-content-md-start mb-0 border-0">
                                <li class="nav-item"> <a class="nav-link active" href="my-profile.html"> Posts <span class="badge bg-success bg-opacity-10 text-success small"> 256</span> </a> </li>
                                <li class="nav-item"> <a class="nav-link" href="my-profile-about.html"> About </a> </li>
                                <li class="nav-item"> <a class="nav-link" href="my-profile-connections.html"> Connections <span class="badge bg-success bg-opacity-10 text-success small"> 230</span> </a> </li>
                                <li class="nav-item"> <a class="nav-link" href="my-profile-media.html"> Media</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="my-profile-videos.html"> Videos</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="my-profile-events.html"> Events</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="my-profile-activity.html"> Activity</a> </li>
                            </ul>
                        </div> -->
                    </div>
                    <!-- My profile END -->

                    <!-- Share feed START -->

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


                            <!-- Post input -->
                            <!-- <form class="w-100"> -->
                            <input class="form-control pe-4 border-0" placeholder="Share your thoughts..." data-bs-toggle="modal" data-bs-target="#modalCreateFeed">

                            <!-- Modal -->
                            <div class="modal fade" id="modalCreateFeed" tabindex="-1" aria-labelledby="sharePost" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="sharePost"><strong>Create Post</strong></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="<?= BASE_URL ?>src/controller/create_post_controller.php" method="post" id="submit_post" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <textarea name="caption" id="caption" cols="10" rows="5" placeholder="Share your thoughts..."></textarea>
                                                <br>
                                                <br>

                                                <input type="file" name="files[]" id="upload_file" accept=".jpg, .jpeg, .png, .gif" multiple>
                                                <small class="text-primary">Allowed File Type - jpg, jpeg, png, gif</small>

                                                <br>

                                                <small class="text-danger" id="max_upload_error" style="">You can upload up to 10 images only.</small>

                                            </div>

                                            <div id="preview" class="p-3">
                                                <h3>Image Preview</h3>
                                                <div id="image_preview"></div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary p-2 w-25" data-bs-dismiss="modal">CLOSE</button>
                                                <input type="submit" name="upload_button" id="upload_btn" class="btn btn-outline-success p-2 w-25" value="POST">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- </form> -->


                        </div>
                        <!-- Share feed toolbar START -->
                        <ul class="nav nav-pills nav-stack small fw-normal">
                            <li class="nav-item">
                                <a class="nav-link bg-light py-1 px-2 mb-0" href="#!" data-bs-toggle="modal" data-bs-target="#feedActionPhoto"> <i class="bi bi-image-fill text-success pe-2"></i>Photo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bg-light py-1 px-2 mb-0" href="#!" data-bs-toggle="modal" data-bs-target="#feedActionVideo"> <i class="bi bi-camera-reels-fill text-info pe-2"></i>Video</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link bg-light py-1 px-2 mb-0" data-bs-toggle="modal" data-bs-target="#modalCreateEvents"> <i class="bi bi-calendar2-event-fill text-danger pe-2"></i>Event </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bg-light py-1 px-2 mb-0" href="#!" data-bs-toggle="modal" data-bs-target="#modalCreateFeed"> <i class="bi bi-emoji-smile-fill text-warning pe-2"></i>Feeling /Activity</a>
                            </li>
                            <li class="nav-item dropdown ms-lg-auto">
                                <a class="nav-link bg-light py-1 px-2 mb-0" href="#" id="feedActionShare" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <!-- Dropdown menu -->
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="feedActionShare">
                                    <li><a class="dropdown-item" href="#"> <i class="bi bi-envelope fa-fw pe-2"></i>Create a poll</a></li>
                                    <li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark-check fa-fw pe-2"></i>Ask a question </a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#"> <i class="bi bi-pencil-square fa-fw pe-2"></i>Help</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Share feed toolbar END -->
                    </div>
                    <!-- Share feed END -->

                    <!-- Card feed item START -->
                    <?php foreach ($profile_feed_result as $feed_post_data) {

                        $post_id = $feed_post_data["post_id"];
                        $post_user_id = $feed_post_data["user_id"];
                        $post_author = $feed_post_data['first_name'] . " " . $feed_post_data['last_name'];
                        $post_author_profile_pic = $feed_post_data['user_profile_pic'];
                        $post_caption = $feed_post_data['post_caption'];
                        $posted_at = $feed_post_data['posted_at'];
                        $all_post_images = explode(',', $feed_post_data['post_images']);

                        $carousel_id = 'carouselIndicators_' . $post_id;

                    ?>

                        <div class="card rounded-2">
                            <!-- Card header START -->
                            <div class="card-header border-0 pb-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <!-- Avatar -->
                                        <div class="avatar me-2">
                                            <?php if (!empty($post_author_profile_pic)) { ?>
                                                <img class="avatar-img rounded-circle border border-primary border-2 p-1" src="<?= BASE_URL ?>assets/profile_pic/<?= $id . "/" . $post_author_profile_pic; ?>" alt="">
                                            <?php } else { ?>
                                                <img class="avatar-img rounded-circle border border-primary border-2 p-1" src="<?= BASE_URL ?>assets/profile_pic/profileDummy.png" alt="">
                                            <?php } ?>
                                        </div>
                                        <!-- Info -->
                                        <div>
                                            <div class="nav nav-divider">
                                                <h6 class="nav-item card-title mb-0"> <a href="#!"> <?= $post_author; ?> </a></h6>
                                            </div>
                                            <span class="nav-item small"> <?= $posted_at; ?></span>
                                            <!-- <p class="mb-0 small">Web Developer at Mind2Web</p> -->
                                        </div>
                                    </div>
                                    <!-- Card feed action dropdown START -->
                                    <div class="dropdown">
                                        <a href="#" class="text-secondary btn btn-secondary-soft-hover py-1 px-2" id="cardFeedAction" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots"></i>
                                        </a>
                                        <!-- Card feed action dropdown menu -->
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardFeedAction" style="">
                                            <li><a class="dropdown-item" href="#"> <i class="fa-regular fa-bookmark pe-2"></i>Save post</a></li>
                                            <li><a class="dropdown-item" href="#"> <i class="fa-solid fa-pencil pe-2"></i>Edit Post </a></li>
                                            <!-- <li><a class="dropdown-item" href="#"> <i class="bi bi-x-circle fa-fw pe-2"></i>Hide post</a></li>
                                            <li><a class="dropdown-item" href="#"> <i class="bi bi-slash-circle fa-fw pe-2"></i>Block</a></li> -->
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item text-danger" href="#"> <i class="fa-regular fa-trash-can pe-2"></i>Delete post</a></li>
                                        </ul>
                                    </div>
                                    <!-- Card feed action dropdown END -->
                                </div>
                            </div>
                            <!-- Card header END -->

                            <!-- Card body START -->
                            <div class="card-body">
                                <!-- <p>I'm thrilled to share that I've completed a graduate certificate course in project management with the president's honor roll.</p> -->
                                <p><?= $post_caption; ?> </p>
                                <!-- Card img -->

                                <!-- Carousel -->
                                <?php if (count($all_post_images) > 1) { ?>
                                    <!-- Carousel for Post images -->
                                    <div id="<?= $carousel_id; ?>" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">

                                            <?php
                                            // Loop through all the post images
                                            foreach ($all_post_images as $index => $post_image) {
                                                $activeClass = ($index === 0) ? 'active' : '';
                                            ?>
                                                <button type="button" data-bs-target="#<?= $carousel_id; ?>" data-bs-slide-to="<?= $index; ?>" class="<?= $activeClass; ?>" aria-label="Slide <?= $index + 1; ?>"></button>
                                            <?php } ?>

                                        </div>

                                        <div class="carousel-inner">

                                            <?php
                                            // Loop through all the post images
                                            foreach ($all_post_images as $index => $post_image) {
                                                $activeClass = ($index === 0) ? 'active' : '';
                                            ?>
                                                <div class="carousel-item <?= $activeClass; ?>">
                                                    <img src="<?= BASE_URL ?>assets/posts/<?= $post_user_id . "/" . $post_image; ?>" class="d-block w-100" style="height:300px; object-fit:contain;" alt="Post Image">
                                                </div>
                                            <?php } ?>

                                        </div>

                                        <button class="carousel-control-prev" type="button" data-bs-target="#<?= $carousel_id; ?>" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#<?= $carousel_id; ?>" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                <?php } else { ?>
                                    <img src="<?= BASE_URL ?>assets/posts/<?= $post_user_id . "/" . $all_post_images[0]; ?>" class="d-block w-100" style="height:300px; object-fit:contain;" alt="Post Image">
                                <?php } ?>


                                <!-- Feed react START -->
                                <ul class="nav nav-stack py-3 mt-1">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#!" data-bs-container="body" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-custom-class="tooltip-text-start" data-bs-title="Frances Guerrero<br> Lori Stevens<br> Billy Vasquez<br> Judy Nguyen<br> Larry Lawson<br> Amanda Reed<br> Louis Crawford">
                                            <i class="fa-regular fa-heart"></i>
                                            Likes (56)
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#!">
                                            <i class="fa-regular fa-comment"></i>
                                            Comments (12)
                                        </a>
                                    </li>
                                    <!-- Card share action START -->
                                    <li class="nav-item dropdown ms-sm-auto">
                                        <a class="nav-link mb-0" href="#" id="cardShareAction" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-share-nodes"></i> Share (3)
                                        </a>
                                        <!-- Card share action dropdown menu -->
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction">
                                            <li><a class="dropdown-item" href="#"> <i class="bi bi-envelope fa-fw pe-2"></i>Send via Direct Message</a></li>
                                            <li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark-check fa-fw pe-2"></i>Bookmark </a></li>
                                            <li><a class="dropdown-item" href="#"> <i class="bi bi-link fa-fw pe-2"></i>Copy link to post</a></li>
                                            <li><a class="dropdown-item" href="#"> <i class="bi bi-share fa-fw pe-2"></i>Share post via …</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#"> <i class="bi bi-pencil-square fa-fw pe-2"></i>Share to News Feed</a></li>
                                        </ul>
                                    </li>
                                    <!-- Card share action END -->
                                </ul>
                                <!-- Feed react END -->

                                <!-- Add comment -->
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
                                    <!-- Comment box  -->
                                    <form class="nav nav-item w-100 position-relative">
                                        <textarea data-autoresize="" class="form-control pe-5 bg-light" rows="1" placeholder="Add a comment..."></textarea>
                                        <button class="nav-link bg-transparent px-3 position-absolute top-50 end-0 translate-middle-y border-0" type="submit">
                                            <i class="fa-solid fa-paper-plane"></i>
                                        </button>
                                    </form>
                                </div>
                                <!-- Comment wrap START -->
                                <ul class="comment-wrap list-unstyled">
                                    <!-- Comment item START -->
                                    <li class="comment-item">
                                        <div class="d-flex position-relative px-5 mt-4">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-xs">
                                                <a href="#!"><img class="avatar-img rounded-circle" src="../../assets/img/profile2.jpg" alt=""></a>
                                            </div>
                                            <div class="ms-2">
                                                <!-- Comment by -->
                                                <div class="bg-light rounded-start-top-0 rounded">
                                                    <div class="d-flex justify-content-between">
                                                        <h6 class="mb-1"> <a href="#!"> Frances Guerrero </a></h6>
                                                        <small class="ms-2">5hr</small>
                                                    </div>
                                                    <p class="small mb-0">Removed demands expense account in outward tedious do. Particular way thoroughly unaffected projection.</p>
                                                </div>
                                                <!-- Comment react -->
                                                <ul class="nav nav-divider py-2 small">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#!"> Like (3)</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#!"> Reply</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#!"> View 5 replies</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </li>

                                    <!-- Comment item END -->
                                </ul>
                            </div>

                            <!-- Card body END -->

                            <!-- Card footer START -->
                            <div class="card-footer border-0 pt-0">
                                <!-- Load more comments -->
                                <a href="#!" role="button" class="btn btn-link btn-link-loader btn-sm text-secondary d-flex align-items-center" data-bs-toggle="button" aria-pressed="true">
                                    <div class="spinner-dots me-2">
                                        <span class="spinner-dot"></span>
                                        <span class="spinner-dot"></span>
                                        <span class="spinner-dot"></span>
                                    </div>
                                    Load more comments
                                </a>
                            </div>
                            <!-- Card footer END -->
                        </div>

                    <?php } ?>
                    <!-- Card feed item END -->



                </div>
                <!-- Main content END -->

                <!-- Right sidebar START -->
                <div class="col-lg-4">

                    <div class="row g-4">

                        <!-- Card START -->
                        <div class="col-md-6 col-lg-12">
                            <div class="card rounded">
                                <div class="card-header border-0 pb-0">
                                    <h5 class="card-title">About</h5>
                                    <!-- Button modal -->
                                </div>
                                <!-- Card body START -->
                                <div class="card-body position-relative pt-0">
                                    <p><?= $user_bio; ?></p>
                                    <!-- Date time -->
                                    <ul class="list-unstyled mt-3 mb-0">
                                        <li class="mb-2"> <i class="bi bi-calendar-date fa-fw pe-1"></i> Born: <strong> October 20, 1990 </strong> </li>
                                        <!-- <li class="mb-2"> <i class="bi bi-heart fa-fw pe-1"></i> Status: <strong> Single </strong> </li> -->
                                        <li> <i class="bi bi-envelope fa-fw pe-1"></i> Email: <strong> <?= $user_email; ?> </strong> </li>
                                    </ul>
                                </div>
                                <!-- Card body END -->
                            </div>
                        </div>
                        <!-- Card END -->


                        <!-- Card START -->
                        <div class="col-md-6 col-lg-12">
                            <div class="card rounded">
                                <!-- Card header START -->
                                <div class="card-header d-sm-flex justify-content-between align-items-end border-0">
                                    <h5 class="card-title">Followers <span class="badge bg-danger bg-opacity-10 text-danger">230</span></h5>
                                    <a class="btn btn-primary-soft btn-sm" href="#!"> See all friends</a>
                                </div>
                                <!-- Card header END -->
                                <!-- Card body START -->
                                <div class="card-body position-relative">
                                    <div class="row g-3">

                                        <div class="col-6">
                                            <!-- Friends item START -->
                                            <div class="card text-center h-100 myFriend">
                                                <!-- Card body -->
                                                <div class="card-body p-2 pb-0">
                                                    <div class="avatar avatar-story avatar-xl">
                                                        <a href="#!"><img class="avatar-img rounded-circle" src="../../assets/img/profile6.jpg" alt=""></a>
                                                    </div>
                                                    <h6 class="card-title mb-1 mt-3"> <a href="#!"> Amanda Reed </a></h6>
                                                    <p class="mb-0 small lh-sm">16 mutual connections</p>
                                                </div>
                                                <!-- Card footer -->
                                                <div class="card-footer p-2 border-0 profile_friend">

                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Send message" data-bs-original-title="Send message">
                                                        <i class="bi bi-chat-left-text"></i>
                                                    </button>

                                                    <button class="btn btn-sm btn-danger remove_friend" data-bs-toggle=" tooltip" data-bs-placement="top" aria-label="Remove friend" data-bs-original-title="Remove friend">
                                                        <i class="fa-solid fa-user-xmark" style="color: #ffffff;"></i>
                                                    </button>

                                                </div>
                                            </div>
                                            <!-- Friends item END -->
                                        </div>

                                        <div class="col-6">
                                            <!-- Friends item START -->
                                            <div class="card text-center h-100">
                                                <!-- Card body -->
                                                <div class="card-body p-2 pb-0">
                                                    <div class="avatar avatar-xl">
                                                        <a href="#!"><img class="avatar-img rounded-circle" src="../../assets/img/profile6.jpg" alt=""></a>
                                                    </div>
                                                    <h6 class="card-title mb-1 mt-3"> <a href="#!"> Samuel Bishop </a></h6>
                                                    <p class="mb-0 small lh-sm">22 mutual connections</p>
                                                </div>
                                                <!-- Card footer -->
                                                <div class="card-footer p-2 border-0 profile_friend">

                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Send message" data-bs-original-title="Send message">
                                                        <i class="bi bi-chat-left-text"></i>
                                                    </button>

                                                    <button class="btn btn-sm btn-danger remove_friend" data-bs-toggle=" tooltip" data-bs-placement="top" aria-label="Remove friend" data-bs-original-title="Remove friend">
                                                        <i class="fa-solid fa-user-xmark" style="color: #ffffff;"></i>
                                                    </button>

                                                </div>
                                            </div>
                                            <!-- Friends item END -->
                                        </div>

                                        <div class="col-6">
                                            <!-- Friends item START -->
                                            <div class="card text-center h-100">
                                                <!-- Card body -->
                                                <div class="card-body p-2 pb-0">
                                                    <div class="avatar avatar-xl">
                                                        <a href="#!"><img class="avatar-img rounded-circle" src="../../assets/img/profile6.jpg" alt=""></a>
                                                    </div>
                                                    <h6 class="card-title mb-1 mt-3"> <a href="#"> Bryan Knight </a></h6>
                                                    <p class="mb-0 small lh-sm">1 mutual connection</p>
                                                </div>
                                                <!-- Card footer -->
                                                <div class="card-footer p-2 border-0 profile_friend">

                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Send message" data-bs-original-title="Send message">
                                                        <i class="bi bi-chat-left-text"></i>
                                                    </button>

                                                    <button class="btn btn-sm btn-danger remove_friend" data-bs-toggle=" tooltip" data-bs-placement="top" aria-label="Remove friend" data-bs-original-title="Remove friend">
                                                        <i class="fa-solid fa-user-xmark" style="color: #ffffff;"></i>
                                                    </button>

                                                </div>
                                            </div>
                                            <!-- Friends item END -->
                                        </div>

                                        <div class="col-6">
                                            <!-- Friends item START -->
                                            <div class="card text-center h-100">
                                                <!-- Card body -->
                                                <div class="card-body p-2 pb-0">
                                                    <div class="avatar avatar-xl">
                                                        <a href="#!"><img class="avatar-img rounded-circle" src="../../assets/img/profile6.jpg" alt=""></a>
                                                    </div>
                                                    <h6 class="card-title mb-1 mt-3"> <a href="#!"> Amanda Reed </a></h6>
                                                    <p class="mb-0 small lh-sm">15 mutual connections</p>
                                                </div>
                                                <!-- Card footer -->
                                                <div class="card-footer p-2 border-0 profile_friend">
                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Send message" data-bs-original-title="Send message">
                                                        <i class="bi bi-chat-left-text"></i>
                                                    </button>

                                                    <button class="btn btn-sm btn-danger remove_friend" data-bs-toggle=" tooltip" data-bs-placement="top" aria-label="Remove friend" data-bs-original-title="Remove friend">
                                                        <i class="fa-solid fa-user-xmark" style="color: #ffffff;"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- Friends item END -->
                                        </div>

                                    </div>
                                </div>
                                <!-- Card body END -->
                            </div>
                        </div>
                        <!-- Card END -->
                    </div>

                </div>
                <!-- Right sidebar END -->

            </div>
        </div>

    </div>

</main>

<!-- Scroll to top start -->
<div class="scroll-top visible">
    <i class="fa-solid fa-hand-point-up"></i>
</div>

<div class="chat_icon visible">
    <i class="fa-regular fa-message" style="color: #ffffff;"></i>
</div>
<!-- Scroll to Top End -->

<script src="<?= BASE_URL ?>assets/js/updateFormValidation.js"></script>


<script>
    const alertBox = document.querySelector(".alertBox");

    setTimeout(() => {
        alertBox.innerHTML = "";
    }, 3000);
</script>



<?php
require_once("../../includes/Footer.php");
?>