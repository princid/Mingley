<?php

session_start();

$title = "Chat with other Minglers";
$active_item = 2;

require_once("../../includes/Header.php");

require("Navbar.php");

require_once("../model/Query.php");

// require_once("../controller/getAllUserRecord.php");

$loggedInUserId = $_SESSION['id'];

// Check if both sender and receiver parameters are set
if (isset($_GET['sender']) && isset($_GET['receiver'])) {
    $sender   = $_GET["sender"];
    $receiver = $_GET["receiver"];

    // Check if the logged-in user is the sender
    if ($sender != $loggedInUserId) {
        echo "<script>window.location='HomeFeed.php';</script>";
        exit();
    }

    // Check if the receiver ID exists in the database
    $receiverInfoQuery = "SELECT * FROM users_table WHERE id = $receiver";
    $receiverInfoQuery_run = mysqli_query($conn, $receiverInfoQuery);

    if (!$receiverInfoQuery_run || mysqli_num_rows($receiverInfoQuery_run) === 0) {
        // Redirect to HomeFeed.php if the receiver ID doesn't exist
        echo "<script>window.location='HomeFeed.php';</script>";
        exit();
    }

    // Check if the receiver ID is the same as the sender ID
    if ($receiver == $loggedInUserId) {
        // Redirect to HomeFeed.php if the receiver ID matches the logged-in user's ID
        echo "<script>window.location='HomeFeed.php';</script>";
        exit();
    }

    // Check if the receiver's account is deleted
    $checkQuery = "SELECT is_deleted FROM users_table WHERE id = $receiver";
    $checkQuery_run = mysqli_query($conn, $checkQuery);

    if ($checkQuery_run) {
        $row = mysqli_fetch_assoc($checkQuery_run);

        if ($row['is_deleted'] == 1) {
            // Redirect to HomeFeed.php if the receiver's account is deleted
            echo "<script>window.location='HomeFeed.php';</script>";
            exit();
        }
    }
}


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

                <?php
                include('../../includes/ChatSideBar.php');
                ?>

                <!-- Mid Post Section Starts here -->
                <div class="col-md-8 col-lg-6 vstack gap-1">
                    <!-- chat box start -->
                    <div class="card card-body rounded-2">
                        <div class="d-flex mb-3 fw-bold gap-3" style="align-items: center;">

                            <?php
                            $query = "SELECT * FROM users_table WHERE users_table.id = '$receiver' ";
                            $result = mysqli_query($conn, $query);
                            if ($result) {
                                foreach ($result as $list) {
                                    $full_name         = $list["first_name"] . " " . $list["last_name"];
                                    $username          = $list['user_name'];
                                    $profile_pic       = $list["user_profile_pic"];
                                    $list_id           = $list["id"];
                                    $friend_profileUrl = "FriendProfile.php?user_id=" . $list_id;
                            ?>
                                    <?php if (!empty($profile_pic)) { ?>
                                        <a href="<?= $friend_profileUrl; ?>">
                                            <img class="avatar-img rounded-circle" src="<?= BASE_URL ?>assets/profile_pic/<?= $list_id . "/" . $profile_pic; ?>" alt="" style="width: 3rem; height: 3rem;">
                                        </a>

                                    <?php } else { ?>
                                        <a href="<?= $friend_profileUrl; ?>">
                                            <img class="avatar-img rounded-circle" src="<?= BASE_URL ?>assets/profile_pic/profileDummy.png" alt="" style="width: 3rem;">
                                        </a>

                                    <?php } ?>

                                    <a href="<?= $friend_profileUrl; ?>">
                                        <h6><?= $full_name; ?></h6>
                                        <small>@<?= $username; ?></small>
                                    </a>

                            <?php }
                            } ?>

                        </div>

                        <div class="chatArea">

                            <!-- Loading all the chats here through chat_loader.php file -->
                            <div id="chat_load"></div>

                        </div>

                        <div class="chatInputArea">
                            <div class="d-flex mb-3" style="align-items: center;">
                                <!-- Avatar -->
                                <div class="avatar avatar-xs me-2">
                                    <a href="">
                                        <?php if (!empty($user_profile_pic)) { ?>
                                            <img class="avatar-img rounded-circle" src="<?= BASE_URL ?>assets/profile_pic/<?= $id . "/" . $user_profile_pic; ?>" alt="">
                                        <?php } else { ?>
                                            <img class="avatar-img rounded-circle" src="<?= BASE_URL ?>assets/profile_pic/profileDummy.png" alt="">
                                        <?php } ?>
                                    </a>
                                </div>

                                <!-- chat input box -->
                                <form class="nav nav-item w-100 position-relative" id="chatForm" method="post">
                                    <input type="hidden" id="receive" value="<?php echo $receiver; ?>">
                                    <input type="hidden" id="send" value="<?php echo $sender; ?>">
                                    <textarea class="form-control" id="message" placeholder="Type Message..." rows="2"></textarea>
                                    <button id="chatBtn" class="nav-link bg-transparent px-3 position-absolute top-50 end-0 translate-middle-y border-0" type="submit">
                                        <i class="fa-solid fa-paper-plane"></i>
                                    </button>
                                </form>

                                <div id="msg"></div>
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

<script src="../../assets/js/jquery.js"></script>

<script src="../../assets/js/chatLoad.js"></script>


<?php
require_once("../../includes/Footer.php");
?>