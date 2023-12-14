<?php

include("../config/connectDB.php");


?>

<?php

$receiver = $_GET['receive'];
$sender   = $_GET['send'];

$chatArea_query = "SELECT * FROM msg_table LEFT JOIN users_table ON users_table.id = msg_table.sender_id WHERE receiver_id = '$receiver' AND sender_id = '$sender' OR sender_id = '$receiver' AND receiver_id = '$sender' ORDER BY msg_id ASC ";
$chatArea_result = mysqli_query($conn, $chatArea_query);
if ($chatArea_result) {
    foreach ($chatArea_result as $msg) {

        $chatUser_id   = $msg["id"];
        $chatUser_owner = $msg['user_name'];
        $show_msg      = nl2br($msg["text_message"]);
        $msg_time      = $msg["curr_date"] . " - " . $msg["curr_time"];
        $profile_pic   = $msg["user_profile_pic"];

        if ($sender == $msg["id"]) {
?>

            <div class="item-group-you d-flex">
                <?php if (!empty($profile_pic)) { ?>
                    <img title="<?= $chatUser_owner; ?>" class="avatar-img rounded-circle" src="<?= BASE_URL ?>assets/profile_pic/<?= $chatUser_id . "/" . $profile_pic; ?>" alt="" style="width: 3rem; height: 3rem;">

                <?php } else { ?>
                    <img title="<?= $chatUser_owner; ?>" class="avatar-img rounded-circle" src="<?= BASE_URL ?>assets/profile_pic/profileDummy.png" alt="" style="width: 3rem;">

                <?php } ?>
                <div class="text-message-you">
                    <?php echo $show_msg; ?>
                </div>
                <p class="time-track-you">
                    <?php echo $msg_time ?>
                </p>
            </div>
        <?php } else { ?>
            <div class=" item-group-other d-flex">
                <?php if (!empty($profile_pic)) { ?>
                    <img title="<?= $chatUser_owner; ?>" class="avatar-img rounded-circle" src="<?= BASE_URL ?>assets/profile_pic/<?= $chatUser_id . "/" . $profile_pic; ?>" alt="" style="width: 3rem; height: 3rem;">

                <?php } else { ?>
                    <img title="<?= $chatUser_owner; ?>" class="avatar-img rounded-circle" src="<?= BASE_URL ?>assets/profile_pic/profileDummy.png" alt="" style="width: 3rem;">

                    <?php } ?>
                    <div class="text-message-other">
                        <?php echo $show_msg; ?>
                    </div>
                    <p class="time-track-other">
                        <?php echo $msg_time ?>
                    </p>
            </div>

<?php }
    }
} ?>