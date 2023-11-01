<?php

$title = "Log In";
require_once('../../includes/Header.php');

require_once("../../config/constants.php");

?>


<div class="container mt-5">

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

    <div class=" form-signin w-100 h-75 d-flex flex-col align-items-center justify-content-center text-center">
        <form class="w-50">
            <div class=""><i class="fa-solid fa-user-plus signIn-topImg"></i></div>
            <p class="h3 my-3 fw-normal">Welcome to <strong>Mingley</strong>, Log In</p>

            <div class="form-floating">
                <input type="email" class="form-control " name="email" id="emailInput" placeholder="name@example.com">
                <label for="emailInput" class="primary-text">Email address</label>
            </div>

            <div class="form-floating my-2">
                <input type="password" class="form-control " name="password" id="passwordInput" placeholder="Password">
                <label for="passwordInput" class="primary-text">Password</label>
            </div>

            <div class="checkbox my-3">
                <label>
                    <input class="w-auto" type="checkbox" value="acceptTC" name="termCond" id="termCond"> Remember Me
                </label>
            </div>
            <button class="w-100 signBtn" type="submit">Sign In</button>
            <p class="text-end mt-1">New Here? <a href="<?= BASE_URL ?>src/view/SignUp.php" class=" text-muted text-decoration-none"><strong>Sign Up Now!</strong></a></p>
        </form>
    </div>
</div>

<script>
    const alertBox = document.querySelector(".alertBox");
    // console.log(alertBox);

    // alertBox.innerHTML(``);

    setTimeout(() => {
        alertBox.innerHTML = "";
    }, 3000);
</script>

<?php
require_once("../../includes/Footer.php");
?>