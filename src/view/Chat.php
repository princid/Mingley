<?php

session_start();

$title = "Chat with your Friends";

require("Navbar.php");

require_once("../controller/getAllUserRecord.php");

// var_dump($fetch_user_result);

// var_dump($fetch_user_result[2]['user_profile_pic']);

// $user_profile_pic

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
                                    <h5 class="card-title mb-0">Previous Chats :</h5>
                                </div>
                                <!-- Card header END -->

                                <!-- Card body START -->
                                <div class="card_body">

                                    <?php foreach ($fetch_user_result as $chat_friend) {

                                        // $post_id = $feed_post_data["post_id"];
                                        $chat_user_id = $chat_friend["id"];
                                        $chat_user_name = $chat_friend["user_name"];
                                        $chat_user_full_name = $chat_friend['first_name'] . " " . $chat_friend['last_name'];
                                        $chat_user_pic = $chat_friend['user_profile_pic'];
                                        $chat_user_bio = $chat_friend['user_bio'];


                                    ?>

                                        <?php if ($chat_user_id != $_SESSION['id']) { ?>
                                            <!-- Connection item START -->
                                            <div class="hstack gap-2 mb-3 mt-3">
                                                <!-- Avatar -->
                                                <div class="avatar">

                                                    <?php if (!empty($chat_user_pic)) { ?>
                                                        <img class="avatar-img rounded-circle" src="<?= BASE_URL ?>assets/profile_pic/<?= $chat_user_id . "/" . $chat_user_pic; ?>" alt="">
                                                    <?php } else { ?>
                                                        <img class="avatar-img rounded-circle" src="<?= BASE_URL ?>assets/profile_pic/profileDummy.png" alt="">
                                                    <?php } ?>

                                                </div>
                                                <!-- Title -->
                                                <div class="overflow-hidden">

                                                    <h4 class="h6 mb-0"><?= $chat_user_full_name; ?></h4>
                                                    <p title="<?= $chat_user_bio; ?>" class="mb-0 small text-truncate"><?= $chat_user_bio; ?></p>

                                                </div>
                                                <!-- Button -->

                                                <?php if (!empty($chat_user_pic)) { ?>
                                                    <a class="btn icon-md chatUserBtn" href="#" data-username="<?= $chat_user_name; ?>" data-profile-pic="<?= BASE_URL ?>assets/profile_pic/<?= $chat_user_id . "/" . $chat_user_pic; ?>"><i class="fa-solid fa-angle-right"></i></a>
                                                <?php } else { ?>
                                                    <a class="btn icon-md chatUserBtn" href="#" data-username="<?= $chat_user_name; ?>" data-profile-pic="<?= BASE_URL ?>assets/profile_pic/profileDummy.png"><i class="fa-solid fa-angle-right"></i></a>
                                                <?php } ?>

                                            </div>
                                            <hr>
                                            <!-- Connection item END -->

                                        <?php } ?>
                                    <?php } ?>

                                    <!-- View more button -->
                                    <div class=" d-grid mt-3">
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
                        <div class="d-flex mb-3 fw-bold" style="align-items: center;">
                            <!-- Avatar -->
                            <div class="avatar avatar-xs me-2 chatUserPic">

                            </div>

                            <div class="chatUser">

                            </div>
                        </div>
                        <!-- <hr class="divider"> -->

                        <div class="chatArea">
                            <p>sdhfsdf</p>
                        </div>

                        <div class="chatInputArea">
                            <div class="d-flex mb-3" style="align-items: center;">
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
                                <!-- chat input box -->
                                <form class="nav nav-item w-100 position-relative">
                                    <textarea class="form-control" id="" placeholder="Message..." rows="2"></textarea>
                                    <!-- <textarea type="text" name="" id="" class="form-control pe-5 bg-light" rows="1" placeholder="Message..."> -->
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


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Select all elements with the class 'chatUserBtn'
        const chatUserBtns = document.querySelectorAll('.chatUserBtn');

        // Function to update chat user div
        function updateChatUser(username, profilePic) {
            const chatUserDiv = document.querySelector('.chatUser');
            chatUserDiv.textContent = '@' + username;

            const chatUserPicDiv = document.querySelector('.chatUserPic');
            if (profilePic !== null && profilePic !== "") {
                chatUserPicDiv.innerHTML = `<img class="avatar-img rounded-circle" src="${profilePic}" alt="">`;
            } else {
                // Show the dummy image if profilePic is not available
                chatUserPicDiv.innerHTML = `<img class="avatar-img rounded-circle" src="<?= BASE_URL ?>assets/profile_pic/profileDummy.png" alt="">`;
            }
        }

        // Add click event listener to each button
        chatUserBtns.forEach(function(button) {
            button.addEventListener('click', function(event) {
                // Prevent the default behavior of the anchor tag
                event.preventDefault();

                // Get the username and profilePic from the data attributes
                const username = button.getAttribute('data-username');
                const profilePic = button.getAttribute('data-profile-pic');

                // Update the chat user div with username and profilePic
                updateChatUser(username, profilePic);
            });
        });

        // Trigger a click event on the top-most chat user button after page load
        const topMostChatUserBtn = chatUserBtns[0];
        if (topMostChatUserBtn) {
            const defaultUsername = topMostChatUserBtn.getAttribute('data-username');
            const defaultProfilePic = topMostChatUserBtn.getAttribute('data-profile-pic');
            updateChatUser(defaultUsername, defaultProfilePic);
        }
    });
</script>


<!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Select all elements with the class 'chatUserBtn'
        const chatUserBtns = document.querySelectorAll('.chatUserBtn');

        // Function to update chat user div
        function updateChatUser(username, profilePic) {
            const chatUserDiv = document.querySelector('.chatUser');
            chatUserDiv.textContent = '@' + username;

            const chatUserPicDiv = document.querySelector('.chatUserPic');
            const imageSrc = profilePic || 'http://localhost/PHP_Assesments/Mingley/assets/profile_pic/profileDummy.png';
            chatUserPicDiv.innerHTML = `<img class="avatar-img rounded-circle" src="${imageSrc}" alt="">`;
        }

        // Add click event listener to each button
        chatUserBtns.forEach(function(button) {
            button.addEventListener('click', function(event) {
                // Prevent the default behavior of the anchor tag
                event.preventDefault();

                // Get the username and profilePic from the data attributes
                const username = button.getAttribute('data-username');
                const profilePic = button.getAttribute('data-profile-pic');

                // Update the chat user div with username and profilePic
                updateChatUser(username, profilePic);
            });
        });

        // Trigger a click event on the top-most chat user button after page load
        const topMostChatUserBtn = chatUserBtns[0];
        if (topMostChatUserBtn) {
            const defaultUsername = topMostChatUserBtn.getAttribute('data-username');
            const defaultProfilePic = topMostChatUserBtn.getAttribute('data-profile-pic');
            updateChatUser(defaultUsername, defaultProfilePic);
        }
    });
</script> -->