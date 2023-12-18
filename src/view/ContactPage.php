<?php
session_start();

require("../../config/constants.php");

?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mingley Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image" href="../assets/img/logo2.png">

    <link rel="stylesheet" href="../../assets/css/ContactPage.css">

    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <!-- Bootstrap CSS CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Bootstrap JS CDN Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>

<body>

    <div class="mb-5">

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

        <!-- brand logo start -->
        <div class="brand-logo text-center">
            <a href="javascript:void(0)">
                <img src="../../assets/img/logo.png" alt="brand logo" class="brand_logo">
            </a>
        </div>
        <!-- brand logo end -->
        <h1 class="brand_name">Mingley</h1>
    </div>

    <div class="container p-2">

        <div class="contactForm">
            <h2>Send us a message</h2>
            <form action="<?php echo BASE_URL ?>src/controller/contactUs.php" name="contact_form" method="post">
                <label for="name">*Name :
                    <input type="text" id="name" name="name">
                    <div class="formError name"></div>
                </label>
                <label for="email">*E-mail :
                    <input type="email" id="email" name="email">
                    <div class="formError email"></div>
                </label>
                <label for="phone">*Phone :
                    <input type="number" id="phone" name="phone">
                    <div class="formError phone"></div>
                </label>
                <label for="message">*Message :
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    <div class="formError message"></div>
                </label>
                <button type="submit" class="submit_btn">SEND <i class="fa-solid fa-paper-plane" style="color: #fff;"></i></button>
            </form>
        </div>

        <div class="contactDetails">
            <h2>Contact Us </h2>

            <p>We're open for any suggestion or just to have a chat.</p>

            <div class="contactOptions">
                <i class="fa-solid fa-location-dot" style="color: #000000;"></i>
                <p><strong>Address : </strong>195 West, Phase-8, Mind2Web, Mohali, 140301</p>
            </div>

            <div class="contactOptions">
                <i class="fa-solid fa-phone" style="color: #000000;"></i>
                <p><strong>Phone : </strong>+91 7488541302</p>
            </div>

            <div class="contactOptions">
                <i class="fa-solid fa-paper-plane" style="color: #000000;"></i>
                <p><strong>Email : </strong>princekumarsingh.mind2web@gmail.com</p>
            </div>

            <div class="contactOptions">
                <i class="fa-solid fa-earth-asia" style="color: #000000;"></i>
                <p><strong>Owner : </strong><a target="blank" href="https://princid.github.io/">princid.github.io</a></p>
            </div>
        </div>
    </div>


    <script src="../../assets/js/contactFormValidation.js"></script>

    <script src="../../assets/js/alertMessage.js"></script>

</body>

</html>