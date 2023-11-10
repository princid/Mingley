<?php

session_start();

$title = "Search Users";

require_once("Navbar.php");


// if (isset($_POST["searchBtn"])) {
//     // $search_query = preg_replace("pattern","replacement","subject");
//     // This code will remove all the special characters from search query for preventing SQL injection.
//     $search_query = preg_replace("#[^a-z 0-9?!]#i", "", $_POST["searchbar"]);

//     header("location: ../controller/search_controller.php");

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


                <form class="navbar-form navbar-left" action="" method="post">
                    <div class="input-group justify-content-center">
                        <div class="form-outline" style="width: 500px;">
                            <input type="text" name="searchbar" id="searchbar" class="form-control h-100" placeholder="Search..." required autocomplete="off" />
                            <!-- <label class="form-label" for="form1">Search</label> -->
                        </div>
                        <button type="submit" name="searchBtn" id="searchBtn" class="btn btn-primary">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>

                <!-- Main content START -->
                <div class="col">

                    <!-- <div class="card card-body rounded-2">

                    </div> -->

                </div>
                <!-- Main content END -->

                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>




            </div>
        </div>

    </div>

</main>