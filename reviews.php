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
 <img src="images/swim4.jpeg" style="height: 60vh;" class="d-block w-100" alt="...">                    <div class="carousel-caption d-none d-md-block bg-header">
                        <h1>Reviews</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <div class="container-fluid rss-container">
        <div class="row text-center">
            <div class="col-md-12">
                <h3 class="mt-4 text-white">RSS Feed</h3>
                <!-- <hr class="underline text-center" /> -->
                <form>
                    <div class="container">
                        <div class="row" style="display: flex;justify-content:center">
                            <div class="col-md-6">
                                <select id="rss-input" class="form-select" aria-label="Default select example">
                                    <option selected>Select an rss feed</option>
                                    <option value="1">Google</option>
                                    <option value="2">NBC</option>
                                </select>
                                <button class="btn btn-danger text-center" style="margin-top:10px" id="clear-rss" type="button">Clear Feed</button>

                            </div>
                        </div>
                    </div>
                </form>
                <p id="rss-output"></p>
            </div>
        </div>
    </div>

      <div class="container mt-3">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline services-head text-center">
                    <h2 class="m-4" style="color:green">Reviews from Our Clients</h2>
                </div>
            </div>
        </div>
        <div class="row text-center mb-4">
            <div class="col-md-4 col-sm-4 col-xs-12 mt-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <a class="services-icon" href="#">
                            <i class="bi bi-binoculars card-icon" style="color:green"></i>
                        </a>
                        <h5 class="card-title">Angela Yu</h5>
                        <p class="card-text">" There are lots varieties of camping sites to choose from, which is very amazing  "   </p>
                        <!-- <a href="#" class="btn btn-primary">Link</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 mt-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <a class="services-icon" href="#">
                            <i class="bi bi-brightness-high card-icon" style="color:green"></i>
                        </a>
                        <h5 class="card-title">David Hopkins</h5>
                        <p class="card-text">" The experience is second to none, I really enjoy camping and wild swimming with you guys "</p>
                        <!-- <a href="#" class="btn btn-primary">Link</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 mt-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <a class="services-icon" href="#">
                            <i class="bi bi-brightness-low card-icon" style="color:green"></i>
                        </a>
                        <h5 class="card-title">John Doe</h5>
                        <p class="card-text"> " You have all the activities that brings family and loved ones together, kudus to you guys "</p>
                        <!-- <a href="#" class="btn btn-primary">Link</a> -->
                    </div>
                </div>
            </div>
         
        </div>
    </div>


    
    


        <footer class="bg-dark text-center text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 mt-5">
                    <ul style="margin-left:40px;display: flex;justify-content:flex-start;flex-direction:column;align-items:flex-start">
                        <h6>You are here - <b style="color: yellow;">Reviews</b></h6>
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
            ?? 2020 Copyright:
            <a class="text-white" href="#">GWSC</a>
        </div>
    </footer>



    <script src="js/jquery-3.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/new-bootstrap4.js"></script>

</body>

</html>