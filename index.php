<?php

if (isset($_REQUEST['q']) == 'check') {
    if ($_SESSION['logged'] == true) {
    } else {
        header('location:./index.php?error=not_logged');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="./js/bootstrap.min.js"></script>
    <title>CarRental</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-danger" href="#">CarRental</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-item px-3 nav-link active" href="./index.php"><i class="bi bi-house-fill"></i> Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-item px-3 nav-link" href="./pages/about.php"><i class="bi bi-info-lg"></i>About</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-item  px-3 nav-link" href="./pages/contact.php"><i class="bi bi-telephone"> </i>Contact Us</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-item ms-auto mb-2 mb-lg-0 nav-link btn mx-3 btn-outline-danger" href="./pages/login.php"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-item  nav-link btn mx-3 btn-outline-danger" href="./pages/signup.php">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <body>
        <section class="head12">



            <div class="textbox">
                <h1>Welcome to Online Car Rental Service</h1>

                <a href="./pages/login.php" class="register-btn"> Rent Now! </a>
            </div>

        </section>

        <br><br>
        <div class="container">
            <div class="text-center">
                <h1 class="font-weight-bold">We provide best service to our clients </h1>
                <p class="text-info">Who are in extremely love with eco-friendly with system</p>
            </div>
        </div>
        <section class="lead py-3 text-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 shadow p-3">
                        <span class="text-primary h3 lead">What we serve?</span><br>
                        <span class="lead">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia reiciendis fuga libero tenetur magnam. Molestias modi perferendis enim exercitationem tenetur repellat dolor consequatur, sapiente ipsam vitae quaerat at ut tempora?
                        </span>
                    </div>

                    <div class="col-md-4 shadow p-3">
                        <span class="text-primary h3 lead">Who can be our clients?</span><br>
                        <span class="lead">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quia nesciunt quaerat neque ratione amet, ipsam saepe libero esse, molestias non ipsum excepturi accusamus sunt cumque. Officiis ducimus voluptatibus a.
                        </span>
                    </div>

                    <div class="col-md-4 shadow p-3">
                        <span class="text-primary h3 lead">Where do we operate?</span><br>
                        <span class="lead">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus reprehenderit delectus officia similique earum provident aperiam, nemo quaerat et quae nisi eum deleniti alias blanditiis obcaecati facilis culpa eligendi. Debitis.
                        </span>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <br>
        <div class="container">
            <div class="text-center">
                <h2 class="font-weight-bold">Find the Best carforyou</h2>
                <p>we provide best car for rent </p>
                <hr>
            </div>
            <section class="lead py-3 text-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 rounded mx-auto d-block">
                            <img src="./images/mahindra.png" width="451px" height="277px" alt="">
                            <h3 class="text-center">MAHINDRA</h3>
                        </div>

                        <div class="col-md-5 rounded mx-auto d-block">
                            <img src="./images/hyundai.png" width="451px" height="277px" alt="">
                            <h3 class="text-center">Hyundai</h3>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-5 rounded mx-auto d-block">
                                <img src="./images/toyota3.png" width="451px" height="277px" alt="">
                                <h3 class="text-center">TOYOTA</h3>
                            </div>
                            <div class="col-md-5 rounded mx-auto d-block">
                                <img src="./images/tata1.png" width="451px" height="277">
                                <h3 class="text-center">TATA</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>



    </body>
<br><br>


    <?php
    include_once("./include/footer.php");

    ?>

</html>