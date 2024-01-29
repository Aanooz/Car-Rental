<?php
session_start();
if ($_SESSION['logged'] != true) {
    header('location:./login.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="../js/bootstrap.min.js"></script>
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
                        <a class="nav-item px-3 nav-link active" href="./profile.php"><i class="bi bi-house-fill"> Home</i></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-item px-3 nav-link " href="./brands.php">Brands</a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-item  nav-link btn mx-3 btn btn-outline-success " href="../pages/userpro.php"><i class="bi bi-person-circle"> <?php echo $_SESSION['userName']; ?></i></a>
                    </li>
                    <!-- <li class="nav-item ">
                        <a class="nav-item  nav-link btn mx-3 btn-outline-danger" href="../include/logOut.inc.php">Log Out  <i class="bi bi-box-arrow-right"></i></i></a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    

    <img src="../images/car.png" class="img-fluid"  alt="Responsive image">
    <br><br>
    <div class="container">
        <div class="text-center">
            <h1 class="font-weight-bold">We provide best service to our clients</h1>
            <p class="text-info">Who are in extremely love with eco-friendly with system</p>
        </div>
    </div>
    <section class="lead py-3 text-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-4 shadow p-3">
                    <span class="text-primary h3 lead">What we serve?</span><br>
                    <span class="lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia ipsa tempora quae neque repellendus laborum, hic corporis ratione mollitia quia, in voluptate eaque minus rerum, consequuntur esse eligendi nemo ea.
                    </span>
                </div>

                <div class="col-md-4 shadow p-3">
                    <span class="text-primary h3 lead">Who are our clients?</span><br>
                    <span class="lead">
                       Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure ipsa, autem nobis totam odio voluptates fugiat! Porro accusamus doloremque, nemo ea sed magni modi pariatur, maiores tempora corrupti necessitatibus culpa.
                    </span>
                </div>

                <div class="col-md-4 shadow p-3">
                    <span class="text-primary h3 lead">Where do we operate?</span><br>
                    <span class="lead">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem facere fugiat impedit, nemo inventore modi sapiente temporibus blanditiis deserunt quas, quos repellendus cum at tenetur sint id excepturi qui odio!
                    </span>
                </div>
            </div>
        </div>
    </section>



    <br>
    <div class="container">
        <div class="text-center">
            <h2 class="font-weight-bold">Find the Best carforyou</h2>
            <p>we provide best car for rent </p><hr>
        </div>
        <section class="lead py-3 text-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 rounded mx-auto d-block">
                        <img src="../images/mahindra.png" width="451px" height="277px" alt="">
                        <h3 class="text-center">MAHINDRA</h3>
                    </div>

                    <div class="col-md-5 rounded mx-auto d-block">
                        <img src="../images/hyundai.png" width="451px" height="277px" alt="">
                        <h3 class="text-center">Hyundai</h3>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5 rounded mx-auto d-block">
                            <img src="../images/toyota3.png" width="451px" height="277px" alt="">
                            <h3 class="text-center">TOYOTA</h3>
                        </div>
                        <div class="col-md-5 rounded mx-auto d-block">
                            <img src="../images/tata1.png" width="451px" height="277">
                            <h3 class="text-center">TATA</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <hr>






    <section class="p-1 bg-info">
        <div class="container text-dark text-center">
            <span class="h1 lead fw-bold text-dark">
                <?php $year = date("F");
                $month = date("jS");
                $day = date("Y");
                echo $year . " " . $month . " " . $day;
                ?>
                <?php $year = date("l");
                echo $year;
                ?>
        </div>
    </section>

    <?php
    echo '<section class="bg-dark p-1">
<div class="container text-center">
<span class="lead  text-muted">Copyright &copy' . date('Y') . ' CarRental</span>
</div>
</section>';
    ?>
</body>

</html>