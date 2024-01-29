<?php
session_start();
if ($_SESSION['logged'] != true) {
    header('location:./login.php');
}
$msg = "";
if (isset($_REQUEST['msg'])) {
    if ($_REQUEST['msg'] == 'success') {
        $msg = "Deleted Sucessfully";
    } else {
        $msg = "Failed deleting";
    }
}

?>

<?php
include_once('../include/header.php');
?>

<header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-danger" href="#">CarRental</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-item px-3 nav-link " href="../pages/admin.php">Dashboard</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-item px-3 nav-link" href="../pages/users.php">Users</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-item  px-3 nav-link active " href="../pages/cars.php">Cars</a>
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

    <div class="body">


</header>
<body>

<section class="p-3 bg-light">
    <div class="container ">
    <h3 class="text-center text-white bg-success">Cars Details.</h3>
                <hr><br><br><a href="../pages/carimage.php" class="btn btn-info">Add Car</a>
        <table class="table">
            <thead class="thead-dark">
                <tr class="text-center"><b>
                        <th scope="col">Car_id</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Car_name</th>
                        <th scope="col">Number plate</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </b>
                </tr>
            </thead>
            <?php
            include_once('../include/dbConnection.php');
            $sql = "SELECT * FROM car;";
            $data = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($data)) {
                echo '
<tr class="text-center">
<td>' . $row['car_id'] . '</td>
<td>' . $row['brand'] . '</td>
<td>' . $row['car_name'] . '</td>
<td>' . $row['number_plate'] . '</td>
<td>' . $row['price'] . '</td>
<td><a href="../pages/update.php?car_id='. $row['car_id'] .'" class="btn btn-primary">Update</a>  <a href="../include/deleteBooking.inc.php?car_id='. $row['car_id'] .'" class="btn btn-danger">Delete</a></td>

</tr>
';
            }
            ?>
        </table>
    </div>
</section>

<br><br>
<br><br>

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