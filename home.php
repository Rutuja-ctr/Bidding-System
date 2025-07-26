

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap">
    <link rel="stylesheet" href="Styles/style.css">
    <title>Document</title>
    <style>
        
    </style>
</head>

<body class="black-backgrouhnd">
    <!--****************************************** navbar start ******************************************-->
    <section class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark black-backgrouhnd">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#2">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#3">About Us</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!--****************************************** navbar end****************************************** -->
    <section id ='1' class="container-fluid mt-1 ">
        <div class="main-background">
            <div class="d-flex justify-content-center align-items-center h-100 transparent-background">
                <span class=" artText text-center text-light  opacity-100">
                    <h1 style="font-size: 800%;">Spectrum</h1>
                    <h2 style="font-size: 400%;">arts</h2>
                </span>

            </div>
        </div>

    </section>
    <!-- **************************************************** Gallery start **************************************************** -->
    <section id='2'class="container-fluid mt-1 black-backgrouhnd ">
        <div class="text-center text-light">
            <h1>Image Gallery</h1>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
            <div class="col">
                <div class="card">
                    <img src="images/images.jpg" class="card-img-top cardImage" alt="...">
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/images.jpg" class="card-img-top cardImage" alt="...">
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/images.jpg" class="card-img-top cardImage" alt="...">
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/images.jpg" class="card-img-top cardImage" alt="...">
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/images.jpg" class="card-img-top cardImage" alt="...">
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/images.jpg" class="card-img-top cardImage" alt="...">
                </div>
            </div>

        </div>

    </section>
    <!-- **************************************************** Gallery End **************************************************** -->
    
    <!-- **************************************************** About start **************************************************** -->
    <section  id = '3' class="about-section py-5 text-light ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-2">
                    <img src="images/images.jpg" alt="About Us Image" class="img-fluid rounded-3">
                </div>
                <div class="col-md-6 order-md-1">
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec sapien fringilla, molestie
                        turpis eget, consequat laoreet libero. Donec ac diam nec nisl consectetur consectetur non ut
                        imperdiet. Cras non purus orci. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                        Maecenas sed diam eget risus pulvinar elementum.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- **************************************************** About end **************************************************** -->
    <!-- **************************************************** footer start **************************************************** -->
    <footer class="container-fluid black-backgrouhnd text-light border-top border-light">
            <p class="text-center">
                © 2024 Spectrum Art - All Rights Reserved
            </p>
    </footer>

    <!-- **************************************************** footer end **************************************************** -->



</body>

</html>