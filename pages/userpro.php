<?php
session_start();
$uid = $_SESSION['uid'];
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
                        <a class="nav-item  nav-link" href="#"><i class="bi bi-person-circle"> <?php echo $_SESSION['userName']; ?></i></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-item  nav-link btn mx-3 btn-outline-danger" href="../include/logOut.inc.php">Log Out <i class="bi bi-box-arrow-right"></i></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <a class="btn mx-3 btn-outline-info" href="../pages/profile.php">Go Back</a>
    <section class="p-3 bg-light">
        <div class="container ">
            <br>
            <?php echo "<span>" . $msg . "</span> "; ?>
            <br>
            <table class="table">
                <h1 class="text-center text-warning bg-dark">Your Bookings</h1>
                <p class="text-center">Hope You enjoyed our service.</p>
                <hr><br>

                <br>
                <thead class="thead-dark">
                    <tr class="text-center"><b>
                            <th scope="col">Booked_id</th>
                            <th scope="col">Car_Name</th>
                            <th scope="col">BookDate</th>
                            <th scope="col">Plate Number</th>
                            <th scope="col">Period</th>
                            <th scope="col">charge</th>
                            <th scope="col">Action</th>
                            <th scope="col">Status</th>
                        </b>
                    </tr>
                </thead>

                <?php
                include_once('../include/dbConnection.php');
                $sql = "SELECT * FROM booked, car WHERE booked.uid = '$uid' AND booked.car_id=car.car_id;";
                $data = mysqli_query($conn, $sql);
                 while ($row = mysqli_fetch_assoc($data)) {
                echo '
<tr class="text-center">
<td>' . $row['bid'] . '</td>
<td>' . $row['car_name'] . '</td>
<td>' . $row['bookdate']. '</td>
<td>' . $row['number_plate'] . '</td>
<td>' . $row['period'] . '</td>
<td>' . $row['charge'] . '</td>
<td><a href="../include/deleteBooking.inc.php?id=' . $row['bid'] . '" class="btn btn-danger">Delete</a></td>
';
                if($row['status'] == 0){
                    echo "<td><span class='disabled btn btn-danger lead'>Pending</span></td>";
                }
                if($row['status'] == 1){
                    echo "<td><span class='disabled btn btn-primary lead'>Booked</span></td>";
                }

echo '
</b>
</tr>
'; }

                ?>


            </table>
        </div>
    </section>
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

</html>