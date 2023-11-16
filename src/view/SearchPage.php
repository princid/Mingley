<?php

session_start();

$title = "Search Users";

$active_item = 3;
require_once("Navbar.php");

require_once("../../config/connectDB.php");

$curr_id = $_SESSION['id'];

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

            <div class="col">

                <div class="table-responsive">
                    <table id="table_id" class="table table-hover table-nowrap display">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Full Name</th>
                                <th scope="col">Username</th>
                                <th scope="col" class="text-end">View Profile</th>
                            </tr>
                        </thead>
                        <tbody class="tabular_card">
                            <?php

                            $search_user_query  = "SELECT * FROM users_table WHERE users_table.id != '$curr_id' ";
                            $search_user_result = mysqli_query($conn, $search_user_query);

                            if ($search_user_result)

                                foreach ($search_user_result as $search_data) {

                                    $user_id          = $search_data["id"];
                                    $user_fullname    = $search_data["first_name"] . " " . $search_data["last_name"];
                                    $user_shortname   = $search_data["user_name"];
                                    $user_profile_pic = $search_data["user_profile_pic"];

                                    $search_profileUrl = "FriendProfile.php?user_id=" . $user_id;

                            ?>

                                <tr data-user-id="<?php echo $user_id; ?>">
                                    <td>
                                        <?php if (!empty($user_profile_pic)) { ?>
                                            <img title="<?php echo $user_shortname; ?>" src="<?php echo BASE_URL ?>assets/profile_pic/<?php echo $user_id . "/" . $user_profile_pic; ?>" alt="" class="avatar avatar-sm rounded-circle me-2">

                                        <?php } else { ?>
                                            <img title="<?php echo $user_shortname; ?>" src="<?php echo BASE_URL ?>assets/profile_pic/profileDummy.png" class="avatar avatar-sm rounded-circle me-2">
                                        <?php } ?>

                                        <a class="text-heading font-semibold" href="<?= $search_profileUrl; ?>">
                                            <?php echo strtoupper($user_fullname); ?>
                                        </a>
                                    </td>

                                    <td>
                                        <?php echo ($user_shortname); ?>
                                    </td>

                                    <td class="text-end">
                                        <a href="<?= $search_profileUrl; ?>"><button type="button" class="btn btn-outline-primary">View Profile</button></a>
                                    </td>

                                </tr>


                            <?php } ?>



                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
    </div>
</main>

<script src="../../assets/js/jquery.js"></script>

<!-- cdn links for jquery table -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        const table = $('#table_id').DataTable({
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

<?php
require_once("../../includes/Footer.php");
?>