<?php
session_start();
if ($_SESSION['logged'] != true) {
    header('location:./login.php');
}


?>

<?php
include_once('../include/header.php');
?>



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
                        <a class="nav-item px-3 nav-link " href="../pages/admin.php">Dashboard</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-item px-3 nav-link active " href="../pages/users.php">Users</a>
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
                        <a class="nav-item  nav-link btn mx-3 btn btn-outline-success " href=""><i class="bi bi-person-circle">  <?php echo $_SESSION['userName']; ?></i></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-item  nav-link btn mx-3 btn-outline-danger" href="../include/logOut.inc.php">Log Out <i class="bi bi-box-arrow-right"></i></i></a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <div class="body" >


</body>
<section class="p-3 bg-light">
    <div class="container ">
    <h3 class="text-center text-white bg-success">Users Details.</h3>
                <hr><br><br>
        <table class="table">
            <thead class="thead-dark">
                <tr class="text"><b>
                    
                    <th scope="col">Uid</th>
                    <th scope="col">Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Email</th>
                    </b>
                </tr>
            </thead>
            <?php
                include_once('../include/dbConnection.php');
                $sql = "SELECT * FROM users WHERE type='client';";
                $data = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($data)) {
                    echo '
<tr class="text"><center>
<td>' . $row['uid'] . '</td>
<td>' . $row['name'] . '</td>
<td>' . $row['contact'] . '</td>
<td>' . $row['email'] . '</td>

<td></td>
</center>
</tr>
';
                }
                ?>
        </table>
    </div>
</section>

<br><br>
<br><br>
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
