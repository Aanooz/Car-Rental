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
    <script src="../js/jQuery.js"></script>
</head>
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
                        <a class="nav-item px-3 nav-link " href="./profile.php"><i class="bi bi-house-fill"> Home</i></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-item px-3 nav-link active" href="./brands.php">Brands</a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-item  nav-link btn mx-3 btn btn-outline-success" href="../pages/userpro.php"><i class="bi bi-person-circle">  <?php echo $_SESSION['userName']; ?></i></a>
                    </li>
                    <!--<li class="nav-item ">
                        <a class="nav-item  nav-link btn mx-3 btn-outline-danger" href="../include/logOut.inc.php">Log Out  <i class="bi bi-box-arrow-right"></i></i></a>
                    </li>-->
                </ul>
            </div>
        </div>
    </nav>
    <br>
    
    <div class="container py-3">
    <h3 class="text-center text-white bg-dark">Available Brands Car</h3>
                <br><br>
        <button class="navbar-toggler btn btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#toyota">
            <p class="lead">TOYOTA</p>
        </button><hr><br><br>
        <div class="collapse navbar-collapse" id="toyota">
            <div class="row">
                <?php
                include("../include/dbConnection.php");
                $sqlto = "SELECT * FROM car WHERE brand='toyota';";
                $datato = mysqli_query($conn,$sqlto);
                while ($rowto=mysqli_fetch_array($datato)){
                    echo '
                    <div class="col-md-5 rounded mx-auto d-block">
                    <img src="'.$rowto['car_img'].'" width="451px" height="277px" alt="">
                    <p>
                        <br><b>'.$rowto['car_name'].'<br>
                        Number Plate:'.$rowto['number_plate'].'
                        <br>Price:'.$rowto['price'].'/day</br></b>
                    </p>
                    <p><a href="./book.php?id='.$rowto['car_id'].'" class="btn btn-outline-warning">Book Now</a></p>
                    <br>
                </div>
                    
                    ';
                }
                ?>






                
                
            </div>
        </div>
    </div>


    <div class="container py-3">
        <button class="navbar-toggler btn btn-outline-dark" type="button" data-bs-toggle="collapse" data-bs-target="#mahindra">
            <p class="lead">MAHINDRA</p>
        </button><hr><br><br>
        <div class="collapse navbar-collapse" id="mahindra">
            <div class="row">
            <?php
                include("../include/dbConnection.php");
                $sqlm = "SELECT * FROM car WHERE brand='mahindra';";
                $datam = mysqli_query($conn,$sqlm);
                while ($rowm=mysqli_fetch_array($datam)){
                    echo '
                    <div class="col-md-5 rounded mx-auto d-block">
                    <img src="'.$rowm['car_img'].'" width="451px" height="277px" alt="">
                    <p>
                        <br><b>'.$rowm['car_name'].'<br>
                        Number Plate:'.$rowm['number_plate'].'
                        <br>Price:'.$rowm['price'].'/day</br></b>
                    </p>
                    <p><a href="./book.php?id='.$rowm['car_id'].'" class="btn btn-outline-warning">Book Now</a></p>
                    <br>
                </div>
                    
                    ';
                }
                ?>
            </div>
        </div>
    </div>


    <div class="container py-3">
        <button class="navbar-toggler btn btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#tata">
            <p class="lead">TATA</p>
        </button><hr><br><br>
        <div class="collapse navbar-collapse" id="tata">
            <div class="row">
            <?php
                include("../include/dbConnection.php");
                $sqlta = "SELECT * FROM car WHERE brand='tata';";
                $datata = mysqli_query($conn,$sqlta);
                while ($rowta=mysqli_fetch_array($datata)){
                    echo '
                    <div class="col-md-5 rounded mx-auto d-block">
                    <img src="'.$rowta['car_img'].'" width="451px" height="277px" alt="">
                    <p>
                        <br><b>'.$rowta['car_name'].'<br>
                        Number Plate:'.$rowta['number_plate'].'
                        <br>Price:'.$rowta['price'].'/day</br></b>
                    </p>
                    <p><a href="./book.php?id='.$rowta['car_id'].'" class="btn btn-outline-warning">Book Now</a></p>
                    <br>
                </div>
                    
                    ';
                }
                ?>
            </div>
        </div>
    </div>


    <div class="container py-3">
        <button class="navbar-toggler btn btn-outline-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#hyundai">
            <p class="lead">HYUNDAI</p>
        </button><hr><br><br>
        <div class="collapse navbar-collapse" id="hyundai">
            <div class="row">
            <?php
                include("../include/dbConnection.php");
                $sqlh = "SELECT * FROM car WHERE brand='hyundai';";
                $datah = mysqli_query($conn,$sqlh);
                while ($rowh=mysqli_fetch_array($datah)){
                    echo '
                    <div class="col-md-5 rounded mx-auto d-block">
                    <img src="'.$rowh['car_img'].'" width="451px" height="277px" alt="">
                    <p>
                        <br><b>'.$rowh['car_name'].'<br>
                        Number Plate:'.$rowh['number_plate'].'
                        <br>Price:'.$rowh['price'].'/day</br></b>
                    </p>
                    <p><a href="./book.php?id='.$rowh['car_id'].'" class="btn btn-outline-warning">Book Now</a></p>
                    <br>
                </div>
                    
                    ';
                }
                ?>
            </div>
        </div>
    </div>


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