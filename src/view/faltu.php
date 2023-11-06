<?php

require("/var/www/html/PHP_Assesments/Mangloo/config/constants.php");
// echo"JHbjb";

?>


<section class="main_container">
    <div class="form_container">
        <div class="form_img">
            <img src="<?php echo BASE_URL; ?>assets/img/form1.jpg" alt="">
        </div>
        <form id="signUp_form" action="" method="post" name="myForm">

            <!-- Full Name -->
            <div class=" form_elements">
                <label for="name">Full Name<span class="text-danger"> *</span></label><br />
                <input type="text" name="name" id="name" placeholder="Enter your name" class="input" />
                <div class="formError name"></div>
            </div>

            <br />

            <!-- Email -->
            <div class="form_elements">
                <label for="text">Email<span class="text-danger"> *</span></label><br />
                <input type="text" name="email" id="email" placeholder="Enter your E-mail" class="input" />
                <div class="formError email"></div>
            </div>

            <br />

            <!-- Username -->
            <div class="form_elements">
                <label for="age">Username<span class="text-danger"> *</span></label><br />
                <input type="number" name="age" id="age" placeholder="Enter your age" class="input" />
                <div class="formError age"></div>
            </div>

            <br />

            <!-- Password -->
            <div class="form_elements">
                <label for="password">Password<span class="text-danger"> *</span></label><br />
                <input type="password" name="password" id="password" placeholder="Enter your Password" class="input" />
                <div class="formError password"></div>
            </div>

            <br />

            <!-- Confirm Password -->
            <div class="form_elements">
                <label for="confirm_password">Confirm Password<span class="text-danger"> *</span></label><br />
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm your Password" class="input" />
                <div class="formError confirm_password"></div>
            </div>

            <br />

            <br />

            <input class="formBtn" type="submit" name="Submit" value="SIGN UP" />

            <div class="signIn_redirect">
                Already a user? <b><a href="<?php echo BASE_URL; ?>src/view/SignIn.php">Sign In</a></b>
            </div>
        </form>
    </div>

</section>












<?php

require("/var/www/html/PHP_Assesments/Mangloo/config/constants.php");

?>


<div class="container">
    <div class="row">
        <div class="col-6 ">
            <img src="assets/img/form1.jpg" class="w-100">
        </div>
        <div class="col-6 ">
            <form>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Full Name <span class="text-danger"> *</span></label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Username <span class="text-danger"> *</span></label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address <span class="text-danger"> *</span></label>
                </div>
                <div class="form-floating mb-3 ">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password <span class="text-danger"> *</span></label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Confirm Password <span class="text-danger"> *</span></label>
                </div>

                <button type="submit" class="btn btn-primary w-100">Submit</button>

                <div class="signIn_redirect">
                    Already a user? <b><a href="<?php echo BASE_URL; ?>src/view/SignIn.php">Sign In</a></b>
                </div>
            </form>

        </div>
    </div>



</div>




<aside>
    <!-- widget single item start -->

    <!-- widget single item start -->
    <div class="card widget-item">
        <h4 class="widget-title">page you may like</h4>
        <div class="widget-body">
            <ul class="like-page-list-wrapper">
                <li class="unorder-list">
                    <!-- profile picture end -->
                    <div class="profile-thumb">
                        <a href="#">
                            <figure class="profile-thumb-small">
                                <img src="../../assets/img/profile3.jpg" alt="profile picture">
                            </figure>
                        </a>
                    </div>
                    <!-- profile picture end -->

                    <div class="unorder-list-info">
                        <h3 class="list-title"><a href="#">Travel The World</a></h3>
                        <p class="list-subtitle"><a href="#">adventure</a></p>
                    </div>
                    <button class="like-button active">
                        <img class="heart" src="assets/images/icons/heart.png" alt="">
                        <img class="heart-color" src="assets/images/icons/heart-color.png" alt="">
                    </button>
                </li>
                <li class="unorder-list">
                    <!-- profile picture end -->
                    <div class="profile-thumb">
                        <a href="#">
                            <figure class="profile-thumb-small">
                                <img src="../../assets/img/profile4.jpg" alt="profile picture">
                            </figure>
                        </a>
                    </div>
                    <!-- profile picture end -->

                    <div class="unorder-list-info">
                        <h3 class="list-title"><a href="#">Foodcort Nirala</a></h3>
                        <p class="list-subtitle"><a href="#">food</a></p>
                    </div>
                    <button class="like-button">
                        <img class="heart" src="assets/images/icons/heart.png" alt="">
                        <img class="heart-color" src="assets/images/icons/heart-color.png" alt="">
                    </button>
                </li>
                <li class="unorder-list">
                    <!-- profile picture end -->
                    <div class="profile-thumb">
                        <a href="#">
                            <figure class="profile-thumb-small">
                                <img src="../../assets/img/profile4.jpg" alt="profile picture">
                            </figure>
                        </a>
                    </div>
                    <!-- profile picture end -->

                    <div class="unorder-list-info">
                        <h3 class="list-title"><a href="#">Rolin Theitar</a></h3>
                        <p class="list-subtitle"><a href="#">drama</a></p>
                    </div>
                    <button class="like-button">
                        <img class="heart" src="assets/images/icons/heart.png" alt="">
                        <img class="heart-color" src="assets/images/icons/heart-color.png" alt="">
                    </button>
                </li>
                <li class="unorder-list">
                    <!-- profile picture end -->
                    <div class="profile-thumb">
                        <a href="#">
                            <figure class="profile-thumb-small">
                                <img src="../../assets/img/profile4.jpg" alt="profile picture">
                            </figure>
                        </a>
                    </div>
                    <!-- profile picture end -->

                    <div class="unorder-list-info">
                        <h3 class="list-title"><a href="#">Active Mind</a></h3>
                        <p class="list-subtitle"><a href="#">fitness</a></p>
                    </div>
                    <button class="like-button">
                        <img class="heart" src="assets/images/icons/heart.png" alt="">
                        <img class="heart-color" src="assets/images/icons/heart-color.png" alt="">
                    </button>
                </li>
            </ul>
        </div>
    </div>
    <!-- widget single item end -->

    <!-- widget single item start -->
    <div class="card widget-item">
        <h4 class="widget-title">latest top news</h4>
        <div class="widget-body">
            <ul class="like-page-list-wrapper">
                <li class="unorder-list">
                    <!-- profile picture end -->
                    <div class="profile-thumb">
                        <a href="#">
                            <figure class="profile-thumb-small">
                                <img src="../../assets/img/profile4.jpg" alt="profile picture">
                            </figure>
                        </a>
                    </div>
                    <!-- profile picture end -->

                    <div class="unorder-list-info">
                        <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                        <p class="list-subtitle">2 min ago</p>
                    </div>
                </li>
                <li class="unorder-list">
                    <!-- profile picture end -->
                    <div class="profile-thumb">
                        <a href="#">
                            <figure class="profile-thumb-small">
                                <img src="../../assets/img/profile4.jpg" alt="profile picture">
                            </figure>
                        </a>
                    </div>
                    <!-- profile picture end -->

                    <div class="unorder-list-info">
                        <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                        <p class="list-subtitle">20 min ago</p>
                    </div>
                </li>
                <li class="unorder-list">
                    <!-- profile picture end -->
                    <div class="profile-thumb">
                        <a href="#">
                            <figure class="profile-thumb-small">
                                <img src="../../assets/img/profile4.jpg" alt="profile picture">
                            </figure>
                        </a>
                    </div>
                    <!-- profile picture end -->

                    <div class="unorder-list-info">
                        <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                        <p class="list-subtitle">30 min ago</p>
                    </div>
                </li>
                <li class="unorder-list">
                    <!-- profile picture end -->
                    <div class="profile-thumb">
                        <a href="#">
                            <figure class="profile-thumb-small">
                                <img src="../../assets/img/profile4.jpg" alt="profile picture">
                            </figure>
                        </a>
                    </div>
                    <!-- profile picture end -->

                    <div class="unorder-list-info">
                        <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                        <p class="list-subtitle">40 min ago</p>
                    </div>
                </li>
                <li class="unorder-list">
                    <!-- profile picture end -->
                    <div class="profile-thumb">
                        <a href="#">
                            <figure class="profile-thumb-small">
                                <img src="../../assets/img/profile4.jpg" alt="profile picture">
                            </figure>
                        </a>
                    </div>
                    <!-- profile picture end -->

                    <div class="unorder-list-info">
                        <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                        <p class="list-subtitle">39 min ago</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- widget single item end -->
</aside>





<!-- Right bar -->

<div class="col-lg-3 order-3">

    <aside class="widget-area">
        <!-- widget single item start -->
        <div class="card widget-item">
            <h4 class="widget-title">Recent Notifications</h4>
            <div class="widget-body">
                <ul class="like-page-list-wrapper">
                    <li class="unorder-list">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                            <a href="#">
                                <figure class="profile-thumb-small">
                                    <img src="../../assets/img/profile4.jpg" alt="profile picture">
                                </figure>
                            </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="unorder-list-info">
                            <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                            <p class="list-subtitle">5 min ago</p>
                        </div>
                    </li>
                    <li class="unorder-list">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                            <a href="#">
                                <figure class="profile-thumb-small">
                                    <img src="../../assets/img/profile4.jpg" alt="profile picture">
                                </figure>
                            </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="unorder-list-info">
                            <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                            <p class="list-subtitle">10 min ago</p>
                        </div>
                    </li>
                    <li class="unorder-list">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                            <a href="#">
                                <figure class="profile-thumb-small">
                                    <img src="../../assets/img/profile4.jpg" alt="profile picture">
                                </figure>
                            </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="unorder-list-info">
                            <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                            <p class="list-subtitle">18 min ago</p>
                        </div>
                    </li>
                    <li class="unorder-list">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                            <a href="#">
                                <figure class="profile-thumb-small">
                                    <img src="../../assets/img/profile4.jpg" alt="profile picture">
                                </figure>
                            </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="unorder-list-info">
                            <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                            <p class="list-subtitle">25 min ago</p>
                        </div>
                    </li>
                    <li class="unorder-list">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                            <a href="#">
                                <figure class="profile-thumb-small">
                                    <img src="../../assets/img/profile4.jpg" alt="profile picture">
                                </figure>
                            </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="unorder-list-info">
                            <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                            <p class="list-subtitle">39 min ago</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- widget single item end -->

        <!-- widget single item start -->
        <div class="card widget-item">
            <h4 class="widget-title">Advertizement</h4>
            <div class="widget-body">
                <div class="add-thumb">
                    <a href="#">
                        <img src="assets/images/banner/advertise.jpg" alt="advertisement">
                    </a>
                </div>
            </div>
        </div>
        <!-- widget single item end -->

        <!-- widget single item start -->
        <div class="card widget-item">
            <h4 class="widget-title">Friends Zone</h4>
            <div class="widget-body">
                <ul class="like-page-list-wrapper">
                    <li class="unorder-list">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                            <a href="#">
                                <figure class="profile-thumb-small">
                                    <img src="../../assets/img/profile4.jpg" alt="profile picture">
                                </figure>
                            </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="unorder-list-info">
                            <h3 class="list-title"><a href="#">Ammeya Jakson</a></h3>
                            <p class="list-subtitle"><a href="#">10 mutual</a></p>
                        </div>
                        <button class="like-button">
                            <img class="heart" src="assets/images/icons/heart.png" alt="">
                            <img class="heart-color" src="assets/images/icons/heart-color.png" alt="">
                        </button>
                    </li>
                    <li class="unorder-list">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                            <a href="#">
                                <figure class="profile-thumb-small">
                                    <img src="../../assets/img/profile4.jpg" alt="profile picture">
                                </figure>
                            </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="unorder-list-info">
                            <h3 class="list-title"><a href="#">Jashon Muri</a></h3>
                            <p class="list-subtitle"><a href="#">2 mutual</a></p>
                        </div>
                        <button class="like-button active">
                            <img class="heart" src="assets/images/icons/heart.png" alt="">
                            <img class="heart-color" src="assets/images/icons/heart-color.png" alt="">
                        </button>
                    </li>
                    <li class="unorder-list">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                            <a href="#">
                                <figure class="profile-thumb-small">
                                    <img src="../../assets/img/profile4.jpg" alt="profile picture">
                                </figure>
                            </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="unorder-list-info">
                            <h3 class="list-title"><a href="#">Rolin Theitar</a></h3>
                            <p class="list-subtitle"><a href="#">drama</a></p>
                        </div>
                        <button class="like-button">
                            <img class="heart" src="assets/images/icons/heart.png" alt="">
                            <img class="heart-color" src="assets/images/icons/heart-color.png" alt="">
                        </button>
                    </li>
                    <li class="unorder-list">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                            <a href="#">
                                <figure class="profile-thumb-small">
                                    <img src="../../assets/img/profile4.jpg" alt="profile picture">
                                </figure>
                            </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="unorder-list-info">
                            <h3 class="list-title"><a href="#">Active Mind</a></h3>
                            <p class="list-subtitle"><a href="#">fitness</a></p>
                        </div>
                        <button class="like-button">
                            <img class="heart" src="assets/images/icons/heart.png" alt="">
                            <img class="heart-color" src="assets/images/icons/heart-color.png" alt="">
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <!-- widget single item end -->
    </aside>

</div>




<!-- Mid wala -->
<div class="col-md-8 col-lg-6 vstack gap-4">
    <!-- share box start -->
    <div class="card card-small">
        <div class="share-box-inner">
            <!-- profile picture end -->
            <div class="profile-thumb">
                <a href="#">
                    <figure class="profile-thumb-middle">
                        <img src="../../assets/img/profile4.jpg" alt="profile picture">
                    </figure>
                </a>
            </div>
            <!-- profile picture end -->

            <!-- share content box start -->
            <div class="share-content-box w-100">
                <form class="share-text-box">
                    <textarea name="share" class="share-text-field" aria-disabled="true" placeholder="Say Something" data-bs-toggle="modal" data-bs-target="#textbox" id="email"></textarea>
                    <button class="btn-share" type="submit">share</button>
                </form>
            </div>
            <!-- share content box end -->

            <!-- Modal start -->
            <div class="modal fade" id="textbox" aria-labelledby="textbox">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Share Your Mood</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body custom-scroll">
                            <textarea name="share" class="share-field-big custom-scroll" placeholder="Say Something"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="post-share-btn" data-bs-dismiss="modal">cancel</button>
                            <button type="button" class="post-share-btn">post</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal end -->
        </div>
    </div>
    <!-- share box end -->

    <!-- post status start -->
    <div class="card">
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
                <h6 class="author"><a href="profile.html">merry watson</a></h6>
                <span class="post-time">20 min ago</span>
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
            <div class="post-thumb-gallery">
                <figure class="post-thumb img-popup">
                    <a href="assets/images/post/post-1.jpg">
                        <img src="../../assets/img/post2.jpg" alt="post image">
                    </a>
                </figure>
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
    <div class="card">
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
    <div class="card">
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
    <div class="card">
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
    <div class="card">
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
    <div class="card">
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
    <div class="card">
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
    <div class="card">
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




<!-- Card START -->
<div class="col-md-6 col-lg-12">
    <div class="card rounded">
        <!-- Card header START -->
        <div class="card-header d-flex justify-content-between border-0">
            <h5 class="card-title"> Experience </h5>
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











<!-- /* body{ */
    /* background: rgb(255,255,255);
background: radial-gradient(circle, rgba(255,255,255,1) 0%, rgba(218,218,218,1) 50%, rgba(219,219,219,1) 100%); */

/* background: rgb(238,174,202);
background: linear-gradient(90deg, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%); */

/* background: rgb(255,155,199);
background: linear-gradient(90deg, rgba(255,155,199,1) 0%, rgba(213,141,242,1) 49%, rgba(78,132,245,1) 100%); */

/* background: rgb(155,239,255);
background: linear-gradient(90deg, rgba(155,239,255,1) 0%, rgba(220,184,235,0.8463760504201681) 49%, rgba(129,239,242,1) 100%); */

    /* background-color: #dad8d8a4 !important; */
/* } */

/************************* For Sign Up Form ************************************/

/* .main_container{
    display: flex;
    align-items: center;
    justify-content: center;
    margin: auto;
    height: 100vh;
} */

/* .form_img{
    width: 400px;
} */



/* .form_container{
    width: 00px;

    display: flex;
    align-items: center;
    justify-content: center;

    background-color: rgba(87, 87, 87, 0.336);
    padding: 40px;
    backdrop-filter: blur(10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    color: #fff;
    gap: 40px;
}

.form_img img{
    width: 400px;
}

input{
    width: 100%;
} */ -->




<!-- Profile Page ke main ke andar ka content -->
<div class="main-wrapper">
    <div class="profile-banner-large bg-img" data-bg="../../assets/img/banner.jpg" style="background-image: url(&quot;../../assets/img/banner.jpg&quot;);">
    </div>
    <div class="profile-menu-area bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3">
                    <div class="profile-picture-box">
                        <figure class="profile-picture">
                            <a href="profile.html">
                                <img src="../../assets/img/profile2.jpg" alt="profile picture">
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 offset-lg-1">
                    <div class="profile-menu-wrapper">
                        <div class="main-menu-inner header-top-navigation">
                            <nav>
                                <ul class="main-menu">
                                    <li class="active"><a href="#">timeline</a></li>
                                    <li><a href="about.html">about</a></li>
                                    <li><a href="photos.html">photos</a></li>
                                    <li><a href="friends.html">friends</a></li>
                                    <li><a href="about.html">more</a></li>
                                    <!-- <li class="d-inline-block d-md-none"><a href="profile.html">edit profile</a></li> -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 d-none d-md-block">
                    <div class="profile-edit-panel">
                        <button class="edit-btn">edit profile</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 order-2 order-lg-1">
                <aside class="widget-area profile-sidebar">
                    <!-- widget single item start -->
                    <div class="card widget-item">
                        <h4 class="widget-title">Erik Jhonson</h4>
                        <div class="widget-body">
                            <div class="about-author">
                                <p>I Don’t know how? But i believe that it is possible one day if i stay with my dream all time</p>
                                <ul class="author-into-list">
                                    <li><a href="#"><i class="bi bi-office-bag"></i>Web Developer</a></li>
                                    <li><a href="#"><i class="bi bi-home"></i>Melbourne, Australia</a></li>
                                    <li><a href="#"><i class="bi bi-location-pointer"></i>Pulshar, Melbourne</a></li>
                                    <li><a href="#"><i class="bi bi-heart-beat"></i>Travel, Swimming</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- widget single item end -->

                    <!-- widget single item start -->
                    <div class="card widget-item">
                        <h4 class="widget-title">Sweets Memories</h4>
                        <div class="widget-body">
                            <div class="sweet-galley img-gallery">
                                <div class="row row-5">
                                    <div class="col-4">
                                        <div class="gallery-tem">
                                            <figure class="post-thumb">
                                                <a class="gallery-selector" href="assets/images/gallery/gallery-1.jpg">
                                                    <img src="../../assets/img/post4.jpg" alt="sweet memory">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="gallery-tem">
                                            <figure class="post-thumb">
                                                <a class="gallery-selector" href="assets/images/gallery/gallery-2.jpg">
                                                    <img src="../../assets/img/post4.jpg" alt="sweet memory">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="gallery-tem">
                                            <figure class="post-thumb">
                                                <a class="gallery-selector" href="assets/images/gallery/gallery-3.jpg">
                                                    <img src="../../assets/img/post4.jpg" alt="sweet memory">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="gallery-tem">
                                            <figure class="post-thumb">
                                                <a class="gallery-selector" href="assets/images/gallery/gallery-4.jpg">
                                                    <img src="../../assets/img/post4.jpg" alt="sweet memory">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="gallery-tem">
                                            <figure class="post-thumb">
                                                <a class="gallery-selector" href="assets/images/gallery/gallery-5.jpg">
                                                    <img src="../../assets/img/post4.jpg" alt="sweet memory">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="gallery-tem">
                                            <figure class="post-thumb">
                                                <a class="gallery-selector" href="assets/images/gallery/gallery-6.jpg">
                                                    <img src="../../assets/img/post4.jpg" alt="sweet memory">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="gallery-tem">
                                            <figure class="post-thumb">
                                                <a class="gallery-selector" href="assets/images/gallery/gallery-7.jpg">
                                                    <img src="../../assets/img/post4.jpg" alt="sweet memory">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="gallery-tem">
                                            <figure class="post-thumb">
                                                <a class="gallery-selector" href="assets/images/gallery/gallery-8.jpg">
                                                    <img src="../../assets/img/post4.jpg" alt="sweet memory">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="gallery-tem">
                                            <figure class="post-thumb">
                                                <a class="gallery-selector" href="assets/images/gallery/gallery-9.jpg">
                                                    <img src="../../assets/img/profile4.jpg" alt="sweet memory">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- widget single item end -->

                    <!-- widget single item start -->
                    <div class="card widget-item">
                        <h4 class="widget-title">page you may like</h4>
                        <div class="widget-body">
                            <ul class="like-page-list-wrapper">
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="../../assets/img/profile4.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Travel The World</a></h3>
                                        <p class="list-subtitle"><a href="#">adventure</a></p>
                                    </div>
                                    <button class="like-button active">
                                        <img class="heart" src="assets/images/icons/heart.png" alt="">
                                        <img class="heart-color" src="assets/images/icons/heart-color.png" alt="">
                                    </button>
                                </li>
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="../../assets/img/profile4.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Foodcort Nirala</a></h3>
                                        <p class="list-subtitle"><a href="#">food</a></p>
                                    </div>
                                    <button class="like-button">
                                        <img class="heart" src="assets/images/icons/heart.png" alt="">
                                        <img class="heart-color" src="assets/images/icons/heart-color.png" alt="">
                                    </button>
                                </li>
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="../../assets/img/profile4.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Rolin Theitar</a></h3>
                                        <p class="list-subtitle"><a href="#">drama</a></p>
                                    </div>
                                    <button class="like-button">
                                        <img class="heart" src="assets/images/icons/heart.png" alt="">
                                        <img class="heart-color" src="assets/images/icons/heart-color.png" alt="">
                                    </button>
                                </li>
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="../../assets/img/profile4.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Active Mind</a></h3>
                                        <p class="list-subtitle"><a href="#">fitness</a></p>
                                    </div>
                                    <button class="like-button">
                                        <img class="heart" src="assets/images/icons/heart.png" alt="">
                                        <img class="heart-color" src="assets/images/icons/heart-color.png" alt="">
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- widget single item end -->
                </aside>
            </div>

            <div class="col-lg-6 order-1 order-lg-2">
                <!-- share box start -->
                <div class="card card-small">
                    <div class="share-box-inner">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                            <a href="#">
                                <figure class="profile-thumb-middle">
                                    <img src="../../assets/img/profile4.jpg" alt="profile picture">
                                </figure>
                            </a>
                        </div>
                        <!-- profile picture end -->

                        <!-- share content box start -->
                        <div class="share-content-box w-100">
                            <form class="share-text-box">
                                <textarea name="share" class="share-text-field" aria-disabled="true" placeholder="Say Something" data-bs-toggle="modal" data-bs-target="#textbox" id="email"></textarea>
                                <button class="btn-share" type="submit">share</button>
                            </form>
                        </div>
                        <!-- share content box end -->
                        <!-- Modal start -->
                        <div class="modal fade" id="textbox" aria-labelledby="textbox">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Share Your Mood</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body custom-scroll">
                                        <textarea name="share" class="share-field-big custom-scroll" placeholder="Say Something"></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="post-share-btn" data-bs-dismiss="modal">cancel</button>
                                        <button type="button" class="post-share-btn">post</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal end -->
                    </div>
                </div>
                <!-- share box end -->

                <!-- post status start -->
                <div class="card">
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
                            <h6 class="author"><a href="profile.html">Erik Jhonson</a></h6>
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
                                            <img src="../../assets/img/profile4.jpg" alt="post image">
                                        </a>
                                    </figure>
                                </div>
                                <div class="col-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <figure class="post-thumb">
                                                <a class="gallery-selector" href="assets/images/post/post-3.jpg">
                                                    <img src="../../assets/img/post3.png" alt="post image">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-12">
                                            <figure class="post-thumb">
                                                <a class="gallery-selector" href="assets/images/post/post-4.jpg">
                                                    <img src="../../assets/img/post3.png" alt="post image">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-12">
                                            <figure class="post-thumb">
                                                <a class="gallery-selector" href="assets/images/post/post-5.jpg">
                                                    <img src="../../assets/img/post3.png" alt="post image">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-meta">
                            <button class="post-meta-like">
                                <i class="bi bi-heart-beat"></i>
                                <span>You and 207 people like this</span>
                                <strong>207</strong>
                            </button>
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
                <div class="card">
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
                            <button class="post-meta-like">
                                <i class="bi bi-heart-beat"></i>
                                <span>You and 201 people like this</span>
                                <strong>201</strong>
                            </button>
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
                <div class="card">
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
                        <div class="plyr__video-embed plyr-video">
                            <iframe src="https://www.youtube.com/embed/WeA7edXsU40" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="post-meta">
                            <button class="post-meta-like">
                                <i class="bi bi-heart-beat"></i>
                                <span>You and 201 people like this</span>
                                <strong>201</strong>
                            </button>
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
                <div class="card">
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
                                            <img src="../../assets/img/post4.jpg" alt="post image">
                                        </a>
                                    </figure>
                                </div>
                                <div class="col-6">
                                    <figure class="post-thumb">
                                        <a class="gallery-selector" href="assets/images/post/post-7.jpg">
                                            <img src="../../assets/img/post4.jpg" alt="post image">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="post-meta">
                            <button class="post-meta-like">
                                <i class="bi bi-heart-beat"></i>
                                <span>You and 230 people like this</span>
                                <strong>230</strong>
                            </button>
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
                <div class="card">
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
                            <button class="post-meta-like">
                                <i class="bi bi-heart-beat"></i>
                                <span>You and 250 people like this</span>
                                <strong>250</strong>
                            </button>
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
                <div class="card">
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
                            <h6 class="author"><a href="profile.html">merry watson</a></h6>
                            <span class="post-time">20 min ago</span>
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
                        <div class="post-thumb-gallery">
                            <figure class="post-thumb img-popup">
                                <a href="assets/images/post/post-1.jpg">
                                    <img src="../../assets/img/post3.png" alt="post image">
                                </a>
                            </figure>
                        </div>
                        <div class="post-meta">
                            <button class="post-meta-like">
                                <i class="bi bi-heart-beat"></i>
                                <span>You and 201 people like this</span>
                                <strong>201</strong>
                            </button>
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
                <div class="card">
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
                            <button class="post-meta-like">
                                <i class="bi bi-heart-beat"></i>
                                <span>You and 204 people like this</span>
                                <strong>204</strong>
                            </button>
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

            <div class="col-lg-3 order-3">
                <aside class="widget-area">
                    <!-- widget single item start -->
                    <div class="card widget-item">
                        <h4 class="widget-title">Recent Notifications</h4>
                        <div class="widget-body">
                            <ul class="like-page-list-wrapper">
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="../../assets/img/profile4.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                        <p class="list-subtitle">5 min ago</p>
                                    </div>
                                </li>
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="../../assets/img/profile4.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                        <p class="list-subtitle">10 min ago</p>
                                    </div>
                                </li>
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="../../assets/img/profile4.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                        <p class="list-subtitle">18 min ago</p>
                                    </div>
                                </li>
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="../../assets/img/profile4.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                        <p class="list-subtitle">25 min ago</p>
                                    </div>
                                </li>
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="../../assets/img/profile4.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                        <p class="list-subtitle">39 min ago</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- widget single item end -->

                    <!-- widget single item start -->
                    <div class="card widget-item">
                        <h4 class="widget-title">Advertizement</h4>
                        <div class="widget-body">
                            <div class="add-thumb">
                                <a href="#">
                                    <img src="assets/images/banner/advertise.jpg" alt="advertisement">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- widget single item end -->

                    <!-- widget single item start -->
                    <div class="card widget-item">
                        <h4 class="widget-title">Friends Zone</h4>
                        <div class="widget-body">
                            <ul class="like-page-list-wrapper">
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="../../assets/img/profile4.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">arfim bolt</a></h3>
                                        <p class="list-subtitle"><a href="#">10 mutual</a></p>
                                    </div>
                                    <button class="like-button">
                                        <img class="heart" src="assets/images/icons/heart.png" alt="">
                                        <img class="heart-color" src="assets/images/icons/heart-color.png" alt="">
                                    </button>
                                </li>
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="../../assets/img/profile4.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">marry wither</a></h3>
                                        <p class="list-subtitle"><a href="#">02 mutual</a></p>
                                    </div>
                                    <button class="like-button active">
                                        <img class="heart" src="assets/images/icons/heart.png" alt="">
                                        <img class="heart-color" src="assets/images/icons/heart-color.png" alt="">
                                    </button>
                                </li>
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="../../assets/img/profile4.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Rolin Theitar</a></h3>
                                        <p class="list-subtitle"><a href="#">drama</a></p>
                                    </div>
                                    <button class="like-button">
                                        <img class="heart" src="assets/images/icons/heart.png" alt="">
                                        <img class="heart-color" src="assets/images/icons/heart-color.png" alt="">
                                    </button>
                                </li>
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="../../assets/img/profile4.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Active Mind</a></h3>
                                        <p class="list-subtitle"><a href="#">fitness</a></p>
                                    </div>
                                    <button class="like-button">
                                        <img class="heart" src="assets/images/icons/heart.png" alt="">
                                        <img class="heart-color" src="assets/images/icons/heart-color.png" alt="">
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- widget single item end -->
                </aside>
            </div>
        </div>
    </div>
</div>





<!-- Naye wala main from Profile page -->

<div class="row g-4">

    <!-- Main content START -->
    <div class="col-lg-8 vstack gap-4">
        <!-- My profile START -->
        <div class="card">
            <!-- Cover image -->
            <div class="h-200px rounded-top" style="background-image:url(assets/images/bg/05.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;"></div>
            <!-- Card body START -->
            <div class="card-body py-0">
                <div class="d-sm-flex align-items-start text-center text-sm-start">
                    <div>
                        <!-- Avatar -->
                        <div class="avatar avatar-xxl mt-n5 mb-3">
                            <img class="avatar-img rounded-circle border border-white border-3" src="assets/images/avatar/07.jpg" alt="">
                        </div>
                    </div>
                    <div class="ms-sm-4 mt-sm-3">
                        <!-- Info -->
                        <h1 class="mb-0 h5">Sam Lanson <i class="bi bi-patch-check-fill text-success small"></i></h1>
                        <p>250 connections</p>
                    </div>
                    <!-- Button -->
                    <div class="d-flex mt-3 justify-content-center ms-sm-auto">
                        <button class="btn btn-danger-soft me-2" type="button"> <i class="bi bi-pencil-fill pe-1"></i> Edit profile </button>
                        <div class="dropdown">
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
                <!-- List profile -->
                <ul class="list-inline mb-0 text-center text-sm-start mt-3 mt-sm-0">
                    <li class="list-inline-item"><i class="bi bi-briefcase me-1"></i> Lead Developer</li>
                    <li class="list-inline-item"><i class="bi bi-geo-alt me-1"></i> New Hampshire</li>
                    <li class="list-inline-item"><i class="bi bi-calendar2-plus me-1"></i> Joined on Nov 26, 2019</li>
                </ul>
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
        <div class="card card-body">
            <div class="d-flex mb-3">
                <!-- Avatar -->
                <div class="avatar avatar-xs me-2">
                    <a href="#"> <img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg" alt=""> </a>
                </div>
                <!-- Post input -->
                <form class="w-100">
                    <input class="form-control pe-4 border-0" placeholder="Share your thoughts..." data-bs-toggle="modal" data-bs-target="#modalCreateFeed">
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
        <div class="card">
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
        <div class="card">

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
                <div class="card">
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
                            <li> <i class="bi bi-envelope fa-fw pe-1"></i> Email: <strong> webestica@gmail.com </strong> </li>
                        </ul>
                    </div>
                    <!-- Card body END -->
                </div>
            </div>
            <!-- Card END -->

            <!-- Card START -->
            <div class="col-md-6 col-lg-12">
                <div class="card">
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
                <div class="card">
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
                <div class="card">
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