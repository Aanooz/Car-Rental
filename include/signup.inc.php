<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $passwd = md5($_POST['passwd']);
    $passwdR = md5($_POST['passwdR']);
    $type = "client";

    if ($passwd != $passwdR) {
        header('location:../pages/signup.php?password_not_matched');
    } else {
        include_once('./dbConnection.php');

        $testSql = "SELECT email FROM users WHERE email='$email'";
        $emailCheck = mysqli_query($conn, $testSql);
        if (mysqli_num_rows($emailCheck) > 0) {
            header('location:../pages/signup.php?email_already_exists');
        } else {
            $sql = "INSERT INTO users (name, email,contact, passwd, type) VALUES ('{$name}', '{$email}','{$contact}', '{$passwd}', '{$type}');";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("location:../pages/login.php?success");
            } else {
                header("location:../pages/signup.php?failed");
            }
        }
    }
} else {
    header("location:../pages/signup.php");
}
