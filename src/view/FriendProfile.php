<?php

session_start();

$title = "Friend Profile";

require_once("../../includes/Header.php");

require_once("Navbar.php");

require_once("../../config/connectDB.php");

require_once('../controller/countPost.php');
$total_posts = $count_post_result['total_posts'];


require_once('../controller/countFollowersAndFollowings.php');
$total_followers = $followers_count['followers_count'];
$total_followings = $followings_count['followings_count'];

require_once("../controller/show_post_on_profile.php");

// require_once("../controller/showFollowersAndFollowings.php");
// var_dump($followers_display);
// var_dump($followings_display);

require_once("../controller/getAllUserRecord.php");
$logged_in_user_pic = $fetch_user_result[0]["user_profile_pic"];

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

                        </div>

                        <!-- Card body END -->
                        <div class="card-footer mt-3 pt-2 pb-0 d-flex justify-content-center">
                            <?php
                            // Check if the user is already being followed
                            $query = "SELECT * FROM follows_table WHERE user_id = $receiver AND follower_id = $curr_id";
                            $result = mysqli_query($conn, $query);

                            $follow_data = mysqli_fetch_assoc($result);

                            if (mysqli_num_rows($result) > 0 && $follow_data['follow_status'] == 1) {
                            ?>
                                <button data-user-id="<?= $receiver; ?>" class="follow_btn btn btn-outline-secondary me-3" style="padding: 10px 50px;"><i class="fa-solid fa-user-check pe-3"></i> <strong>Following</strong></button>
                            <?php } else { ?>
                                <button data-user-id="<?= $receiver; ?>" class="follow_btn btn btn-outline-primary me-3" style="padding: 10px 50px;"><i class="fa-solid fa-user-plus pe-3"></i> <strong>Follow</strong></button>
                            <?php } ?>

                            <a href="Chat.php?sender=<?php echo $curr_id; ?>&receiver=<?php echo $receiver; ?>"><button class="btn btn-outline-success" style="padding: 10px 50px;"><i class=" fa-regular fa-message pe-3"></i> <strong>Message</strong></button></a>
                        </div>

                    </div>
                    <!-- My profile END -->


                    <!-- About Section -->
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


                    <!-- Tabs navs start -->
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
                    <!-- Tabs navs end -->

                    <!-- Tabs content start -->
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

                                $like_status = $feed_post_data["like_status"];

                                $carousel_id = 'carouselIndicators_' . $post_id;

                                // var_dump($post_user_id);
                                // var_dump($curr_id);
                                // var_dump($fetch_user_result[0]["user_profile_pic"]);
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
                                                <a href="">
                                                    <?php if (!empty($logged_in_user_pic)) { ?>
                                                        <img class="avatar-img rounded-circle" src="<?= BASE_URL ?>assets/profile_pic/<?= $curr_id . "/" . $logged_in_user_pic; ?>" alt="">
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
                                <!-- Card feed item END -->



                            <?php } ?>
                        </div>

                        <!-- Showing Followers Here -->
                        <div class="tab-pane fade" id="ex3-tabs-2" role="tabpanel" aria-labelledby="ex3-tab-2">

                            <div class="table-responsive">
                                <table id="follower_table_id" class="table table-hover table-nowrap display">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Full Name</th>
                                            <th scope="col">Username</th>
                                            <th scope="col" class="text-center">Send Message</th>
                                            <th scope="col" class="text-end">View Profile</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tabular_card">
                                        <?php

                                        $follower_query  = "SELECT *
                                                                FROM follows_table INNER JOIN users_table ON follows_table.follower_id = users_table.id
                                                                WHERE user_id = $receiver AND follow_status = '1'";

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
                                                            <?php echo strtoupper($user_fullname); ?>
                                                        </a>
                                                    <?php } else { ?>
                                                        <a class="text-heading font-semibold text-truncate" href="Profile.php">
                                                            <?php echo strtoupper($user_fullname); ?>
                                                        </a>
                                                    <?php } ?>
                                                </td>

                                                <td>
                                                    <?php echo ($user_shortname); ?>
                                                </td>

                                                <td class="text-center">
                                                    <?php if ($user_id != $curr_id) { ?>
                                                        <a href="Chat.php?sender=<?php echo $curr_id; ?>&receiver=<?php echo $user_id; ?>"><button type="button" class="btn btn-outline-success"><i class="fa-regular fa-message"></i></button></a>
                                                    <?php } ?>
                                                </td>

                                                <td class="text-end">
                                                    <?php if ($user_id != $curr_id) { ?>
                                                        <a title="View Profile" href="<?= $follower_profileUrl; ?>"><button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-eye"></i></button></a>
                                                    <?php } else { ?>
                                                        <a title="View Profile" href="Profile.php"><button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-eye"></i></button></a>
                                                    <?php } ?>
                                                </td>

                                            </tr>


                                        <?php } ?>



                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <!-- Showing Followings Here -->
                        <div class="tab-pane fade" id="ex3-tabs-3" role="tabpanel" aria-labelledby="ex3-tab-3">

                            <div class="table-responsive">
                                <table id="following_table_id" class="table table-hover table-nowrap display">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Full Name</th>
                                            <th scope="col">Username</th>
                                            <th scope="col" class="text-center">Send Message</th>
                                            <th scope="col" class="text-end">View Profile</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tabular_card">
                                        <?php

                                        $following_query  = "SELECT *
                                                                FROM follows_table INNER JOIN users_table ON follows_table.user_id = users_table.id
                                                                WHERE follower_id = $receiver AND follow_status = '1'";

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

                                                    <?php if ($user_id == $receiver) { ?>
                                                        <a class="text-heading font-semibold text-truncate" href="<?= $following_profileUrl; ?>">
                                                            <?php echo strtoupper($user_fullname); ?>
                                                        </a>
                                                    <?php } else { ?>
                                                        <a class="text-heading font-semibold text-truncate" href="Profile.php">
                                                            <?php echo strtoupper($user_fullname); ?>
                                                        </a>
                                                    <?php } ?>
                                                </td>

                                                <td>
                                                    <?php echo ($user_shortname); ?>
                                                </td>

                                                <td class="text-center">
                                                    <?php if ($user_id != $curr_id) { ?>
                                                        <a href="Chat.php?sender=<?php echo $curr_id; ?>&receiver=<?php echo $user_id; ?>"><button type="button" class="btn btn-outline-success"><i class="fa-regular fa-message"></i></button></a>
                                                    <?php } ?>
                                                </td>

                                                <td class="text-end">
                                                    <?php if ($user_id != $curr_id) { ?>
                                                        <a title="View Profile" href="<?= $following_profileUrl; ?>"><button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-eye"></i></button></a>
                                                    <?php } else { ?>
                                                        <a title="View Profile" href="Profile.php"><button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-eye"></i></button></a>
                                                    <?php } ?>
                                                </td>

                                            </tr>


                                        <?php } ?>



                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!-- Tabs content end -->


                </div>
                <!-- Main content END -->

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

<!-- Including jQuery -->
<script src="../../assets/js/jquery.js"></script>

<script src="../../assets/js/postLike.js"></script>
<script src="../../assets/js/postCRUD.js"></script>

<!-- cdn links for jquery table -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<script src="../../assets/js/alertMessage.js"></script>

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
    });
</script>




<!-- Follow User -->
<script>
    $(document).ready(function() {
        // Click event for the follow button
        $('.follow_btn').on('click', function() {

            // const userId = $(this).data('user-id');

            const button = $(this);
            const userId = button.data('user-id');

            // AJAX request
            $.ajax({
                type: 'POST',
                url: 'http://localhost/PHP_Assesments/Mingley/src/controller/follow_action.php',
                data: {
                    userId: userId
                },
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                    if (response.status === 'success') {
                        // Update the button text or style based on the follow status
                        // if (response.message === 'User followed' || response.message === 'Follow status updated') {
                        console.log(response.follow_status);
                        if (response.follow_status === 1) {
                            // $('.follow_btn').html('<i class="fa-solid fa-user-check pe-3"></i> <strong>Following</strong>');
                            button.html('<i class="fa-solid fa-user-check pe-3"></i> <strong>Following</strong>');
                        } else {
                            // $('.follow_btn').html('<i class="fa-solid fa-user-plus pe-3"></i> <strong>Follow</strong>');
                            button.html('<i class="fa-solid fa-user-plus pe-3"></i> <strong>Follow</strong>');
                        }
                    } else {
                        // Handle the error scenario
                        console.log('Error: ' + response.message);
                    }
                },
                error: function() {
                    // Handle AJAX error
                    console.log('AJAX request failed');
                }
            });
        });
    });
</script>



<?php
require_once("../../includes/Footer.php");
?>