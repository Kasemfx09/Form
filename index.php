<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keyword" content="class-room" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register Form</title>
    <!--Custom CSS-->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!--font awesome link-->
    <script src="https://use.fontawesome.com/d1fe4d03cc.js"></script>
</head>

<body>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $checkbox = $_POST['checkbox'];

        if (empty($name)) {

            $num = "<p style=\"color:red;\">Name required!</p>";
        } else {
            $num = "";
        };
        if (empty($email)) {

            $mail = "<p style=\"color:red;\">Email required!</p>";
        } else {
            $mail = "";
        };
        if (empty($password)) {

            $pass = "<p style=\"color:red;\">Missing password!</p>";
        } else {
            $pass = "";
        };

        if (empty($checkbox)) {

            $check = "<p style=\"color:red;\">Please read terms and conditions!</p>";
        } else {
            $check_box = "";
        }
    }
    if (empty($name) || empty($email) || empty($password) || empty($checkbox)) {

        $suc = " ";
    } else {
        $suc = "<p style=\"color: #387585; font-size:20px; font-weight:700;\"> Welcome! Successful Registered.</p>";;
    }

    ?>

    <section id="register-login" class="">
        <div class="container">
            <div class="register-login-content">
                <div class="avator">
                    <img src="img/notes.png" alt="" />
                    <h2>Register</h2>
                    <?php
                    if (isset($suc)) {
                        echo  $suc;
                    }
                    ?>
                </div>
                <div class="register-login-text">
                    <form action="#" method="POST">
                        <div class="register-name">
                            <label>Full Name <span>&#42;</span> </label><br />
                            <input type="text" name="name" placeholder="Full Name" />
                            <?php
                            if (isset($num)) {
                                echo $num;
                            }
                            ?>
                        </div>
                        <div class="register-mail">
                            <label>Email Address<span>&#42;</span></label><br />
                            <input type="email" name="email" placeholder="Email Address" />
                            <?php
                            if (isset($mail)) {
                                echo $mail;
                            }
                            ?>
                        </div>
                        <div class="register-password">
                            <label>Password<span>&#42;</span></label><br />
                            <input type="password" name="password" placeholder="Password" />
                            <?php
                            if (isset($pass)) {
                                echo $pass;
                            }
                            ?>
                        </div>

                        <div class="check-box-div">
                            <input type="checkbox" name="checkbox" id="checkbox" class="checkbox" />
                            <label for="checkbox" class="label">I Agree to Terms & Conditions!</label>
                            <?php
                            if (isset($check)) {
                                echo $check;
                            }
                            ?>
                        </div>
                        <div class="login-btn">
                            <input type="submit" name="submit" value="Send" />
                        </div>
                    </form>
                    <div class="already-account">
                        <span>Already have an account?</span>
                        <a href="index.html"> Log in</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



</body>

</html>