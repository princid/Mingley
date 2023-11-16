<?php

session_start();

$title = "Friend Profile";

require_once("Navbar.php");

require_once('../controller/countPost.php');
$total_posts = $count_post_result['total_posts'];


require_once('../controller/countFollowersAndFollowings.php');
$total_followers = $followers_count['followers_count'];
$total_followings = $followings_count['followings_count'];

require_once("../controller/show_post_on_profile.php");

require_once("../controller/showFollowersAndFollowings.php");
var_dump($followers_display);
var_dump($followings_display);

require_once("../controller/getAllUserRecord.php");

$current_user_fullname    = $current_user_data["first_name"] . " " . $current_user_data["last_name"];
$current_username         = $current_user_data["user_name"];
$current_user_profile_pic = $current_user_data["user_profile_pic"];
$current_user_email       = $current_user_data["user_email"];
$current_user_bio         = $current_user_data["user_bio"];


$curr_id = $_SESSION['id'];
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

            <div class="row g-4">

                <!-- Main content START -->
                <div class="col-lg-8 vstack">
                    <!-- My profile START -->
                    <div class="card rounded">

                        <!-- Cover image -->
                        <div class="rounded-top profile_banner_img">
                            <!-- Card body START -->

                            <!-- Profile Avatar -->
                            <div class="position-absolute" style="width: 12rem; height: 12rem; margin: 20px; top:20%; left:40%;">
                                <!-- <img class="avatar-img rounded-circle border border-white border-3" src="../../assets/img/profile6.png" alt=""> -->
                                <?php if (!empty($current_user_profile_pic)) { ?>
                                    <img class="avatar-img rounded-circle border border-white border-3" src="<?= BASE_URL ?>assets/profile_pic/<?= $id . "/" . $current_user_profile_pic; ?>" alt="">
                                <?php } else { ?>
                                    <img class="avatar-img rounded-circle border border-white border-3" src="<?= BASE_URL ?>assets/profile_pic/profileDummy.png" alt="">
                                <?php } ?>
                            </div>

                        </div>

                        <div class="mt-sm-4 d-flex" style="align-items: flex-start; justify-content:space-between; ">
                            <!-- Info -->
                            <div class="userInfo">
                                <h1 class="mb-0 h5"><?= $current_user_fullname; ?> <i class="bi bi-patch-check-fill text-primary small"></i></h1>
                                <p><?= "@" . $current_username ?></p>
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

                        </div>

                        <!-- Card body END -->
                        <div class="card-footer mt-3 pt-2 pb-0 d-flex justify-content-center">
                            <button class="btn btn-outline-primary me-3" style="padding: 10px 50px;"><i class=" fa-solid fa-user-plus pe-3"></i> <strong>Follow</strong></button>
                            <a href="Chat.php?sender=<?php echo $curr_id; ?>&receiver=<?php echo $receiver; ?>"><button class="btn btn-outline-success" style="padding: 10px 50px;"><i class=" fa-regular fa-message pe-3"></i> <strong>Message</strong></button></a>
                        </div>

                    </div>
                    <!-- My profile END -->

                    <div class="card card-body rounded-2">
                        <!-- <div class="card rounded"> -->
                        <div class="card-header border-0 pb-0">
                            <h5 class="card-title">About</h5>
                            <!-- Button modal -->
                        </div>
                        <!-- Card body START -->
                        <div class="card-body position-relative pt-0">
                            <p><strong>Bio : </strong> <?= $current_user_bio; ?></p>
                            <!-- Date time -->
                            <ul class="list-unstyled mt-3 mb-0">
                                <li class="mb-2"> <i class="bi bi-calendar-date fa-fw pe-1"></i> Born: <strong> October 20, 1990 </strong> </li>
                                <!-- <li class="mb-2"> <i class="bi bi-heart fa-fw pe-1"></i> Status: <strong> Single </strong> </li> -->
                                <li> <i class="bi bi-envelope fa-fw pe-1"></i> Email: <strong> <?= $current_user_email; ?> </strong> </li>
                            </ul>
                        </div>
                        <!-- Card body END -->
                        <!-- </div> -->
                    </div>

                    <!-- <h3>Posts</h3> -->

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

                    <!-- Tabs navs -->

                    <!-- Tabs content -->
                    <div class="tab-content" id="ex2-content">

                        <!-- Showing Posts Here -->
                        <div class="tab-pane fade show active" id="ex3-tabs-1" role="tabpanel" aria-labelledby="ex3-tab-1">
                            <?php foreach ($profile_feed_result as $feed_post_data) {

                                $post_id = $feed_post_data["post_id"];
                                $post_user_id = $feed_post_data["user_id"];
                                $post_author = $feed_post_data['first_name'] . " " . $feed_post_data['last_name'];
                                $post_author_username = $feed_post_data['user_name'];
                                $post_author_bio = $feed_post_data['user_bio'];
                                $post_author_email = $feed_post_data['user_email'];
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
                                                    <a href="#">
                                                        <?php if (!empty($post_author_profile_pic)) { ?>
                                                            <img class="avatar-img rounded-circle border border-primary border-2 p-1" src="<?= BASE_URL ?>assets/profile_pic/<?= $post_user_id . "/" . $post_author_profile_pic; ?>" alt="">
                                                        <?php } else { ?>
                                                            <img class="avatar-img rounded-circle border border-primary border-2 p-1" src="<?= BASE_URL ?>assets/profile_pic/profileDummy.png" alt="">
                                                        <?php } ?>
                                                    </a>
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
                                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-person-x fa-fw pe-2"></i>Unfollow lori ferguson </a></li>
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
                                                <a href="#!"> <img class="avatar-img rounded-circle" src="../../assets/img/profile2.jpg" alt=""> </a>
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
                                <!-- Card feed item END -->



                            <?php } ?>
                        </div>

                        <!-- Showing Followers Here -->
                        <div class="tab-pane fade" id="ex3-tabs-2" role="tabpanel" aria-labelledby="ex3-tab-2">
                            Tab 2 content
                        </div>

                        <!-- Showing Followings Here -->
                        <div class="tab-pane fade" id="ex3-tabs-3" role="tabpanel" aria-labelledby="ex3-tab-3">
                            Tab 3 content
                        </div>
                    </div>
                    <!-- Tabs content -->


                </div>
                <!-- Main content END -->

                <?php //} 
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