<?php

require("/var/www/html/PHP_Assesments/Mangloo/config/constants.php");
// echo"JHbjb";

?>


<section class="main_container">
    <div class="form_container">
        <div class="form_img">
            <img src="<?php echo BASE_URL; ?>assets/img/form1.jpg" alt="">
        </div>
        <form id="signUp_form" action="" method="post" name="myForm">

            <!-- Full Name -->
            <div class=" form_elements">
                <label for="name">Full Name<span class="text-danger"> *</span></label><br />
                <input type="text" name="name" id="name" placeholder="Enter your name" class="input" />
                <div class="formError name"></div>
            </div>

            <br />

            <!-- Email -->
            <div class="form_elements">
                <label for="text">Email<span class="text-danger"> *</span></label><br />
                <input type="text" name="email" id="email" placeholder="Enter your E-mail" class="input" />
                <div class="formError email"></div>
            </div>

            <br />

            <!-- Username -->
            <div class="form_elements">
                <label for="age">Username<span class="text-danger"> *</span></label><br />
                <input type="number" name="age" id="age" placeholder="Enter your age" class="input" />
                <div class="formError age"></div>
            </div>

            <br />

            <!-- Password -->
            <div class="form_elements">
                <label for="password">Password<span class="text-danger"> *</span></label><br />
                <input type="password" name="password" id="password" placeholder="Enter your Password" class="input" />
                <div class="formError password"></div>
            </div>

            <br />

            <!-- Confirm Password -->
            <div class="form_elements">
                <label for="confirm_password">Confirm Password<span class="text-danger"> *</span></label><br />
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm your Password" class="input" />
                <div class="formError confirm_password"></div>
            </div>

            <br />

            <br />

            <input class="formBtn" type="submit" name="Submit" value="SIGN UP" />

            <div class="signIn_redirect">
                Already a user? <b><a href="<?php echo BASE_URL; ?>src/view/SignIn.php">Sign In</a></b>
            </div>
        </form>
    </div>

</section>












<?php

require("/var/www/html/PHP_Assesments/Mangloo/config/constants.php");

?>


<div class="container">
    <div class="row">
        <div class="col-6 ">
            <img src="assets/img/form1.jpg" class="w-100">
        </div>
        <div class="col-6 ">
            <form>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Full Name <span class="text-danger"> *</span></label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Username <span class="text-danger"> *</span></label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address <span class="text-danger"> *</span></label>
                </div>
                <div class="form-floating mb-3 ">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password <span class="text-danger"> *</span></label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Confirm Password <span class="text-danger"> *</span></label>
                </div>

                <button type="submit" class="btn btn-primary w-100">Submit</button>

                <div class="signIn_redirect">
                    Already a user? <b><a href="<?php echo BASE_URL; ?>src/view/SignIn.php">Sign In</a></b>
                </div>
            </form>

        </div>
    </div>



</div>