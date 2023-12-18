<?php

session_start();

$title = "Log In";

require_once('../../includes/Header.php');

require_once("../../config/constants.php");

// if ($_SESSION['id']) {
//     header("location: HomeFeed.php");
//     // exit();
// }

?>


<div class="container mt-5">

    <?php if (isset($_SESSION['message']) || isset($_SESSION['error'])) { ?>
        <div class="alertBox">
            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-success" role="alert">
                    <h1><?php echo $_SESSION['message']; ?></h1>
                </div>
            <?php } elseif (isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <h1><?php echo $_SESSION['error']; ?></h1>
                </div>
            <?php } ?>

            <?php unset($_SESSION['message']); ?>
            <?php unset($_SESSION['error']); ?>
        </div>
    <?php } ?>
    <div id="msg"></div>

    <div class=" form-signin w-100 h-75 d-flex flex-col align-items-center justify-content-center text-center">
        <form class="w-50" method="post" action="<?= BASE_URL ?>src/controller/SigninHandler.php">
            <div class=""><i class="fa-solid fa-user-plus signIn-topImg"></i></div>
            <p class="h3 my-3 fw-normal">Welcome to <span class="brand_name"><strong>Mingley</strong></span>, Log In Now!</p>

            <div class="form-floating">
                <input type="email" class="form-control " name="email" id="email" placeholder="name@example.com">
                <label for="emailInput" class="primary-text">Email address</label>
            </div>

            <div class="form-floating my-2 position-relative">
                <input type="password" class="form-control " name="password" id="password" placeholder="Password">
                <label for="passwordInput" class="primary-text">Password</label>
                <i class="fa-regular fa-eye position-absolute passEye"></i>
            </div>

            <div class="checkbox my-3">
                <label>
                    <input class="w-auto" type="checkbox" value="acceptTC" name="termCond" id="termCond"> Remember Me
                </label>
            </div>
            <input class="w-100 signBtn" type="submit" name="Submit" value="LOG IN">
            <p class="text mt-3">New Here? <a href="<?= BASE_URL ?>src/view/SignUp.php" class=" text-muted text-decoration-none"><strong>Sign Up Now!</strong></a></p>
        </form>
    </div>
</div>

<script src="../../assets/js/alertMessage.js"></script>


<script>
    const passEye = document.querySelector('.passEye');

    passEye.addEventListener('click', () => {
        const input = document.querySelector('#password');

        if (input.getAttribute('type') === 'password') {
            input.setAttribute('type', 'text');
            passEye.classList.remove('fa-eye');
            passEye.classList.add('fa-eye-slash');
        } else {
            input.setAttribute('type', 'password');
            passEye.classList.remove('fa-eye-slash');
            passEye.classList.add('fa-eye');
        }

    });
</script>

<?php
require_once("../../includes/Footer.php");
?>