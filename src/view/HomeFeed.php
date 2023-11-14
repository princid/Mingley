<?php

session_start();

$title = "Home Page";

// require_once('../../includes/Header.php');

// require_once("../../config/constants.php");

// require("../controller/fetch_user_controller.php");

require_once("Navbar.php");

require_once("../controller/create_post_controller.php");

require_once("../controller/show_post_on_feed.php");

require_once("../controller/getAllUserRecord.php");

// require_once("../controller/like_controller.php");

// var_dump($feed_post_result);
// exit;

// Checking if Session is active or not
// if (empty($_SESSION['id'])) {
//     header("location: SignIn.php");
//     exit();
// }

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

                        <!-- widget single item start -->
                        <div class="card card-profile widget-item p-0 rounded-2">
                            <div class="profile-banner">
                                <figure class="profile-banner-small">
                                    <a href="profile.html">
                                        <img src="../../assets/img/banner2.png" class="rounded-2" alt="">
                                    </a>
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
                                        <h6 class="mb-0">256</h6>
                                        <small>Post</small>
                                    </div>
                                    <!-- Divider -->
                                    <div class="vr"></div>
                                    <!-- User stat item -->
                                    <div style="text-align:center">
                                        <h6 class="mb-0">2.5K</h6>
                                        <small>Followers</small>
                                    </div>
                                    <!-- Divider -->
                                    <div class="vr"></div>
                                    <!-- User stat item -->
                                    <div style="text-align:center">
                                        <h6 class="mb-0">365</h6>
                                        <small>Following</small>
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

                <!-- Mid Post Section Starts here -->
                <div class="col-md-8 col-lg-6 vstack gap-1">

                    <!-- share box start -->
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
                    <!-- share box end -->

                    <!-- post box start -->

                    <?php foreach ($feed_post_result as $feed_post_data) {

                        $post_id = $feed_post_data["post_id"];
                        $post_user_id = $feed_post_data["user_id"];
                        $post_author = $feed_post_data['first_name'] . " " . $feed_post_data['last_name'];
                        $post_author_profile_pic = $feed_post_data['user_profile_pic'];
                        $post_caption = $feed_post_data['post_caption'];
                        $posted_at = $feed_post_data['posted_at'];
                        $all_post_images = explode(',', $feed_post_data['post_images']);

                        $carousel_id = 'carouselIndicators_' . $post_id;

                        $friend_profileUrl = "FriendProfile.php?user_id=" . $post_user_id;

                        $like_status = $feed_post_data["like_status"];

                        // $count_like = $feed_post_data['likes_count'];

                        // $like_status = check_like_status($conn, $post_id, $_SESSION['id']); 
                        // var_dump($like_status);

                        // var_dump($post_author_profile_pic);

                    ?>

                        <div class="card rounded-2">
                            <!-- Card header START -->
                            <div class="card-header border-0 pb-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <!-- Avatar -->
                                        <div class="avatar me-2">
                                            <?php if ($post_user_id == $_SESSION['id']) { ?>
                                                <a href="Profile.php">
                                                    <?php if (!empty($post_author_profile_pic)) { ?>
                                                        <img class="avatar-img rounded-circle border border-primary border-2 p-1" src="<?= BASE_URL ?>assets/profile_pic/<?= $post_user_id . "/" . $post_author_profile_pic; ?>" alt="">
                                                    <?php } else { ?>
                                                        <img class="avatar-img rounded-circle border border-primary border-2 p-1" src="<?= BASE_URL ?>assets/profile_pic/profileDummy.png" alt="">
                                                    <?php } ?>
                                                </a>
                                            <?php } else { ?>
                                                <a href="<?= $friend_profileUrl; ?>">
                                                    <?php if (!empty($post_author_profile_pic)) { ?>
                                                        <img class="avatar-img rounded-circle border border-primary border-2 p-1" src="<?= BASE_URL ?>assets/profile_pic/<?= $post_user_id . "/" . $post_author_profile_pic; ?>" alt="">
                                                    <?php } else { ?>
                                                        <img class="avatar-img rounded-circle border border-primary border-2 p-1" src="<?= BASE_URL ?>assets/profile_pic/profileDummy.png" alt="">
                                                    <?php } ?>
                                                </a>
                                            <?php } ?>
                                        </div>
                                        <!-- Info -->
                                        <div>
                                            <div class="nav nav-divider">
                                                <?php if ($post_user_id == $_SESSION['id']) { ?>
                                                    <h6 class="nav-item card-title mb-0"> <a href="Profile.php"> <?= $post_author; ?> </a></h6>
                                                <?php } else { ?>
                                                    <h6 class="nav-item card-title mb-0"> <a href="<?= $friend_profileUrl; ?>"> <?= $post_author; ?> </a></h6>
                                                <?php } ?>
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

                                        <?php if ($post_user_id == $_SESSION['id']) { ?>

                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardFeedAction">
                                                <li><a class="dropdown-item" href="#"> <i class="fa-regular fa-bookmark pe-2"></i>Save post</a></li>
                                                <li><a class="dropdown-item" href="#"> <i class="fa-solid fa-pencil pe-2"></i>Edit Post </a></li>

                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item text-danger" href="#"> <i class="fa-regular fa-trash-can pe-2"></i>Delete post</a></li>
                                            </ul>
                                        <?php } else { ?>
                                            <!-- Card feed action dropdown menu -->
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardFeedAction">
                                                <li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark fa-fw pe-2"></i>Save post</a></li>
                                                <li><a class="dropdown-item" href="#"> <i class="bi bi-person-x fa-fw pe-2"></i>Unfollow <?= $post_author; ?> </a></li>
                                                <li><a class="dropdown-item" href="#"> <i class="bi bi-x-circle fa-fw pe-2"></i>Hide post</a></li>
                                                <li><a class="dropdown-item" href="#"> <i class="bi bi-slash-circle fa-fw pe-2"></i>Block</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#"> <i class="bi bi-flag fa-fw pe-2"></i>Report post</a></li>
                                            </ul>
                                        <?php } ?>

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

                                <!-- <img class="card-img" src="../../assets/img/post4.jpg" alt="Post"> -->

                                <!-- Feed react START -->
                                <ul class="nav nav-stack py-3 mt-1">

                                    <li class="nav-item">
                                        <a class="nav-link active likesAnchor" href="#" data-post-id="<?= $post_id ?>" data-like-status="<?= $like_status ?>">
                                            <i class="fa-<?= $like_status ? 'solid text-danger' : 'regular' ?> fa-heart postLike" data-post-id="<?= $post_id ?>"></i>
                                            Likes <span id="likes_count_<?= $post_id; ?>">(<?= $feed_post_data['likes_count'] ?>)</span>
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


                    <!-- post box end -->



                </div>
                <!-- Mid Post Section ends here -->

                <!-- Right Bar starts here -->
                <div class="col-lg-3">
                    <div class="row g-4">
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

                        <!-- Card News START -->
                        <div class="col-sm-6 col-lg-12">
                            <div class="card rounded-2">
                                <!-- Card header START -->
                                <div class="card-header pb-0 border-0">
                                    <h5 class="card-title mb-0">Today’s news</h5>
                                </div>
                                <!-- Card header END -->
                                <!-- Card body START -->
                                <div class="card-body">
                                    <!-- News item -->
                                    <div class="mb-3">
                                        <h6 class="mb-0"><a href="blog-details.html">Ten questions you should answer truthfully</a></h6>
                                        <small>2hr</small>
                                    </div>
                                    <!-- News item -->
                                    <div class="mb-3">
                                        <h6 class="mb-0"><a href="blog-details.html">Five unbelievable facts about money</a></h6>
                                        <small>3hr</small>
                                    </div>
                                    <!-- News item -->
                                    <div class="mb-3">
                                        <h6 class="mb-0"><a href="blog-details.html">Best Pinterest Boards for learning about business</a></h6>
                                        <small>4hr</small>
                                    </div>
                                    <!-- News item -->
                                    <div class="mb-3">
                                        <h6 class="mb-0"><a href="blog-details.html">Skills that you can learn from business</a></h6>
                                        <small>6hr</small>
                                    </div>
                                    <!-- Load more comments -->
                                    <a href="#!" role="button" class="btn btn-link btn-link-loader btn-sm text-secondary d-flex align-items-center active" data-bs-toggle="button" aria-pressed="true">
                                        <div class="spinner-dots me-2">
                                            <span class="spinner-dot"></span>
                                            <span class="spinner-dot"></span>
                                            <span class="spinner-dot"></span>
                                        </div>
                                        View all latest news
                                    </a>
                                </div>
                                <!-- Card body END -->
                            </div>
                        </div>
                        <!-- Card News END -->

                        <ul class="nav small mt-4 justify-content-center lh-1">
                            <li class="nav-item">
                                <a class="nav-link" href="my-profile-about.html">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="settings.html">Settings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" target="_blank" href="https://support.webestica.com/login">Support </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" target="_blank" href="docs/index.html">Docs </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="help.html">Help</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="privacy-and-terms.html">Privacy &amp; terms</a>
                            </li>
                        </ul>

                        <p class="small text-center mt-1">©2023 <a class="text-reset" target="_blank" href="#"> Mingley </a></p>
                    </div>
                </div>
                <!-- Right Bar ends here -->

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



<script>
    const alertBox = document.querySelector(".alertBox");

    setTimeout(() => {
        alertBox.innerHTML = "";
    }, 3000);
</script>


<script src="../../assets/js/postLike.js"></script>




<?php
require_once("../../includes/Footer.php");
?>