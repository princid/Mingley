<?php

session_start();

$title = "Profile Page";

require_once("../../includes/Header.php");

require_once("Navbar.php");


require_once("../../config/connectDB.php");

require_once('../controller/countPost.php');
$total_posts = $count_post_result['total_posts'];


require_once('../controller/countFollowersAndFollowings.php');
$total_followers = $followers_count['followers_count'];
$total_followings = $followings_count['followings_count'];


require_once("../controller/show_post_on_profile.php");

$curr_id = $_SESSION['id'];
// $curr_id = $_SESSION['id'];
$receiver = $_GET['user_id'];

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
            <div id="msg"></div>

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
                                                            <img id="preview-avatar" class="avatar-img rounded-circle border border-white border-3" src="<?= BASE_URL ?>assets/profile_pic/<?= $id . "/" . $user_profile_pic; ?>" alt="">
                                                        <?php } else { ?>
                                                            <img id="preview-avatar" class="avatar-img rounded-circle border border-white border-3" src="<?= BASE_URL ?>assets/profile_pic/profileDummy.png" alt="">
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
                                                            <button class="btn btn-outline-danger pe-3 removeBtn" data-user-id="<?= $curr_id ?>" type="button">
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
                            </div>


                            <!-- Button -->
                            <div class="d-flex justify-content-center">

                                <!-- Update Profile -->
                                <button class="btn btn-danger-soft me-2" type="button" data-bs-toggle="modal" data-bs-target="#modalEditProfile">
                                    <i class="bi bi-pencil-fill pe-1"></i>
                                    Edit profile
                                </button>

                                <!-- Modal for Profile Edit -->
                                <div class="modal fade" id="modalEditProfile" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel2"><strong>Edit Profile</strong></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="<?= BASE_URL ?>src/controller/update_profile_controller.php" method="post" id="update_form" name="update_form">
                                                <div class="modal-body">

                                                    <label for="firstname">First Name</label>
                                                    <input type="text" value="<?= $first_name; ?>" id="firstname" name="firstname">
                                                    <div class="formError firstname"></div>

                                                    <label for="lastname">Last Name</label>
                                                    <input type="text" value="<?= $last_name; ?>" id="lastname" name="lastname">
                                                    <div class="formError lastname"></div>

                                                    <label for="username">Username</label>
                                                    <input type="text" value="<?= $user_name; ?>" id="username" name="username">
                                                    <div class="formError username"></div>

                                                    <label for="user_bio">Add Bio</label>
                                                    <input type="text" value="<?= $user_bio; ?>" id="user_bio" name="user_bio">
                                                    <div class="formError user_bio"></div>

                                                    <label for="email">User Email</label>
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

                                                <small class="text-danger" id="max_upload_error">You can upload up to 10 images only.</small>

                                            </div>

                                            <div id="preview" class="p-3">
                                                <h3>Image Preview</h3>
                                                <div id="image_preview">

                                                </div>
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


                    <!-- Tabs navs -->
                    <ul class="nav nav-tabs nav-justified mb-3" id="ex1" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="ex3-tab-1" data-bs-toggle="tab" href="#ex3-tabs-1" role="tab" aria-controls="ex3-tabs-1" aria-selected="true"><strong>Posts</strong></a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="ex3-tab-2" data-bs-toggle="tab" href="#ex3-tabs-2" role="tab" aria-controls="ex3-tabs-2" aria-selected="false"><strong>Followers</strong></a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="ex3-tab-3" data-bs-toggle="tab" href="#ex3-tabs-3" role="tab" aria-controls="ex3-tabs-3" aria-selected="false"><strong>Followings</strong></a>
                        </li>
                    </ul>

                    <div class="tab-content" id="ex2-content">

                        <!-- Showing Posts Here -->
                        <div class="tab-pane fade show active" id="ex3-tabs-1" role="tabpanel" aria-labelledby="ex3-tab-1">
                            <!-- Card feed item START -->
                            <?php foreach ($profile_feed_result as $feed_post_data) {
                                // var_dump($feed_post_data);
                                $post_id = $feed_post_data["post_id"];
                                $post_user_id = $feed_post_data["user_id"];
                                $post_author = $feed_post_data['first_name'] . " " . $feed_post_data['last_name'];
                                $post_author_profile_pic = $feed_post_data['user_profile_pic'];
                                $post_caption = $feed_post_data['post_caption'];
                                $posted_at = $feed_post_data['posted_at'];
                                $all_post_images = explode(',', $feed_post_data['post_images']);

                                // var_dump($all_post_images);

                                $carousel_id = 'carouselIndicators_' . $post_id;
                                $friend_profileUrl = "FriendProfile.php?user_id=" . $post_user_id;

                                $like_status = $feed_post_data["like_status"];
                                // $count_like = $feed_post_data['likes_count'];

                                if ($feed_post_data["is_deleted"] != 1) {
                            ?>


                                    <div class="card rounded-2" id="post_card<?= $post_id ?>">
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

                                                <!-- Card feed action dropdown START for Edit Post and Delete Post -->
                                                <div class="dropdown">
                                                    <a href="#" class="text-secondary btn btn-secondary-soft-hover py-1 px-2" id="cardFeedAction" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots"></i>
                                                    </a>
                                                    <!-- Card feed action dropdown menu -->
                                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardFeedAction">
                                                        <li><a class="dropdown-item" href="#"> <i class="fa-regular fa-bookmark pe-2"></i>Save post</a></li>
                                                        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalEditPost<?= $post_id ?>"> <i class="fa-solid fa-pencil pe-2"></i>Edit Post </button></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                        <!-- Button to delete Post Modal -->
                                                        <li><button type="button" class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#modalDeletePost<?= $post_id ?>">
                                                                <i class="fa-regular fa-trash-can pe-2"></i>Delete post
                                                            </button></li>
                                                    </ul>

                                                    <!-- Modal to Edit Post -->
                                                    <div class="modal fade" id="modalEditPost<?= $post_id ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Post</h1>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>


                                                                <div class="modal-body">

                                                                    <input type="text" name="" id="caption<?= $post_id ?>" placeholder="" value="<?= $post_caption ?>">

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-outline-secondary p-2" data-bs-dismiss="modal">Close</button>
                                                                    <!-- <button type="button" class="btn btn-outline-success p-2">SAVE CHANGES</button> -->
                                                                    <input class="btn w-25 btn-outline-danger p-2 edit_btn" data-post-id="<?= $post_id ?>" id="" type="button" name="Submit" value="UPDATE POST">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Modal to delete Post -->
                                                    <div class="modal fade" id="modalDeletePost<?= $post_id ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete Post Confirmation!!!</h1>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>

                                                                <div class="modal-body">
                                                                    <p>Are You sure you want to Delete this Post ?</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-outline-secondary p-2" data-bs-dismiss="modal">Close</button>
                                                                    <!-- <button type="button" class="btn btn-outline-success p-2">SAVE CHANGES</button> -->
                                                                    <input class="btn w-25 btn-outline-danger p-2 delete_btn" type="button" id="" data-post-id="<?= $post_id ?>" value="DELETE POST">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- Card feed action dropdown END -->
                                            </div>
                                        </div>
                                        <!-- Card header END -->

                                        <!-- Card body START -->
                                        <div class="card-body">
                                            <!-- <p>I'm thrilled to share that I've completed a graduate certificate course in project management with the president's honor roll.</p> -->
                                            <p id="post_caption_<?= $post_id ?>"><?= $post_caption; ?> </p>
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
                                                    <a class="nav-link active likesAnchor" href="#" data-post-id="<?= $post_id ?>" data-like-status="<?= $like_status ?>">
                                                        <i class="fa-<?= $like_status ? 'solid text-danger' : 'regular' ?> fa-heart postLike" data-post-id="<?= $post_id ?>"></i>
                                                        Likes (<span id="likes_count_<?= $post_id; ?>"><?= $feed_post_data['likes_count'] ?></span>)
                                                        <!-- <span id="likes_count_<?= $post_id; ?>">(<?= $count_like ?>)</span> Likes -->
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
                                                    <?php if (!empty($user_profile_pic)) { ?>
                                                        <img class="avatar-img rounded-circle" src="<?= BASE_URL ?>assets/profile_pic/<?= $id . "/" . $user_profile_pic; ?>" alt="">
                                                    <?php } else { ?>
                                                        <img class="avatar-img rounded-circle" src="<?= BASE_URL ?>assets/profile_pic/profileDummy.png" alt="">
                                                    <?php } ?>
                                                </div>

                                                <!-- Comment box  -->
                                                <form class="nav nav-item w-100 position-relative" method="post" id="commentBox" data-post-id="<?= $post_id; ?>">
                                                    <textarea data-autoresize="" class="form-control pe-5 bg-light" rows="2" placeholder="Add a comment..."></textarea>
                                                    <button class="commentBtn nav-link bg-transparent px-3 position-absolute top-50 end-0 translate-middle-y border-0" type="submit">
                                                        <i class="fa-solid fa-paper-plane"></i>
                                                    </button>
                                                </form>

                                            </div>

                                            <!-- Comment wrap START -->
                                            <ul class="comment-wrap list-unstyled">
                                                <!-- Comment item START -->
                                                <li class="comment-item">
                                                    <div class="d-flex position-relative px-5 mt-4 flex-column individual_comment<?= $post_id; ?>">
                                                        <?php
                                                        $get_comment_query = "SELECT * FROM comment_table LEFT JOIN users_table ON comment_table.comment_owner = users_table.id WHERE comment_table.post_id = '$post_id' ";

                                                        $get_comment_query_run = mysqli_query($conn, $get_comment_query);

                                                        while ($get_comment_data = mysqli_fetch_assoc($get_comment_query_run)) {
                                                            // var_dump($get_comment_data);
                                                            $comment_owner_id          = $get_comment_data['comment_owner'];
                                                            $comment_owner_profile_pic = $get_comment_data['user_profile_pic'];
                                                            $comment_owner_name        = $get_comment_data['first_name'] . " " . $get_comment_data['last_name'];
                                                            $comment_owner_username    = $get_comment_data['user_name'];
                                                            $comment_text              = $get_comment_data['comment_text'];
                                                            $comment_time              = $get_comment_data['comment_date'];

                                                        ?>

                                                            <div class="ms-2 ">
                                                                <!-- Comment by -->
                                                                <div class="bg-light rounded-start-top-0 rounded users_comment">
                                                                    <div class="d-flex mb-3">
                                                                        <div class="avatar avatar-xs">
                                                                            <?php if (!empty($comment_owner_profile_pic)) { ?>
                                                                                <img class="avatar-img rounded-circle" src="<?= BASE_URL ?>assets/profile_pic/<?= $comment_owner_id . "/" . $comment_owner_profile_pic; ?>" alt="">
                                                                            <?php } else { ?>
                                                                                <img class="avatar-img rounded-circle" src="<?= BASE_URL ?>assets/profile_pic/profileDummy.png" alt="">
                                                                            <?php } ?>
                                                                        </div>
                                                                        <div class="d-block">
                                                                            <div class="d-flex" style="margin: 0 10px">
                                                                                <h6 class="mb-1"> <a href=""> <?= $comment_owner_username; ?> </a></h6>
                                                                                <small class="ms-2 text-secondary"><?= $comment_time; ?></small>
                                                                            </div>
                                                                            <p class="small mb-0" style="margin: 0 10px; text-align: justify; line-height: 1.4;"><?= $comment_text; ?></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
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

                            <?php } ?>
                            <!-- Card feed item END -->
                        </div>

                        <!-- Showing Follower's Data -->
                        <div class="tab-pane fade" id="ex3-tabs-2" role="tabpanel" aria-labelledby="ex3-tab-2">

                            <div class="table-responsive">
                                <table id="follower_table_id" class="table table-hover table-nowrap display">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Full Name</th>
                                            <!-- <th scope="col" class="text-end">Username</th> -->
                                            <th scope="col" class="text-center">Send Message</th>
                                            <th scope="col" class="text-end">View Profile</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tabular_card">
                                        <?php

                                        $follower_query  = "SELECT *
                                                                FROM follows_table INNER JOIN users_table ON follows_table.follower_id = users_table.id
                                                                WHERE user_id = $curr_id AND follow_status = '1'";

                                        $follower_query_result = mysqli_query($conn, $follower_query);

                                        if ($follower_query_result)

                                            foreach ($follower_query_result as $follower_data) {

                                                $user_id          = $follower_data["id"];
                                                $user_fullname    = $follower_data["first_name"] . " " . $follower_data["last_name"];
                                                $user_shortname   = $follower_data["user_name"];
                                                $user_profile_pic = $follower_data["user_profile_pic"];

                                                $follower_profileUrl = "FriendProfile.php?user_id=" . $user_id;

                                                $follower_chatUrl = "Chat.php?user_id=" . $user_id;

                                        ?>

                                            <tr data-user-id="<?php echo $user_id; ?>">
                                                <td>
                                                    <?php if (!empty($user_profile_pic)) { ?>
                                                        <img title="<?php echo $user_shortname; ?>" src="<?php echo BASE_URL ?>assets/profile_pic/<?php echo $user_id . "/" . $user_profile_pic; ?>" alt="" class="avatar avatar-sm rounded-circle me-2">

                                                    <?php } else { ?>
                                                        <img title="<?php echo $user_shortname; ?>" src="<?php echo BASE_URL ?>assets/profile_pic/profileDummy.png" class="avatar avatar-sm rounded-circle me-2">
                                                    <?php } ?>

                                                    <?php if ($user_id != $curr_id) { ?>
                                                        <a class="text-heading font-semibold text-truncate" href="<?= $follower_profileUrl; ?>">
                                                            <?php echo strtoupper($user_fullname) . " (" . $user_shortname . ")"; ?>
                                                        </a>
                                                    <?php } else { ?>
                                                        <a class="text-heading font-semibold text-truncate" href="Profile.php">
                                                            <?php echo strtoupper($user_fullname) . " (" . $user_shortname . ")"; ?>
                                                        </a>
                                                    <?php } ?>
                                                </td>

                                                <!-- <td class="text-end"> -->
                                                <?php //echo ($user_shortname); 
                                                ?>
                                                <!-- </td> -->

                                                <td class="text-center">
                                                    <?php if ($user_id != $curr_id) { ?>
                                                        <a href="Chat.php?sender=<?php echo $curr_id; ?>&receiver=<?php echo $user_id; ?>"><button type="button" class="btn btn-outline-success"><i class="fa-regular fa-message"></i></button></a>
                                                    <?php } ?>
                                                </td>

                                                <td class="text-end">
                                                    <?php if ($user_id != $curr_id) { ?>
                                                        <a href="<?= $follower_profileUrl; ?>"><button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-eye"></i></button></a>
                                                    <?php } else { ?>
                                                        <a href="Profile.php"><button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-eye"></i></button></a>
                                                    <?php } ?>
                                                </td>

                                            </tr>


                                        <?php } ?>



                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <!-- Showing Following's Data -->
                        <div class="tab-pane fade" id="ex3-tabs-3" role="tabpanel" aria-labelledby="ex3-tab-3">

                            <div class="table-responsive">
                                <table id="following_table_id" class="table table-hover table-nowrap display">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Full Name</th>
                                            <!-- <th scope="col">Username</th> -->
                                            <th scope="col" class="text-center">Send Message</th>
                                            <th scope="col" class="text-end">View Profile</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tabular_card">
                                        <?php

                                        $following_query  = "SELECT *
                                                                FROM follows_table INNER JOIN users_table ON follows_table.user_id = users_table.id
                                                                WHERE follower_id = $curr_id AND follow_status = '1'";

                                        $following_query_result = mysqli_query($conn, $following_query);

                                        if ($following_query_result)

                                            foreach ($following_query_result as $following_data) {

                                                $user_id          = $following_data["id"];
                                                $user_fullname    = $following_data["first_name"] . " " . $following_data["last_name"];
                                                $user_shortname   = $following_data["user_name"];
                                                $user_profile_pic = $following_data["user_profile_pic"];

                                                $following_profileUrl = "FriendProfile.php?user_id=" . $user_id;

                                                $following_chatUrl = "Chat.php?user_id=" . $user_id;

                                        ?>

                                            <tr data-user-id="<?php echo $user_id; ?>">
                                                <td>
                                                    <?php if (!empty($user_profile_pic)) { ?>
                                                        <img title="<?php echo $user_shortname; ?>" src="<?php echo BASE_URL ?>assets/profile_pic/<?php echo $user_id . "/" . $user_profile_pic; ?>" alt="" class="avatar avatar-sm rounded-circle me-2">

                                                    <?php } else { ?>
                                                        <img title="<?php echo $user_shortname; ?>" src="<?php echo BASE_URL ?>assets/profile_pic/profileDummy.png" class="avatar avatar-sm rounded-circle me-2">
                                                    <?php } ?>

                                                    <?php if ($user_id != $curr_id) { ?>
                                                        <a class="text-heading font-semibold text-truncate" href="<?= $following_profileUrl; ?>">
                                                            <?php echo strtoupper($user_fullname) . " (" . $user_shortname . ")"; ?>
                                                        </a>
                                                    <?php } else { ?>
                                                        <a class="text-heading font-semibold text-truncate" href="Profile.php">
                                                            <?php echo strtoupper($user_fullname) . " (" . $user_shortname . ")"; ?>
                                                        </a>
                                                    <?php } ?>
                                                </td>



                                                <td class="text-center">
                                                    <?php if ($user_id != $curr_id) { ?>
                                                        <a href="Chat.php?sender=<?php echo $curr_id; ?>&receiver=<?php echo $user_id; ?>"><button type="button" class="btn btn-outline-success"><i class="fa-regular fa-message"></i></button></a>
                                                    <?php } ?>
                                                </td>

                                                <td class="text-end">
                                                    <?php if ($user_id != $curr_id) { ?>
                                                        <a href="<?= $following_profileUrl; ?>"><button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-eye"></i></button></a>
                                                    <?php } else { ?>
                                                        <a href="Profile.php"><button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-eye"></i></button></a>
                                                    <?php } ?>
                                                </td>

                                            </tr>


                                        <?php } ?>



                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                    <!-- Tabs content -->

                </div>
                <!-- Main content END -->

                <?php
                require("../../includes/ProfileRightBar.php");
                ?>


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

<script src="../../assets/js/jquery.js"></script>

<script src="<?= BASE_URL ?>assets/js/updateFormValidation.js"></script>
<script src="../../assets/js/postLike.js"></script>
<script src="../../assets/js/postCRUD.js"></script>


<script src="../../assets/js/alertMessage.js"></script>

<!-- cdn links for jquery table -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        const follower_table = $('#follower_table_id').DataTable({
            "paging": true,
            "pageLength": 2,
            "order": [1, 'asc'],
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

        const following_table = $('#following_table_id').DataTable({
            "paging": true,
            "pageLength": 2,
            "order": [1, 'asc'],
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

        // Post preview
        const postInputBtn = document.getElementById("upload_file");

        postInputBtn.addEventListener("change", function(el) {
            $("#image_preview").empty();

            const postPreview = document.querySelector("#image_preview");
            const totalFiles = postInputBtn["files"].length;
            if (totalFiles > 0) {
                $("#preview").show();

                $("#image_preview").append(`
  <div id="carouselExampleIndicators" class="carousel carousel-dark slide">
    <div class="carousel-indicators">
    ${(() => {
        let indicators = '';
        for (let i = 0; i < totalFiles; i++) {
          indicators += `
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="${i}" ${i === 0 ? 'class="active" aria-current="true"' : ''} aria-label="Slide ${i + 1}"></button>
          `;
        }
        return indicators;
      })()}

    </div>
    <div class="carousel-inner">
      ${(() => {
        let carouselItems = '';

        for (let i = 0; i < totalFiles; i++) {

          carouselItems += `
            <div class="carousel-item preview-post ${i === 0 ? 'active' : ''}">
              <img src="${URL.createObjectURL(postInputBtn.files[i])}" class="d-block h-100 object-fit-contain w-100" alt="...">
            </div>
          `;
        }

        return carouselItems;
      })()}
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
`);
            }
        });

        // Reset form
        var modalCloseButton = $('[data-bs-dismiss="modal"]');

        modalCloseButton.on('click', function() {
            $("#image_preview").empty();
            $("#preview").hide();
            $("#submit_post")[0].reset();

        });

        // Profile image preview
        const fileInput = document.getElementById("profile_pic");
        fileInput.addEventListener("change", function(el) {
            const profileImage = document.querySelector("#preview-avatar");
            console.log(profileImage);
            if (fileInput["files"].length > 0) {
                profileImage.src = URL.createObjectURL(fileInput.files[0]);
            }
        });


        $(".removeBtn").on('click', function(e) {
            const userId = e.target.dataset["userId"];
            $.ajax({
                url: "../../src/controller/crud_profile_controller.php",
                method: "POST",
                data: {
                    callHandler: "deleteProfileImage",
                    dataset: {
                        user_id: userId,
                    },
                },
                dataType: "json",
                success: function(data) {
                    $(".avatar-img").attr("src", "<?= BASE_URL ?>assets/profile_pic/profileDummy.png");
                    $(".btn-close").click();

                    if (data["status"] == 200) {
                        $("#msg").html(
                            `<div class="alertBox"><div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong class="">${data["message"]}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div></div>`
                        );
                    } else {
                        $("#msg").html(
                            `<div class="alertBox"><div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong class="">${data["message"]}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div></div>`
                        );
                    }

                    setTimeout(() => {
                        $("#msg").html("");
                    }, 5000);
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error:", status, error);
                },
            });
        })
    });
</script>

<script src="../../assets/js/postComment.js"></script>

<?php
require_once("../../includes/Footer.php");
?>