<?php
// IMPORT HEADER
require './assets/include/header.inc.php';
?>
<div class="login-container">

    <?php
    // IMPORT NECESSARY FILES
    require './assets/include/nav.inc.php';
    require './assets/include/variables.inc.php';
    require './assets/include/functions.inc.php';
    ?>

    <!-- LOGIN STARTS HERE -->

    <div class="container-fluid">
        <div class="row product-sec">
            <div class="col-lg-6 prod-left">
                <div class="hero-image">
                    <img src="./images/hero.jpg" class="img wow fadeInUp" alt="hero image" />
                </div>
            </div>

            <div class="col-lg-6 prod-left">
                <div class="prod-opt">
                    <h3 id="prod-name" class="wow fadeInUp" data-wow-delay="0.4s">
                        <!-- DISPLAY INFORMATION ON SCREEN ACCORDING TO DATA -->
                        <?php if (!empty($msg)) {

                            switch ($msg) {
                                case "wrongPwd":
                                    echo "$errorIcon Password incorrect";
                                    displayLoginForm();
                                    break;
                                case "usernameOrPwdIncorrect":
                                    echo "$errorIcon Username or Password incorrect";
                                    displayLoginForm();
                                    break;
                                case "loginSuccess":
                                    echo "$successIcon Successfully loggedin";
                                    displayLogoutBtn();
                                    break;
                                case "sqlError":
                                    echo "$errorIcon Unknown error please login again";
                                    displayLoginForm();
                                    break;
                                case "pwdUpdateSuccessful":
                                    echo "$successIcon Password updated successfully";
                                    displayLoginForm();
                                    break;
                                case "successfullySignedUp":
                                    echo "$successIcon Successfully signed up";
                                    displayLoginForm();
                                    break;
                            }
                        } else if (empty($msg)) {
                            displayLoginForm();
                        }
                        ?>
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <!-- LOGIN ENDS HERE -->

    <?php
    // IMPORT FOOTER
    require './assets/include/footer.inc.php';
