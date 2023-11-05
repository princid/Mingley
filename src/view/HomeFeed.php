<?php

session_start();

$title = "Home Page";

// require_once('../../includes/Header.php');

// require_once("../../config/constants.php");

// require("../controller/fetch_user_controller.php");

require("Navbar.php");

// var_dump($first_name);
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
                                        <img src="../../assets/img/profile6.png" alt="">
                                    </a>
                                </figure>
                                <div class="profile-desc text-center">
                                    <h5 class="mb-0"> <?php echo ($first_name . " " . $last_name); ?> </h5>
                                    <small>Full Stack Developer || Mind2Web</small>
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
                                        <a class="nav-link" href="my-profile.html"> <img class="me-2 h-20px fa-fw" src="assets/images/icon/home-outline-filled.svg" alt=""><span>Feed </span></a>
                                    </li>
                                    <li class="nav-item">
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
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="notifications.html"> <img class="me-2 h-20px fa-fw" src="assets/images/icon/notification-outlined-filled.svg" alt=""><span>Notifications </span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="settings.html"> <img class="me-2 h-20px fa-fw" src="assets/images/icon/cog-outline-filled.svg" alt=""><span>Settings </span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer text-center py-2">
                                <a class="btn btn-link btn-sm" href="Profile.php">View Profile </a>
                            </div>

                        </div>

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
                                <a href="#"> <img class="avatar-img rounded-circle" src="../../assets/img/profile6.png" alt=""> </a>
                            </div>
                            <!-- Post input -->
                            <form class="w-100">
                                <textarea class="form-control pe-4 border-0" rows="2" data-autoresize="" placeholder="Share your thoughts..."></textarea>
                            </form>
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

                    <!-- post status start -->
                    <div class="card rounded-2">
                        <!-- Card header START -->
                        <div class="card-header border-0 pb-0">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="avatar me-2">
                                        <a href="#!"> <img class="avatar-img rounded-circle" src="../../assets/img/profile5.jpg" alt=""> </a>
                                    </div>
                                    <!-- Info -->
                                    <div>
                                        <div class="nav nav-divider">
                                            <h6 class="nav-item card-title mb-0"> <a href="#!"> Lori Ferguson </a></h6>
                                            <span class="nav-item small"> 2hr</span>
                                        </div>
                                        <p class="mb-0 small">Web Developer at Mind2Web</p>
                                    </div>
                                </div>
                                <!-- Card feed action dropdown START -->
                                <div class="dropdown">
                                    <a href="#" class="text-secondary btn btn-secondary-soft-hover py-1 px-2" id="cardFeedAction" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots"></i>
                                    </a>
                                    <!-- Card feed action dropdown menu -->
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardFeedAction" style="">
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark fa-fw pe-2"></i>Save post</a></li>
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-person-x fa-fw pe-2"></i>Unfollow lori ferguson </a></li>
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-x-circle fa-fw pe-2"></i>Hide post</a></li>
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-slash-circle fa-fw pe-2"></i>Block</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-flag fa-fw pe-2"></i>Report post</a></li>
                                    </ul>
                                </div>
                                <!-- Card feed action dropdown END -->
                            </div>
                        </div>
                        <!-- Card header END -->
                        <!-- Card body START -->
                        <div class="card-body">
                            <p>I'm thrilled to share that I've completed a graduate certificate course in project management with the president's honor roll.</p>
                            <!-- Card img -->
                            <img class="card-img" src="../../assets/img/post4.jpg" alt="Post">
                            <!-- Feed react START -->
                            <ul class="nav nav-stack py-3 small">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#!" data-bs-container="body" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-custom-class="tooltip-text-start" data-bs-title="Frances Guerrero<br> Lori Stevens<br> Billy Vasquez<br> Judy Nguyen<br> Larry Lawson<br> Amanda Reed<br> Louis Crawford"> <i class="bi bi-hand-thumbs-up-fill pe-1"></i>Liked (56)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#!"> <i class="bi bi-chat-fill pe-1"></i>Comments (12)</a>
                                </li>
                                <!-- Card share action START -->
                                <li class="nav-item dropdown ms-sm-auto">
                                    <a class="nav-link mb-0" href="#" id="cardShareAction" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-reply-fill flip-horizontal ps-1"></i>Share (3)
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
                    <!-- post status end -->

                    <!-- post status start -->
                    <div class="card rounded-2">
                        <!-- post title start -->
                        <div class="post-title d-flex align-items-center">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                                <a href="#">
                                    <figure class="profile-thumb-middle">
                                        <img src="../../assets/img/profile4.jpg" alt="profile picture">
                                    </figure>
                                </a>
                            </div>
                            <!-- profile picture end -->

                            <div class="posted-author">
                                <h6 class="author"><a href="profile.html">Jon Wileyam</a></h6>
                                <span class="post-time">15 min ago</span>
                            </div>

                            <div class="post-settings-bar">
                                <span></span>
                                <span></span>
                                <span></span>
                                <div class="post-settings arrow-shape">
                                    <ul>
                                        <li><button>copy link to adda</button></li>
                                        <li><button>edit post</button></li>
                                        <li><button>embed adda</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- post title start -->
                        <div class="post-content">
                            <p class="post-desc pb-0">
                                Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                default model text, and a search for
                            </p>
                            <div class="post-meta">
                                <div class="post-meta-like">
                                    <div><i class="fa-regular fa-heart"></i></div>
                                    <div>You and 112 people like this</div>
                                </div>
                                <ul class="comment-share-meta">
                                    <li>
                                        <button class="post-comment">
                                            <i class="bi bi-chat-bubble"></i>
                                            <span>41</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="post-share">
                                            <i class="bi bi-share"></i>
                                            <span>07</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- post status end -->

                    <!-- post status start -->
                    <div class="card rounded-2">
                        <!-- post title start -->
                        <div class="post-title d-flex align-items-center">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                                <a href="#">
                                    <figure class="profile-thumb-middle">
                                        <img src="../../assets/img/profile4.jpg" alt="profile picture">
                                    </figure>
                                </a>
                            </div>
                            <!-- profile picture end -->

                            <div class="posted-author">
                                <h6 class="author"><a href="profile.html">william henry</a></h6>
                                <span class="post-time">35 min ago</span>
                            </div>

                            <div class="post-settings-bar">
                                <span></span>
                                <span></span>
                                <span></span>
                                <div class="post-settings arrow-shape">
                                    <ul>
                                        <li><button>copy link to adda</button></li>
                                        <li><button>edit post</button></li>
                                        <li><button>embed adda</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- post title start -->
                        <div class="post-content">
                            <p class="post-desc">
                                Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                default model text, and a search for 'lorem ipsum' will uncover many web sites still
                                in their infancy.
                            </p>
                            <div class="plyr__video-embed plyr-youtube">
                                <iframe src="https://www.youtube.com/embed/WeA7edXsU40" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="post-meta">
                                <div class="post-meta-like">
                                    <!-- <i class="bi bi-heart-beat"></i> -->
                                    <div><i class="fa-regular fa-heart"></i></div>
                                    <div>You and 112 people like this</div>

                                </div>
                                <ul class="comment-share-meta">
                                    <li>
                                        <button class="post-comment">
                                            <i class="bi bi-chat-bubble"></i>
                                            <span>36</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="post-share">
                                            <i class="bi bi-share"></i>
                                            <span>08</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- post status end -->

                    <!-- post status start -->
                    <div class="card rounded-2">
                        <!-- post title start -->
                        <div class="post-title d-flex align-items-center">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                                <a href="#">
                                    <figure class="profile-thumb-middle">
                                        <img src="../../assets/img/profile4.jpg" alt="profile picture">
                                    </figure>
                                </a>
                            </div>
                            <!-- profile picture end -->

                            <div class="posted-author">
                                <h6 class="author"><a href="profile.html">Kate Palson</a></h6>
                                <span class="post-time">35 min ago</span>
                            </div>

                            <div class="post-settings-bar">
                                <span></span>
                                <span></span>
                                <span></span>
                                <div class="post-settings arrow-shape">
                                    <ul>
                                        <li><button>copy link to adda</button></li>
                                        <li><button>edit post</button></li>
                                        <li><button>embed adda</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- post title start -->
                        <div class="post-content">
                            <p class="post-desc">
                                Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                default model text, and a search for 'lorem ipsum' will uncover many web sites still
                                in their infancy.
                            </p>
                            <div class="post-thumb-gallery img-gallery">
                                <div class="row g-0">
                                    <div class="col-8">
                                        <figure class="post-thumb">
                                            <a class="gallery-selector" href="assets/images/post/post-2.jpg">
                                                <img src="../../assets/img/post3.png" alt="post image">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <figure class="post-thumb">
                                                    <a class="gallery-selector" href="assets/images/post/post-3.jpg">
                                                        <img src="../../assets/img/post4.jpg" alt="post image">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-12">
                                                <figure class="post-thumb">
                                                    <a class="gallery-selector" href="assets/images/post/post-4.jpg">
                                                        <img src="../../assets/img/post4.jpg" alt="post image">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-12">
                                                <figure class="post-thumb">
                                                    <a class="gallery-selector" href="assets/images/post/post-5.jpg">
                                                        <img src="../../assets/img/post4.jpg" alt="post image">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-meta">
                                <div class="post-meta-like">
                                    <div><i class="fa-regular fa-heart"></i></div>
                                    <div>You and 112 people like this</div>
                                </div>
                                <ul class="comment-share-meta">
                                    <li>
                                        <button class="post-comment">
                                            <i class="bi bi-chat-bubble"></i>
                                            <span>28</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="post-share">
                                            <i class="bi bi-share"></i>
                                            <span>12</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- post status end -->

                    <!-- post status start -->
                    <div class="card rounded-2">
                        <!-- post title start -->
                        <div class="post-title d-flex align-items-center">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                                <a href="#">
                                    <figure class="profile-thumb-middle">
                                        <img src="../../assets/img/profile4.jpg" alt="profile picture">
                                    </figure>
                                </a>
                            </div>
                            <!-- profile picture end -->

                            <div class="posted-author">
                                <h6 class="author"><a href="profile.html">Robart Faul</a></h6>
                                <span class="post-time">40 min ago</span>
                            </div>

                            <div class="post-settings-bar">
                                <span></span>
                                <span></span>
                                <span></span>
                                <div class="post-settings arrow-shape">
                                    <ul>
                                        <li><button>copy link to adda</button></li>
                                        <li><button>edit post</button></li>
                                        <li><button>embed adda</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- post title start -->
                        <div class="post-content">
                            <p class="post-desc pb-0">
                                Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                default model text, and a search for Many desktop publishing packages and web page
                                editors now use Lorem Ipsum as their default model text, and a search for Many
                                desktop publishing duskam azer.
                            </p>
                            <div class="post-meta">
                                <div class="post-meta-like">
                                    <div><i class="fa-regular fa-heart"></i></div>
                                    <div>You and 112 people like this</div>
                                </div>
                                <ul class="comment-share-meta">
                                    <li>
                                        <button class="post-comment">
                                            <i class="bi bi-chat-bubble"></i>
                                            <span>80</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="post-share">
                                            <i class="bi bi-share"></i>
                                            <span>10</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- post status end -->

                    <!-- post status start -->
                    <div class="card rounded-2">
                        <!-- post title start -->
                        <div class="post-title d-flex align-items-center">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                                <a href="#">
                                    <figure class="profile-thumb-middle">
                                        <img src="../../assets/img/profile4.jpg" alt="profile picture">
                                    </figure>
                                </a>
                            </div>
                            <!-- profile picture end -->

                            <div class="posted-author">
                                <h6 class="author"><a href="profile.html">Halen Omaro</a></h6>
                                <span class="post-time">45 min ago</span>
                            </div>

                            <div class="post-settings-bar">
                                <span></span>
                                <span></span>
                                <span></span>
                                <div class="post-settings arrow-shape">
                                    <ul>
                                        <li><button>copy link to adda</button></li>
                                        <li><button>edit post</button></li>
                                        <li><button>embed adda</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- post title start -->
                        <div class="post-content">
                            <p class="post-desc">
                                Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                default model text, and a search for 'lorem ipsum' will uncover many web sites still
                                in their infancy.
                            </p>
                            <div class="plyr__video-embed plyr-video">
                                <iframe src="https://www.youtube.com/embed/odUtqDz4lEk" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <p class="post-desc post-desc-secondary">
                                Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                default model text, and a search for
                            </p>
                            <div class="post-meta">
                                <div class="post-meta-like">
                                    <div><i class="fa-regular fa-heart"></i></div>
                                    <div>You and 112 people like this</div>
                                </div>
                                <ul class="comment-share-meta">
                                    <li>
                                        <button class="post-comment">
                                            <i class="bi bi-chat-bubble"></i>
                                            <span>42</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="post-share">
                                            <i class="bi bi-share"></i>
                                            <span>05</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- post status end -->

                    <!-- post status start -->
                    <div class="card rounded-2">
                        <!-- post title start -->
                        <div class="post-title d-flex align-items-center">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                                <a href="#">
                                    <figure class="profile-thumb-middle">
                                        <img src="../../assets/img/profile4.jpg" alt="profile picture">
                                    </figure>
                                </a>
                            </div>
                            <!-- profile picture end -->

                            <div class="posted-author">
                                <h6 class="author"><a href="profile.html">Mili Raoulin</a></h6>
                                <span class="post-time">50 min ago</span>
                            </div>

                            <div class="post-settings-bar">
                                <span></span>
                                <span></span>
                                <span></span>
                                <div class="post-settings arrow-shape">
                                    <ul>
                                        <li><button>copy link to adda</button></li>
                                        <li><button>edit post</button></li>
                                        <li><button>embed adda</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- post title start -->
                        <div class="post-content">
                            <p class="post-desc">
                                Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                default model text, and a search for 'lorem ipsum' will uncover many web sites still
                                in their infancy.
                            </p>
                            <div class="post-thumb-gallery img-gallery">
                                <div class="row g-0">
                                    <div class="col-6">
                                        <figure class="post-thumb">
                                            <a class="gallery-selector" href="assets/images/post/post-6.jpg">
                                                <img src="../../assets/img/post3.png" alt="post image">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-6">
                                        <figure class="post-thumb">
                                            <a class="gallery-selector" href="assets/images/post/post-7.jpg">
                                                <img src="../../assets/img/post3.png" alt="post image">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="post-meta">
                                <div class="post-meta-like">
                                    <div><i class="fa-regular fa-heart"></i></div>
                                    <div>You and 112 people like this</div>
                                </div>
                                <ul class="comment-share-meta">
                                    <li>
                                        <button class="post-comment">
                                            <i class="bi bi-chat-bubble"></i>
                                            <span>65</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="post-share">
                                            <i class="bi bi-share"></i>
                                            <span>04</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- post status end -->

                    <!-- post status start -->
                    <div class="card rounded-2">
                        <!-- post title start -->
                        <div class="post-title d-flex align-items-center">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                                <a href="#">
                                    <figure class="profile-thumb-middle">
                                        <img src="../../assets/img/profile4.jpg" alt="profile picture">
                                    </figure>
                                </a>
                            </div>
                            <!-- profile picture end -->

                            <div class="posted-author">
                                <h6 class="author"><a href="profile.html">Jon Wileyam</a></h6>
                                <span class="post-time">15 min ago</span>
                            </div>

                            <div class="post-settings-bar">
                                <span></span>
                                <span></span>
                                <span></span>
                                <div class="post-settings arrow-shape">
                                    <ul>
                                        <li><button>copy link to adda</button></li>
                                        <li><button>edit post</button></li>
                                        <li><button>embed adda</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- post title start -->
                        <div class="post-content">
                            <p class="post-desc pb-0">
                                Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                default model text, and a search for
                            </p>
                            <div class="post-meta">
                                <div class="post-meta-like">
                                    <div><i class="fa-regular fa-heart"></i></div>
                                    <div>You and 112 people like this</div>
                                </div>
                                <ul class="comment-share-meta">
                                    <li>
                                        <button class="post-comment">
                                            <i class="bi bi-chat-bubble"></i>
                                            <span>41</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="post-share">
                                            <i class="bi bi-share"></i>
                                            <span>07</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- post status end -->

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
                                    <h5 class="card-title mb-0">Who to follow</h5>
                                </div>
                                <!-- Card header END -->
                                <!-- Card body START -->
                                <div class="card_body">
                                    <!-- Connection item START -->
                                    <div class="hstack gap-2 mb-3 mt-3">
                                        <!-- Avatar -->
                                        <div class="avatar">
                                            <a href="#"><img class="avatar-img rounded-circle" src="../../assets/img/profile2.jpg" alt=""></a>
                                        </div>
                                        <!-- Title -->
                                        <div class="overflow-hidden">
                                            <a class="h6 mb-0" href="#!">Judy Nguyen </a>
                                            <p class="mb-0 small text-truncate">News anchor</p>
                                        </div>
                                        <!-- Button -->
                                        <a class="btn btn-primary-soft rounded-circle icon-md ms-auto rightNav_anchor" href="#"><i class="fa-solid fa-plus"> </i></a>
                                    </div>
                                    <!-- Connection item END -->
                                    <!-- Connection item START -->
                                    <div class="hstack gap-2 mb-3 mt-3">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-story">
                                            <a href="#!"> <img class="avatar-img rounded-circle" src="../../assets/img/profile2.jpg" alt=""> </a>
                                        </div>
                                        <!-- Title -->
                                        <div class="overflow-hidden">
                                            <a class="h6 mb-0" href="#!">Amanda Reed </a>
                                            <p class="mb-0 small text-truncate">Web Developer</p>
                                        </div>
                                        <!-- Button -->
                                        <a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="#"><i class="fa-solid fa-plus"> </i></a>
                                    </div>
                                    <!-- Connection item END -->

                                    <!-- Connection item START -->
                                    <div class="hstack gap-2 mb-3 mt-3">
                                        <!-- Avatar -->
                                        <div class="avatar">
                                            <a href="#"> <img class="avatar-img rounded-circle" src="../../assets/img/profile2.jpg" alt=""> </a>
                                        </div>
                                        <!-- Title -->
                                        <div class="overflow-hidden">
                                            <a class="h6 mb-0" href="#!">Billy Vasquez </a>
                                            <p class="mb-0 small text-truncate">News anchor</p>
                                        </div>
                                        <!-- Button -->
                                        <a class="btn btn-primary-soft rounded-circle icon-md ms-auto"><i class="bi bi-person-check-fill"> </i></a>
                                    </div>
                                    <!-- Connection item END -->

                                    <!-- Connection item START -->
                                    <div class="hstack gap-2 mb-3 mt-3">
                                        <!-- Avatar -->
                                        <div class="avatar">
                                            <a href="#"> <img class="avatar-img rounded-circle" src="../../assets/img/profile2.jpg" alt=""> </a>
                                        </div>
                                        <!-- Title -->
                                        <div class="overflow-hidden">
                                            <a class="h6 mb-0" href="#!">Lori Ferguson </a>
                                            <p class="mb-0 small text-truncate">Web Developer at Webestica</p>
                                        </div>
                                        <!-- Button -->
                                        <a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="#"><i class="fa-solid fa-plus"> </i></a>
                                    </div>
                                    <!-- Connection item END -->

                                    <!-- Connection item START -->
                                    <div class="hstack gap-2 mb-3 mt-3">
                                        <!-- Avatar -->
                                        <div class="avatar">
                                            <a href="#"> <img class="avatar-img rounded-circle" src="../../assets/img/profile2.jpg" alt=""> </a>
                                        </div>
                                        <!-- Title -->
                                        <div class="overflow-hidden">
                                            <a class="h6 mb-0" href="#!">Carolyn Ortiz </a>
                                            <p class="mb-0 small text-truncate">News anchor</p>
                                        </div>
                                        <!-- Button -->
                                        <a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="#"><i class="fa-solid fa-plus"> </i></a>
                                    </div>
                                    <!-- Connection item END -->

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


<script>
    const alertBox = document.querySelector(".alertBox");

    setTimeout(() => {
        alertBox.innerHTML = "";
    }, 3000);
</script>



<?php
require_once("../../includes/Footer.php");
?>