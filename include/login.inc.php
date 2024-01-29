<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $passwd = md5($_POST['passwd']);


    include_once('./dbConnection.php');

    $sql = "SELECT * FROM users WHERE email='{$email}';";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['email'] == $email && $row['passwd'] == $passwd) {
                session_start();
                $_SESSION['logged'] = true;
                $_SESSION['userName'] = $row['name'];
                $_SESSION['uid'] = $row['uid'];
                if ($row['type'] != 'admin') {
                    header('location:../pages/profile.php');
                } else {
                    header('location:../pages/admin.php');
                }
            }else {
                header('location:../pages/login.php?data_not_matched');
            }
        }
    } else {
        header('location:../pages/login.php?data_not_matched');
    }
} else {
    header("location:../pages/signup.php");
}
