<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.css" />
    <link href="css/style.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>

<nav class="navbar navbar-expand-lg " style="background-color: green;">
        <div class="container-fluid">
            <h3 class="hge"><a href="index.php" class="logo-text">GWSC</a></h3>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <form class="me-3" style="margin-left: 150px;">
                <div class="form-white input-group" style="width: 250px;">
                    <input type="search" class="form-control rounded" placeholder="Search " aria-label="Search" aria-describedby="search-addon" />
                </div>
            </form>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 100px;">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white"   href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="information.php">Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="pitch_types.php">Pitch Types</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="reviews.php">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="features.php">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="local_attraction.php">Local Attraction</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="login.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/camp2.jpeg" class="d-block w-100 contact-img" alt="gym_images/gym_treadmill_bg4.jpg">
                    <div class="carousel-caption d-none d-md-block bg-header">
                        <h1>Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-7" style="float: left;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.909007779!2d-0.13186558523396164!3d5
.580467895954142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNcKwMzQnNDkuNyJOIDDCsDA3JzQ2LjgiVw!5e0!3m2!1sen!
2sgh!4v1593103654859!5m2!1sen!2sgh" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-md-5">
                <div class="form contact-form">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="text-center"><button class="btn btn-primary mt-2" type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <footer class="bg-dark text-center text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 mt-5">
                    <ul style="margin-left:40px;display: flex;justify-content:flex-start;flex-direction:column;align-items:flex-start">
                        <h6>You are here - <b style="color: yellow;">Contact</b></h6>
                    </ul>
                </div>
             
                <div class="col-md-4 col-sm-6 text-center p-4 pb-0">
                    <section class="mb-4 footer-icons">
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
        
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>
        
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>
        
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>
        
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
        
                    </section>
                </div>
            </div>
        </div>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="#">GWSC</a>
        </div>
    </footer>



    <script src="js/jquery-3.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/new-bootstrap4.js"></script>

</body>

</html>