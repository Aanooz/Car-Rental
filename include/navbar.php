<?php
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
                <a class="nav-item px-3 nav-link" href="../pages/about.php"><i class="bi bi-info-lg"></i>About</a>
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
