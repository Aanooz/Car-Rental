<?php
include_once('../include/header.php');
session_start();
$carid = "";
$carname = "";
$carno = "";
$price = "";
if (isset($_REQUEST['id'])) {
    $carid = $_REQUEST['id'];
    include_once("../include/dbConnection.php");
    $sql = "SELECT * FROM car WHERE car_id=$carid;";
    $res = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($res)) {
        $carname = $row['car_name'];
        $carno = $row['number_plate'];
        $price = $row['price'];
    }
}
$msg = "";
if (isset($_REQUEST['msg'])) {
    if ($_REQUEST['msg'] == 'success') {
        $msg = "Booked Sucessfully";
    } else {
        $msg = "Failed booking";
    }
}

//data posted into database

if (isset($_POST['submit'])) {
    $uid = $_SESSION['uid'];
    $carid = $_REQUEST['id'];
    $fdate = $_POST['fdate'];
    $period = $_POST['period'];
    $fare = $_POST['fare'];
    $liscence = $_POST['liscence'];
    $status = '0';

    include_once('../include/dbConnection.php');
    $sql = "INSERT INTO booked (uid, car_id, bookdate, period, charge, liscence_no, status) VALUES ('{$uid}','{$carid}','{$fdate}','{$period}', '{$fare}', '{$liscence}', $status);";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location:./book.php?msg=success");
    } else {
        header("location:./book.php?msg=failed");
    }
}


?>

<head>
    <title>Booking Form</title>
</head>

<body>
    <br>
    <section class="p-3 bg-light">
        <a class="btn mx-3 btn-outline-info" href="../pages/brands.php">Go Back</a>
        <div class="container ">
            <br>
            <br>
            <?php echo "<span>" . $msg . "</span> "; ?>
            <br>
            <form method="POST" action="">
                <h2>
                    <marquee behavior=alernate>Book Now Pay Later :)</marquee>
                </h2><br>
                <h3 class="text-center text-white bg-dark">Booking Form</h3>
                <hr>

                <br>
                <div class="mb-3">

                    <div class="mb-3">
                        <label for="selectedcar">Selected Car:</label>
                        <input type="text" value="<?php echo $carname; ?>" disabled name="selectedcar" class="form-control" id="name">
                    </div><br>
                    <div class="mb-3">
                        <label for="numberplate">Number Plate:</label>
                        <input type="text" value="<?php echo $carno; ?>" disabled name="numberplate" class="form-control" id="name">
                    </div><br>
                    <div class="mb-3">
                        <label for="date">For Date:</label>
                        <input type="date" name="fdate" class="form-control">
                    </div><br>
                    <div class="mb-3">
                        <label for="to">Lease Period:</label>
                        <input type="number" onkeyup="calc(this.value)" name="period" class="form-control" id="period">
                    </div><br>
                    <div class="mb-3">
                        <label for="fare">Fare:</label>
                        <input type="text" name="fare" disabled class="form-control" id="fare">
                    </div><br>
                    <div class="mb-3">
                        <label for="file">Enter your liscence No.</label>
                        <input required type="text" name="liscence" class="form-control" placeholder="Enter liscence No.">
                    </div><br>
                    <input type="submit" value="Book" name="submit" class="btn btn-danger">
                    <hr>
            </form><br>

        </div>


    </section>

    <script>
        function calc(day) {
            let priceod = <?php echo $price; ?>;
            let fare = document.getElementById('fare');
            let price = parseInt(priceod);
            let count = parseInt(day);
            fare.value = price * count;
        }
    </script>

</body>
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


</html>