<?php
include_once('../include/header.php');
include_once('../include/navbar.php');
?>


<body>
    <section class="p-3 bg-light">
        <div class="container">
            <br>
            <form method="POST" action="../include/signup.inc.php">
                <?php
                if (isset($_REQUEST['email_already_exists'])) {
                    echo '<span class="lead text-danger">Email already exists</span>';
                }
                if (isset($_REQUEST['user_created'])) {
                    echo '<span class="lead text-success">User created sucessfully</span>';
                }
                ?>
                <br>
                <label for="inputEmail" class="sr-only">User Full Name</label>
                <input type="text" name="name" id="userName" class="form-control mb-3"  placeholder="Enter user full name" required autofocus ><br>
                <label for="inputcontact" class="sr-only">Contact No.</label>
                <input type="number" name="contact" id="contact" class="form-control mb-3" pattern="^[9]\d{9,9}$" placeholder="Enter contact no."  required autofocus><br>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" name="email" onkeyup="checkEmail(this.value)" id="inputEmail" class="form-control mb-3" pattern="^[a-z0-9](\.?[a-z0-9]){5,}@g(oogle)?mail\.com$"  placeholder="example@gmail.com"  required>
                <span id="displayE" class=""></span><br>
                <label for="password" class="sr-only">Password</label>
                <input type="password" id="password" name="passwd" class="form-control mb-3" placeholder="password" minlength="6" required><br>
                <label for="passwordR" class="sr-only">Re-enter Password</label>
                <input type="password" name="passwdR" id="passwordR" onkeyup="checkPassword(this.value)" class="form-control mb-3" placeholder="re-enter password" required>
                <span id="displayP"></span>

                <?php
                if (isset($_REQUEST['password_not_matched'])) {
                    echo '<span class="lead text-danger">Password does not match</span>';
                }
                ?>
                <br>
                <button type="submit" name="submit" class="btn btn-danger">Sign Up</button>
            </form><br>
        </div>
    </section>

    <script>
        checkPassword = (passwordR) => {
            let password = $("#password").val();
            if (password != passwordR && passwordR != "") {
                $("#displayP").css("color", "red");
                $("#displayP").text("Your password does not match");
            } else {
                $("#displayP").text("");
            }

        }
    </script>



    <?php
    include_once('../include/footer.php');
    ?>

</body>

</html>