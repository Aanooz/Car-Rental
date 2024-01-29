<?php
include('../include/header.php');
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
    <a class="navbar-brand text-danger" href="#">CarRental</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-item px-3 nav-link " href="../index.php"><i class="bi bi-house-fill"></i> Home</a>
            </li>
            <li class="nav-item ">
                <a class="nav-item px-3 nav-link active" href="../pages/about.php"><i class="bi bi-info-lg"></i>About</a>
            </li>
            <li class="nav-item ">
                <a class="nav-item  px-3 nav-link" href="../pages/contact.php"><i class="bi bi-telephone"> </i>Contact Us</a>
            </li>
            <li class="nav-item ">
                <a class="nav-item ms-auto mb-2 mb-lg-0 nav-link btn mx-3 btn-outline-danger" href="../pages/login.php"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
            <li class="nav-item ">
                <a class="nav-item  nav-link btn mx-3 btn-outline-danger" href="../pages/signup.php">Sign Up</a>
            </li>
        </ul>
    </div>
</div>
</nav>';

?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5 rounded mx-auto d-block">
                <br><br><br><br>
                <h1 class="font-weight-bold">About us.</h1>
                <hr>
        
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt laudantium amet iste voluptatum modi distinctio nisi, atque obcaecati totam, quam, blanditiis voluptas dolorem optio deleniti architecto impedit non reprehenderit. Reiciendis?</p>
                <br><br>

            </div>
            <div class="col-md-5 rounded mx-auto d-block"><br><br><br><br><br>
                <img src="../images/mahindra2.png" width="385px" height="227px">
            </div>

        </div><br><br>
        <div class="text-center">
            <p>To know more send us message by clicking button contact us.</p>
            <a class="btn mx-3 btn-warning" href="../pages/contact.php">Contact Us</a>
        </div>
    </div>
    <br><br><br>

    <?php
    include_once("../include/footer.php");
    ?>
</body>