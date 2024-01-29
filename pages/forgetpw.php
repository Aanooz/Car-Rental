<?php
include_once('../include/header.php');
include_once('../include/navbar.php');
include_once('../include/dbConnection.php');
?>


<body>
    <section class="p-3 bg-light">
        <div class="container"><br>
            <form method="POST" action="">
                <?php
                if (isset($_POST['submit'])) {
                    $email = mysqli_real_escape_string($conn, $_POST['email']);
                    $emailquery = "SELECT * FROM users WHERE email='$email' ";
                    $query = mysqli_query($conn,$emailquery);
                    $emailcount = mysqli_num_rows($query);

                    if($emailcount){
                        $userdata = mysqli_fetch_array($query);
                        $name = $userdata['name'];
                        $uid = $userdata['uid'];

                        $subject ="Password Reset";
                        $body ="Hi, $name. click here to change your password http://localhost/1emailverifregistr/fgpw.php?uid=$uid ";

                        $sender_email ="from: aanoozthapa555@gmail.com";

                        if(mail($email, $subject, $body, $sender_email)){
                            $_SESSION['msg'] = "check your mail to recover your password $email";
                            header('location:./page/login.php');
                        }else{
                            echo "Email sending failed...";
                        }
                    }else{
                        echo "No email found";
                    }
                }
                ?>
                <div class="form-group">
                    <h4 class="text-center">Recover your Account</h4>
                    <p class="text-center">Enter your Email address</p>
                    <input required type="text" name="email" class="form-control" id="email" placeholder="Email address">
                </div><br>
                <button type="submit" name="submit" class="btn btn-danger">Send Mail</button>
                <br><br>
                
            </form><br>
        </div>
    </section>
</body>

 

<?php
include_once('../include/footer.php');
?>