<?php
include_once('../include/header.php');
include_once('../include/navbar.php');
?>


<body>
    <section class="p-3 bg-light">
        <div class="container"><br>
            <form method="POST" action="../include/login.inc.php">
                <?php
                if (isset($_REQUEST['data_not_matched'])) {
                    echo '<span class="lead text-danger">These credentials do not match our records.</span>';
                }
                ?>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input required type="text" name="email" class="form-control" id="email" placeholder="Email address" >
                </div><br>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input required type="password" name="passwd" class="form-control" id="password" placeholder="Password">
                </div><br>
                <button type="submit" name="submit" class="btn btn-danger">Login</button>
                <br><br>
                
                <br>
                Didn't have an account ? <a href="./signup.php">Signup </a>
            </form><br>
        </div>
    </section>
</body>

 

<?php
include_once('../include/footer.php');
?>