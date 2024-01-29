<?php
session_start();
if ($_SESSION['logged'] != true) {
    header('location:./login.php');
}


?>

<?php
include_once('../include/header.php');
include_once('../include/dbConnection.php');
?>

<hearder>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-danger" href="#">CarRental</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-item px-3 nav-link active" href="../pages/admin.php">Dashboard</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-item px-3 nav-link" href="../pages/users.php">Users</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-item  px-3 nav-link" href="../pages/cars.php">Cars</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-item  px-3 nav-link" href="../pages/bookedcar.php">Booked Cars</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-item  px-3 nav-link" href="../pages/contactmsg.php">Contact Msg</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-item  nav-link btn mx-3 btn btn-outline-success " href=""><i class="bi bi-person-circle"> <?php echo $_SESSION['userName']; ?></i></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-item  nav-link btn mx-3 btn-outline-danger" href="../include/logOut.inc.php">Log Out <i class="bi bi-box-arrow-right"></i></i></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</hearder>
<br><br><br><br>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header text-center"><b>Users</b></div>
                    <div class="card-body">
                        <?php
                        $sql = "SELECT * FROM users WHERE type='client';";
                        $res = mysqli_query($conn, $sql);
                        $count = mysqli_num_rows($res);
                        ?>

                        <h1 class="text-center"><?php echo $count; ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header text-center"><b>Available Cars</b></div>
                    <div class="card-body">
                        <?php
                        $sql1 = "SELECT * FROM car";
                        $res1 = mysqli_query($conn, $sql1);
                        $count1 = mysqli_num_rows($res1);
                        ?>

                        <h1 class="text-center"><?php echo $count1; ?></h1>
                        <br />
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header text-center"><b>Booked Cars</b></div>
                    <div class="card-body">

                        <?php
                        $sql2 = "SELECT * FROM booked";
                        $res2 = mysqli_query($conn, $sql2);
                        $count2 = mysqli_num_rows($res2);
                        ?>

                        <h1 class="text-center"><?php echo $count2; ?></h1>
                        <br />
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header text-center"><b>Message</b></div>
                    <div class="card-body">
                        <?php
                        $sql3 = "SELECT * FROM message";
                        $res3 = mysqli_query($conn, $sql3);
                        $count3 = mysqli_num_rows($res3);
                        ?>

                        <h1 class="text-center"><?php echo $count3; ?></h1>
                        <br />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <br<<br>
        <br>
        <br>


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