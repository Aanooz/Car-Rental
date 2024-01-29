<?php
session_start();
if ($_SESSION['logged'] != true) {
    header('location:./login.php');
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
                        <a class="nav-item  px-3 nav-link" href="../pages/cars.php">Cars</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-item  px-3 nav-link active " href="../pages/bookedcar.php">Booked Cars</a>
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
            <h3 class="text-center text-white bg-success">Booked Car Details.</h3>
            <hr><br><br>
            <table class="table">
                <thead class="thead-dark">
                    <tr class="text-center"><b>
                            <th scope="col">Booked_id</th>
                            <th scope="col">Uid</th>
                            <th scope="col">Car_id</th>
                            <th scope="col">BookDate</th>
                            <th scope="col">period</th>
                            <th scope="col">Charge</th>
                            <th scope="col">Liscence No.</th>
                            <th scope="col">Action</th>
                            <th scope="col">Payment-status</th>


                        </b>
                    </tr>
                </thead>
                <?php
                include_once('../include/dbConnection.php');
                $sql = "SELECT * FROM booked;";
                $data = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($data)) {
                    echo '
<tr class="text-center">
<td>' . $row['bid'] . '</td>
<td>' . $row['uid'] . '</td>
<td>' . $row['car_id'] . '</td>
<td>' . $row['bookdate'] . '</td>
<td>' . $row['period'] . ' days</td>
<td>Rs: ' . $row['charge'] . '</td>
<td>' . $row['liscence_no'] . '</td>
';
                    if ($row['status'] == 0) {
                        echo "<td><a href='../include/editBookStatus.inc.php?q=0&r=" . $row['bid'] . "' class='btn btn-danger'>Pending</a></td>";
                    }
                    if ($row['status'] == 1) {
                        echo "<td><a href='../include/editBookStatus.inc.php?q=1&r=" . $row['bid'] . "' class='btn btn-primary'>Complete</a></td>";
                    }

                    echo '
                    ';
                    if ($row['payment'] == 0) {
                        echo "<td><a href='../include/editpayment.inc.php?p=0&a=" . $row['bid'] . "' class='btn btn-danger'>Unpaid</a></td>";
                    }
                    if ($row['payment'] == 1) {
                        echo "<td><a href='../include/editpayment.inc.php?p=1&a=" . $row['bid'] . "' class='btn btn-primary'>Paid</a></td>";
                    }

                    echo '
</tr>
';
                }
                ?>
            </table>
        </div>
    </section>

    <br><br>
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