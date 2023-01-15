<?php
include 'setup.php';
include 'server.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Documents</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5f87064e2901b920769365bd/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.css" />
    <link href="css/style.css" rel="stylesheet">
</head>

<body style="background-color: #67eb46;overflow-y:hidden">

    <div>
        <form action="" name="frmUser" method="post">

            <div class="container">
                <div class="row" style="display: flex;justify-content:center;margin-top:150px">
                    <div class="col-sm-6">

                        <h1 style="color: white;display: flex;justify-content:center">Login</h1>
                        <P style="color: white;display: flex;justify-content:center">Fill up the form with correct values.</P>
                        <hr class="mb-3">
                        <div class="message" style="color: red;display: flex;justify-content:center">
                            <?php if ($message != "") {
                                echo $message;
                            } ?></div>

                        <label for="username"><b>Username</b></label>
                        <input class="form-control" id="username" type="text" name="user_name" required>


                        <label for="password"><b>Password</b></label>
                        <input class="form-control" id="password" type="password" name="password" required>
                        <hr class="mb-3">

                        <?php if (isset($failed_login_attempt) && $failed_login_attempt >= 3) { ?>
                            <div>
                                <input name="captcha_code" type="text">
                                <hr />
                                <img src="captcha_code.php" />
                                <hr />
                            </div>
                        <?php } ?>
                        <div style="display: flex;justify-content:center;align-items:center;">
                            <input type="submit" class="btn btn-primary" id="login" name="submit" value="Login">
                        </div>
                            <P style="color: white;display: flex;justify-content:center;margin-top:10px">Don't have an account? ...<a href="register.php"> Register</a></P>

                    </div>
                </div>
            </div>
        </form>
    </div>




    <script src="js/jquery-3.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/new-bootstrap4.js"></script>
</body>

</html>