<?php

session_start();

$user_id = $_SESSION['id'];

?>


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

                    <div class="user-list-box gap-2 mb-3 mt-3">
                        <ul>
                            <?php
                            $query = "SELECT * FROM users_table WHERE users_table.id != '$user_id' ";
                            $result = mysqli_query($conn, $query);
                            if ($result) {
                                foreach ($result as $list) {
                                    $full_name = $list["first_name"] . " " . $list["last_name"];
                                    $profile_pic = $list["user_profile_pic"];
                                    $list_id = $list["id"];
                            ?>

                                    <li>
                                        <a href="<?= BASE_URL ?>src/view/Chat.php?sender=<?php echo $user_id; ?>&receiver=<?php echo $list_id; ?>" class="d-flex align-items-center gap-3 mb-3 position-relative">
                                            <?php if (!empty($profile_pic)) { ?>
                                                <img class="avatar-img rounded-circle" src="<?= BASE_URL ?>assets/profile_pic/<?= $list_id . "/" . $profile_pic; ?>" alt="" style="width: 3rem; height: 3rem;">
                                                <i class="fa fa-circle text-success position-absolute rounded-circle border border-white border-3" style="bottom: -5px; left: 30px;"></i>
                                            <?php } else { ?>
                                                <img class="avatar-img rounded-circle" src="<?= BASE_URL ?>assets/profile_pic/profileDummy.png" alt="" style="width: 3rem;">
                                                <i class="fa fa-circle text-success position-absolute rounded-circle border border-white border-3" style="bottom: -5px; left: 30px;"></i>
                                            <?php } ?>
                                            <h6><?= $full_name; ?></h6>
                                        </a>
                                    </li>
                                    <hr>

                            <?php }
                            } ?>
                        </ul>
                    </div>

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