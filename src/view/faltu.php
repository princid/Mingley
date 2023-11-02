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