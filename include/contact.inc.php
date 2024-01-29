<?php
include('../include/header.php');
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $message = $_POST['message'];
    $date = date('y-m-d');


    include_once('./dbConnection.php');
    $sql = "INSERT INTO message (name, email, contact, message, date) VALUES ('{$name}', '{$email}', '{$contact}', '{$message}', '{$date}');";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location:../pages/contact.php?success");
    } else {
        header("location:../pages/contact.php?failed");
    }
}

?>