<?php

session_start();

$title = "Create Account";

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

        <form id="signUp_form" class="w-50" name="myForm" method="post" action="<?= BASE_URL ?>src/controller/FormAction.php">

            <div class=""><i class="fa-solid fa-user-plus signIn-topImg"></i></div>
            <p class="h3 my-3 fw-normal">Welcome to <span class="brand_name"><strong>Mingley</strong></span>, Create a Free Account</p>
            <div class="row">
                <div class="col mb-0 ">
                    <div class="form-floating">
                        <input type="text" class="form-control primary-text" id="firstname" placeholder="Firstname" name="firstname">
                        <label for="fnameInput" class="primary-text">Firstname <span class="text-danger"> *</span> </label>
                        <div class="formError firstname"></div>
                    </div>
                </div>
                <div class="col mb-0 ">
                    <div class="form-floating">
                        <input type="text" class="form-control primary-text" id="lastname" placeholder="Lastname" name="lastname">
                        <label for="lnameInput" class="primary-text">Lastname <span class="text-danger"> *</span></label>
                        <div class="formError lastname"></div>
                    </div>
                </div>
            </div>
            <div class="input-group my-2 ">
                <span class="input-group-text primary-text">@</span>
                <div class="form-floating">
                    <input type="text" class="form-control primary-text" id="username" placeholder="Username" name="username">
                    <label for="usernameInput" class="primary-text">Username <span class="text-danger"> *</span></label>
                </div>
            </div>
            <div class="formError username"></div>

            <div class="form-floating">
                <input type="email" class="form-control " name="email" id="email" placeholder="name@example.com">
                <label for="emailInput" class="primary-text">Email address <span class="text-danger"> *</span></label>
                <div class="formError email"></div>
            </div>

            <div class="form-floating my-2 position-relative">
                <input type="password" class="form-control password" name="password" id="password" placeholder="Password">
                <label for="passwordInput" class="primary-text">Password <span class="text-danger"> *</span></label>
                <i class="fa-regular fa-eye position-absolute passEye"></i>
                <div class="formError password"></div>
            </div>

            <div class="form-floating my-2 position-relative">
                <input type="password" class="form-control password" name="confirmPassword" id="confirmPassword" placeholder="Password">
                <label for="confirmPasswordInput" class="primary-text">Confirm Password <span class="text-danger"> *</span></label>
                <i class="fa-regular fa-eye position-absolute confPassEye"></i>
                <div class="formError confirmPassword"></div>
            </div>

            <!-- <div class="checkbox my-3">
                <label>
                    <input class="w-auto" type="checkbox" value="acceptTC" name="termCond" id="termCond"> Accept All Term and Conditions
                </label>
            </div> -->

            <input class="w-100 signBtn" type="submit" name="Submit" value="SIGN UP">
            <p class="text mt-3">Already have a Mingley Account? <a href="<?= BASE_URL ?>src/view/SignIn.php" class=" text-muted text-decoration-none"><strong>Log In Here!</strong></a></p>
        </form>
    </div>
</div>

<script src="<?= BASE_URL ?>assets/js/signupValidation.js"></script>

<script>
    const alertBox = document.querySelector(".alertBox");

    setTimeout(() => {
        alertBox.innerHTML = "";
    }, 3000);
</script>

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

    const confPassEye = document.querySelector('.confPassEye');

    confPassEye.addEventListener('click', () => {
        const input = document.querySelector('#confirmPassword');
        if (input.getAttribute('type') === 'password') {
            input.setAttribute('type', 'text');
            confPassEye.classList.remove('fa-eye');
            confPassEye.classList.add('fa-eye-slash');
        } else {
            input.setAttribute('type', 'password');
            confPassEye.classList.remove('fa-eye-slash');
            confPassEye.classList.add('fa-eye');
        }

    });
</script>


<?php
require_once("../../includes/Footer.php");
?>