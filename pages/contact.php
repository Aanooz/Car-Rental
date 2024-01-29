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
                <a class="nav-item px-3 nav-link" href="../pages/about.php"><i class="bi bi-info-lg"></i>About</a>
            </li>
            <li class="nav-item ">
                <a class="nav-item  px-3 nav-link active" href="../pages/contact.php"><i class="bi bi-telephone"> </i>Contact Us</a>
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
<section class="p-3 bg-light">
        <div class="container">
            <br>
            
<form method="POST" action="../include/contact.inc.php">
    <h3 class="text-center" >Get in touch<hr></h3>
    <br>
    <label for="name" >Full Name</label>
    <input type="inputname" name="name" class="form-control" id="name" placeholder="Enter fullname" required autofocus><br>
    <label for="Email" >Email address</label>
    <input type="email" name="email" id="Email" class="form-control mb-3" pattern="^[a-z0-9](\.?[a-z0-9]){5,}@g(oogle)?mail\.com$" placeholder="example@gmail.com" required autofocus><br>
    <label for="contact" >Contact No.</label>
    <input type="tel" name="contact" class="form-control" id="tel" placeholder="contact No." pattern="^[9]\d{9,9}$" required autofocus><br>
    <label for="message">Message</label>
    <textarea class="form-control" name="message" id="message" rows="4" required autofocus></textarea><br><br>
    <button type="send message" name="send" class="btn btn-danger">Send Message</button>
  </div>
</form>
</section>
    

</body>
   


   
<br><br><br>
<?php
include('../include/footer.php');
?>

