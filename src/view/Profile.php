<?php

session_start();

$title = "Profile Page";

require("Navbar.php");


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
                        <div class="h-500px rounded-top profile_banner_img">
                            <!-- Card body START -->
                            <div class="card-body py-0 text-light mb-2">
                                <div class="d-sm-flex align-items-start text-center text-sm-start mt-2 mb-2">
                                    <div>
                                        <!-- Avatar -->
                                        <div class="" style="width: 8rem">
                                            <img class="avatar-img rounded-circle border border-white border-3" src="../../assets/img/profile6.png" alt="">
                                        </div>
                                    </div>


                                </div>
                                <!-- List profile -->
                                <!-- <ul class="list-inline mb-0 text-center text-sm-start mt-3 mt-sm-0">
                                    <li class="list-inline-item"><i class="bi bi-briefcase me-1"></i> Lead Developer</li>
                                    <li class="list-inline-item"><i class="bi bi-geo-alt me-1"></i> New Hampshire</li>
                                    <li class="list-inline-item"><i class="bi bi-calendar2-plus me-1"></i> Joined on Nov 26, 2019</li>
                                </ul> -->



                            </div>

                        </div>

                        <div class="mt-sm-4 d-flex" style="align-items: flex-start; justify-content:space-between; ">
                            <!-- Info -->
                            <div class="userName">
                                <h1 class="mb-0 h5"><?= $first_name . " " . $last_name ?> <i class="bi bi-patch-check-fill text-success small"></i></h1>
                                <p><?= "@". $user_name ?></p>
                            </div>

                            <div class="userDetails">
                                <div class="hstack gap-2 gap-xl-3 justify-content-start">
                                    <!-- User stat item -->
                                    <div style="text-align:center">
                                        <a href="">
                                            <h6 class="mb-0">256</h6>
                                            <small>Post</small>
                                        </a>
                                    </div>
                                    <!-- Divider -->
                                    <div class="vr"></div>
                                    <!-- User stat item -->
                                    <div style="text-align:center">
                                        <a href="">
                                            <h6 class="mb-0">2.5K</h6>
                                            <small>Followers</small>
                                        </a>
                                    </div>
                                    <!-- Divider -->
                                    <div class="vr"></div>
                                    <!-- User stat item -->
                                    <div style="text-align:center">
                                        <a href="">
                                            <h6 class="mb-0">365</h6>
                                            <small>Following</small>
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <!-- Button -->
                            <div class="d-flex justify-content-center">

                                <button class="btn btn-danger-soft me-2" type="button" data-bs-toggle="modal" data-bs-target="#modalEditProfile">
                                    <i class="bi bi-pencil-fill pe-1"></i>
                                    Edit profile
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="modalEditProfile" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                    <div class="modal-dialog">
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

                                                    <label for="">User Name</label>
                                                    <input type="text" value="<?= $user_name; ?>" id="username" name="username">
                                                    <div class="formError username"></div>

                                                    <label for="">User Email</label>
                                                    <input type="text" value="<?= $user_email; ?>" id="email" name="email">
                                                    <div class="formError email"></div>

                                                    <!-- <input type="file" name="" id=""> -->
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


                                <div class="dropdown ms-sm-4">
                                    <!-- Card share action menu -->
                                    <button class="icon-md btn btn-light" type="button" id="profileAction2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots"></i>
                                    </button>
                                    <!-- Card share action dropdown menu -->
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileAction2">
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark fa-fw pe-2"></i>Share profile in a message</a></li>
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-file-earmark-pdf fa-fw pe-2"></i>Save your profile to PDF</a></li>
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-lock fa-fw pe-2"></i>Lock profile</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#"> <i class="bi bi-gear fa-fw pe-2"></i>Profile settings</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>


                        <!-- Card body END -->
                        <div class="card-footer mt-3 pt-2 pb-0">
                            <!-- Nav profile pages -->
                            <ul class="nav nav-bottom-line align-items-center justify-content-center justify-content-md-start mb-0 border-0">
                                <li class="nav-item"> <a class="nav-link active" href="my-profile.html"> Posts </a> </li>
                                <li class="nav-item"> <a class="nav-link" href="my-profile-about.html"> About </a> </li>
                                <li class="nav-item"> <a class="nav-link" href="my-profile-connections.html"> Connections <span class="badge bg-success bg-opacity-10 text-success small"> 230</span> </a> </li>
                                <li class="nav-item"> <a class="nav-link" href="my-profile-media.html"> Media</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="my-profile-videos.html"> Videos</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="my-profile-events.html"> Events</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="my-profile-activity.html"> Activity</a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- My profile END -->

                    <!-- Share feed START -->
                    <div class="card card-body rounded">
                        <div class="d-flex mb-3">
                            <!-- Avatar -->
                            <div class="avatar avatar-xs me-2">
                                <a href="#"> <img class="avatar-img rounded-circle" src="../../assets/img/profile6.png" alt=""> </a>
                            </div>
                            <!-- Post input -->
                            <form class="w-100">
                                <input class="form-control pe-4 border-0" placeholder="Share your thoughts..." data-bs-toggle="modal" data-bs-target="#modalCreateFeed">

                                <!-- Modal -->
                                <div class="modal fade" id="modalCreateFeed" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><strong>Create Post</strong></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <textarea name="" id="" cols="10" rows="5" placeholder="Share your thoughts..."></textarea>
                                                <input type="file" name="" id="">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary p-2" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-outline-success p-2">Post</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                            <li class="nav-item dropdown ms-sm-auto">
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
                    <div class="card rounded">
                        <!-- Card header START -->
                        <div class="card-header border-0 pb-0">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-story me-2">
                                        <a href="#!"> <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt=""> </a>
                                    </div>
                                    <!-- Info -->
                                    <div>
                                        <div class="nav nav-divider">
                                            <h6 class="nav-item card-title mb-0"> <a href="#!"> Lori Ferguson </a></h6>
                                            <span class="nav-item small"> 2hr</span>
                                        </div>
                                        <p class="mb-0 small">Web Developer at Webestica</p>
                                    </div>
                                </div>
                                <!-- Card feed action dropdown START -->
                                <div class="dropdown">
                                    <a href="#" class="text-secondary btn btn-secondary-soft-hover py-1 px-2" id="cardFeedAction1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots"></i>
                                    </a>
                                    <!-- Card feed action dropdown menu -->
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardFeedAction1">
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
                            <img class="card-img" src="assets/images/post/3by2/01.jpg" alt="Post">
                            <!-- Feed react START -->
                            <ul class="nav nav-stack py-3 small">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#!"> <i class="bi bi-hand-thumbs-up-fill pe-1"></i>Liked (56)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#!"> <i class="bi bi-chat-fill pe-1"></i>Comments (12)</a>
                                </li>
                                <!-- Card share action START -->
                                <li class="nav-item dropdown ms-sm-auto">
                                    <a class="nav-link mb-0" href="#" id="cardShareAction8" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-reply-fill flip-horizontal ps-1"></i>Share (3)
                                    </a>
                                    <!-- Card share action dropdown menu -->
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction8">
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
                                    <a href="#!"> <img class="avatar-img rounded-circle" src="assets/images/avatar/12.jpg" alt=""> </a>
                                </div>
                                <!-- Comment box  -->
                                <form class="position-relative w-100">
                                    <textarea class="form-control pe-4 bg-light" rows="1" placeholder="Add a comment..."></textarea>
                                </form>
                            </div>
                            <!-- Comment wrap START -->
                            <ul class="comment-wrap list-unstyled">
                                <!-- Comment item START -->
                                <li class="comment-item">
                                    <div class="d-flex position-relative">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs">
                                            <a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt=""></a>
                                        </div>
                                        <div class="ms-2">
                                            <!-- Comment by -->
                                            <div class="bg-light rounded-start-top-0 p-3 rounded">
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
                                    <!-- Comment item nested START -->
                                    <ul class="comment-item-nested list-unstyled">
                                        <!-- Comment item START -->
                                        <li class="comment-item">
                                            <div class="d-flex">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-xs">
                                                    <a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt=""></a>
                                                </div>
                                                <!-- Comment by -->
                                                <div class="ms-2">
                                                    <div class="bg-light p-3 rounded">
                                                        <div class="d-flex justify-content-between">
                                                            <h6 class="mb-1"> <a href="#!"> Lori Stevens </a> </h6>
                                                            <small class="ms-2">2hr</small>
                                                        </div>
                                                        <p class="small mb-0">See resolved goodness felicity shy civility domestic had but Drawings offended yet answered Jennings perceive.</p>
                                                    </div>
                                                    <!-- Comment react -->
                                                    <ul class="nav nav-divider py-2 small">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#!"> Like (5)</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#!"> Reply</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Comment item END -->
                                        <!-- Comment item START -->
                                        <li class="comment-item">
                                            <div class="d-flex">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-story avatar-xs">
                                                    <a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg" alt=""></a>
                                                </div>
                                                <!-- Comment by -->
                                                <div class="ms-2">
                                                    <div class="bg-light p-3 rounded">
                                                        <div class="d-flex justify-content-between">
                                                            <h6 class="mb-1"> <a href="#!"> Billy Vasquez </a> </h6>
                                                            <small class="ms-2">15min</small>
                                                        </div>
                                                        <p class="small mb-0">Wishing calling is warrant settled was lucky.</p>
                                                    </div>
                                                    <!-- Comment react -->
                                                    <ul class="nav nav-divider py-2 small">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#!"> Like</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#!"> Reply</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Comment item END -->
                                    </ul>
                                    <!-- Load more replies -->
                                    <a href="#!" role="button" class="btn btn-link btn-link-loader btn-sm text-secondary d-flex align-items-center mb-3 ms-5" data-bs-toggle="button" aria-pressed="true">
                                        <div class="spinner-dots me-2">
                                            <span class="spinner-dot"></span>
                                            <span class="spinner-dot"></span>
                                            <span class="spinner-dot"></span>
                                        </div>
                                        Load more replies
                                    </a>
                                    <!-- Comment item nested END -->
                                </li>
                                <!-- Comment item END -->
                                <!-- Comment item START -->
                                <li class="comment-item">
                                    <div class="d-flex">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs">
                                            <a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt=""></a>
                                        </div>
                                        <!-- Comment by -->
                                        <div class="ms-2">
                                            <div class="bg-light p-3 rounded">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="mb-1"> <a href="#!"> Frances Guerrero </a> </h6>
                                                    <small class="ms-2">4min</small>
                                                </div>
                                                <p class="small mb-0">Removed demands expense account in outward tedious do. Particular way thoroughly unaffected projection.</p>
                                            </div>
                                            <!-- Comment react -->
                                            <ul class="nav nav-divider pt-2 small">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#!"> Like (1)</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#!"> Reply</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#!"> View 6 replies</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <!-- Comment item END -->
                            </ul>
                            <!-- Comment wrap END -->
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

                    <!-- Card feed item START -->
                    <div class="card rounded">

                        <div class="border-bottom">
                            <p class="small mb-0 px-4 py-2"><i class="bi bi-heart-fill text-danger pe-1"></i>Sam Lanson likes this post</p>
                        </div>
                        <!-- Card header START -->
                        <div class="card-header border-0 pb-0">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="avatar me-2">
                                        <a href="#"> <img class="avatar-img rounded-circle" src="assets/images/logo/13.svg" alt=""> </a>
                                    </div>
                                    <!-- Title -->
                                    <div>
                                        <h6 class="card-title mb-0"> <a href="#!"> Apple Education </a></h6>
                                        <p class="mb-0 small">9 November at 23:29</p>
                                    </div>
                                </div>
                                <!-- Card share action menu -->
                                <a href="#" class="text-secondary btn btn-secondary-soft-hover py-1 px-2" id="cardShareAction5" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <!-- Card share action dropdown menu -->
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction5">
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
                            <!-- Card share action END -->
                        </div>
                        <!-- Card header START -->

                        <!-- Card body START -->
                        <div class="card-body pb-0">
                            <p>Find out how you can save time in the classroom this year. Earn recognition while you learn new skills on iPad and Mac. Start recognition your first Apple Teacher badge today!</p>
                            <!-- Feed react START -->
                            <ul class="nav nav-stack pb-2 small">
                                <li class="nav-item">
                                    <a class="nav-link active text-secondary" href="#!"> <i class="bi bi-heart-fill me-1 icon-xs bg-danger text-white rounded-circle"></i> Louis, Billy and 126 others </a>
                                </li>
                                <li class="nav-item ms-sm-auto">
                                    <a class="nav-link" href="#!"> <i class="bi bi-chat-fill pe-1"></i>Comments (12)</a>
                                </li>
                            </ul>
                            <!-- Feed react END -->
                        </div>
                        <!-- Card body END -->
                        <!-- Card Footer START -->
                        <div class="card-footer py-3">
                            <!-- Feed react START -->
                            <ul class="nav nav-fill nav-stack small">
                                <li class="nav-item">
                                    <a class="nav-link mb-0 active" href="#!"> <i class="bi bi-heart pe-1"></i>Liked (56)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0" href="#!"> <i class="bi bi-chat-fill pe-1"></i>Comments (12)</a>
                                </li>
                                <!-- Card share action dropdown START -->
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link mb-0" id="cardShareAction6" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-reply-fill flip-horizontal ps-1"></i>Share (3)
                                    </a>
                                    <!-- Card share action dropdown menu -->
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction6">
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
                                <!-- Card share action dropdown END -->
                                <li class="nav-item">
                                    <a class="nav-link mb-0" href="#!"> <i class="bi bi-send-fill pe-1"></i>Send</a>
                                </li>
                            </ul>
                            <!-- Feed react END -->
                        </div>
                        <!-- Card Footer END -->
                    </div>
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
                                    <p>He moonlights difficult engrossed it, sportsmen. Interested has all Devonshire difficulty gay assistance joy.</p>
                                    <!-- Date time -->
                                    <ul class="list-unstyled mt-3 mb-0">
                                        <li class="mb-2"> <i class="bi bi-calendar-date fa-fw pe-1"></i> Born: <strong> October 20, 1990 </strong> </li>
                                        <li class="mb-2"> <i class="bi bi-heart fa-fw pe-1"></i> Status: <strong> Single </strong> </li>
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
                                <div class="card-header d-flex justify-content-between border-0">
                                    <h5 class="card-title">Experience</h5>
                                    <a class="btn btn-primary-soft btn-sm" href="#!"> <i class="fa-solid fa-plus"></i> </a>
                                </div>
                                <!-- Card header END -->
                                <!-- Card body START -->
                                <div class="card-body position-relative pt-0">
                                    <!-- Experience item START -->
                                    <div class="d-flex">
                                        <!-- Avatar -->
                                        <div class="avatar me-3">
                                            <a href="#!"> <img class="avatar-img rounded-circle" src="assets/images/logo/08.svg" alt=""> </a>
                                        </div>
                                        <!-- Info -->
                                        <div>
                                            <h6 class="card-title mb-0"><a href="#!"> Apple Computer, Inc. </a></h6>
                                            <p class="small">May 2015 – Present Employment Duration 8 mos <a class="btn btn-primary-soft btn-xs ms-2" href="#!">Edit </a></p>
                                        </div>
                                    </div>
                                    <!-- Experience item END -->

                                    <!-- Experience item START -->
                                    <div class="d-flex">
                                        <!-- Avatar -->
                                        <div class="avatar me-3">
                                            <a href="#!"> <img class="avatar-img rounded-circle" src="assets/images/logo/09.svg" alt=""> </a>
                                        </div>
                                        <!-- Info -->
                                        <div>
                                            <h6 class="card-title mb-0"><a href="#!"> Microsoft Corporation </a></h6>
                                            <p class="small">May 2017 – Present Employment Duration 1 yrs 5 mos <a class="btn btn-primary-soft btn-xs ms-2" href="#!">Edit </a></p>
                                        </div>
                                    </div>
                                    <!-- Experience item END -->

                                    <!-- Experience item START -->
                                    <div class="d-flex">
                                        <!-- Avatar -->
                                        <div class="avatar me-3">
                                            <a href="#!"> <img class="avatar-img rounded-circle" src="assets/images/logo/10.svg" alt=""> </a>
                                        </div>
                                        <!-- Info -->
                                        <div>
                                            <h6 class="card-title mb-0"><a href="#!"> Tata Consultancy Services. </a></h6>
                                            <p class="small mb-0">May 2022 – Present Employment Duration 6 yrs 10 mos <a class="btn btn-primary-soft btn-xs ms-2" href="#!">Edit </a></p>
                                        </div>
                                    </div>
                                    <!-- Experience item END -->

                                </div>
                                <!-- Card body END -->
                            </div>
                        </div>
                        <!-- Card END -->

                        <!-- Card START -->
                        <div class="col-md-6 col-lg-12">
                            <div class="card rounded">
                                <!-- Card header START -->
                                <div class="card-header d-sm-flex justify-content-between border-0">
                                    <h5 class="card-title">Photos</h5>
                                    <a class="btn btn-primary-soft btn-sm" href="#!"> See all photo</a>
                                </div>
                                <!-- Card header END -->
                                <!-- Card body START -->
                                <div class="card-body position-relative pt-0">
                                    <div class="row g-2">
                                        <!-- Photos item -->
                                        <div class="col-6">
                                            <a href="assets/images/albums/01.jpg" data-gallery="image-popup" data-glightbox="">
                                                <img class="rounded img-fluid" src="assets/images/albums/01.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Photos item -->
                                        <div class="col-6">
                                            <a href="assets/images/albums/02.jpg" data-gallery="image-popup" data-glightbox="">
                                                <img class="rounded img-fluid" src="assets/images/albums/02.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Photos item -->
                                        <div class="col-4">
                                            <a href="assets/images/albums/03.jpg" data-gallery="image-popup" data-glightbox="">
                                                <img class="rounded img-fluid" src="assets/images/albums/03.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Photos item -->
                                        <div class="col-4">
                                            <a href="assets/images/albums/04.jpg" data-gallery="image-popup" data-glightbox="">
                                                <img class="rounded img-fluid" src="assets/images/albums/04.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Photos item -->
                                        <div class="col-4">
                                            <a href="assets/images/albums/05.jpg" data-gallery="image-popup" data-glightbox="">
                                                <img class="rounded img-fluid" src="assets/images/albums/05.jpg" alt="">
                                            </a>
                                            <!-- glightbox Albums left bar END  -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Card body END -->
                            </div>
                        </div>
                        <!-- Card END -->

                        <!-- Card START -->
                        <div class="col-md-6 col-lg-12">
                            <div class="card rounded">
                                <!-- Card header START -->
                                <div class="card-header d-sm-flex justify-content-between align-items-center border-0">
                                    <h5 class="card-title">Friends <span class="badge bg-danger bg-opacity-10 text-danger">230</span></h5>
                                    <a class="btn btn-primary-soft btn-sm" href="#!"> See all friends</a>
                                </div>
                                <!-- Card header END -->
                                <!-- Card body START -->
                                <div class="card-body position-relative pt-0">
                                    <div class="row g-3">

                                        <div class="col-6">
                                            <!-- Friends item START -->
                                            <div class="card shadow-none text-center h-100">
                                                <!-- Card body -->
                                                <div class="card-body p-2 pb-0">
                                                    <div class="avatar avatar-story avatar-xl">
                                                        <a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt=""></a>
                                                    </div>
                                                    <h6 class="card-title mb-1 mt-3"> <a href="#!"> Amanda Reed </a></h6>
                                                    <p class="mb-0 small lh-sm">16 mutual connections</p>
                                                </div>
                                                <!-- Card footer -->
                                                <div class="card-footer p-2 border-0">
                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Send message" data-bs-original-title="Send message"> <i class="bi bi-chat-left-text"></i> </button>
                                                    <button class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Remove friend" data-bs-original-title="Remove friend"> <i class="bi bi-person-x"></i> </button>
                                                </div>
                                            </div>
                                            <!-- Friends item END -->
                                        </div>

                                        <div class="col-6">
                                            <!-- Friends item START -->
                                            <div class="card shadow-none text-center h-100">
                                                <!-- Card body -->
                                                <div class="card-body p-2 pb-0">
                                                    <div class="avatar avatar-xl">
                                                        <a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt=""></a>
                                                    </div>
                                                    <h6 class="card-title mb-1 mt-3"> <a href="#!"> Samuel Bishop </a></h6>
                                                    <p class="mb-0 small lh-sm">22 mutual connections</p>
                                                </div>
                                                <!-- Card footer -->
                                                <div class="card-footer p-2 border-0">
                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Send message" data-bs-original-title="Send message"> <i class="bi bi-chat-left-text"></i> </button>
                                                    <button class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Remove friend" data-bs-original-title="Remove friend"> <i class="bi bi-person-x"></i> </button>
                                                </div>
                                            </div>
                                            <!-- Friends item END -->
                                        </div>

                                        <div class="col-6">
                                            <!-- Friends item START -->
                                            <div class="card shadow-none text-center h-100">
                                                <!-- Card body -->
                                                <div class="card-body p-2 pb-0">
                                                    <div class="avatar avatar-xl">
                                                        <a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt=""></a>
                                                    </div>
                                                    <h6 class="card-title mb-1 mt-3"> <a href="#"> Bryan Knight </a></h6>
                                                    <p class="mb-0 small lh-sm">1 mutual connection</p>
                                                </div>
                                                <!-- Card footer -->
                                                <div class="card-footer p-2 border-0">
                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Send message" data-bs-original-title="Send message"> <i class="bi bi-chat-left-text"></i> </button>
                                                    <button class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Remove friend" data-bs-original-title="Remove friend"> <i class="bi bi-person-x"></i> </button>
                                                </div>
                                            </div>
                                            <!-- Friends item END -->
                                        </div>

                                        <div class="col-6">
                                            <!-- Friends item START -->
                                            <div class="card shadow-none text-center h-100">
                                                <!-- Card body -->
                                                <div class="card-body p-2 pb-0">
                                                    <div class="avatar avatar-xl">
                                                        <a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt=""></a>
                                                    </div>
                                                    <h6 class="card-title mb-1 mt-3"> <a href="#!"> Amanda Reed </a></h6>
                                                    <p class="mb-0 small lh-sm">15 mutual connections</p>
                                                </div>
                                                <!-- Card footer -->
                                                <div class="card-footer p-2 border-0">
                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Send message" data-bs-original-title="Send message"> <i class="bi bi-chat-left-text"></i> </button>
                                                    <button class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Remove friend" data-bs-original-title="Remove friend"> <i class="bi bi-person-x"></i> </button>
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