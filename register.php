<?php
include 'setup.php';
include 'server.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Document</title>
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

<body style="background-color: #67eb46;s">
    <div>
        <form action="server.php" method="post">
            <div class="container">
                <div class="row register-row">
                    <div class="col-sm-6">
                        <h1 class="header-text">Registration</h1>
                        <P class="header-text">Fill up the form with correct values.</P>
                        <hr class="mb-3">
                        <label for="firstname"><b>First Name</b></label>
                        <input class="form-control" id="firstname" type="text" name="firstname" required>

                        <label for="lastname"><b>Last Name</b></label>
                        <input class="form-control" id="lastname" type="text" name="lastname" required>

                        <label for="username"><b>Username</b></label>
                        <input class="form-control" id="username" type="text" name="user_name" required>

                        <!-- <label for="email"><b>Email Address</b></label>
                        <input class="form-control" id="email" type="email" name="email" required> -->

                        <!-- <label for="postcode"><b>Postcode</b></label>
                        <input class="form-control" id="postcode" type="text" name="postcode" required> -->

                        <!-- <label for="phonenumber"><b>Phone Number</b></label>
                        <input class="form-control" id="phonenumber" type="text" name="phonenumber" required> -->

                        <label for="password"><b>Password</b></label>
                        <input class="form-control" id="password" type="password" name="password" required>
                        <hr class="mb-3">
                        <div style="display: flex;justify-content:center;align-items:center;">
                            <input type="submit" class="btn btn-primary" class="header-text" id="register" name="create" value="Sign Up">
                        </div>

                        <!-- <button class="btn btn-primary"><a href="wanted.php" class="text-light">Register</a></button> -->
                        <P style="color: white;display: flex;justify-content:center;margin-top:10px">Already have an account? ...<a href="login.php"> Login</a></P>

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