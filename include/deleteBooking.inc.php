<?php
include_once('./dbConnection.php');
if(isset($_REQUEST['id'])){
    
    $id = $_REQUEST['id'];
    $sql = "DELETE FROM booked WHERE bid=$id;";
    $res = mysqli_query($conn, $sql);
    if($res){
        header('location: ../pages/userpro.php?msg=success');
    }else{
        header('location: ../pages/userpro.php?msg=failed');
    }
}

if(isset($_REQUEST['mid'])){
    $mid = $_REQUEST['mid'];
    $sql = "DELETE FROM message WHERE  mid=$mid;";
    $res = mysqli_query($conn, $sql);
    if($res){
        header('location: ../pages/contactmsg.php?msg=success');
    }else{
        header('location: ../pages/contactmsg.php?msg=failed');
    }
}

if(isset($_REQUEST['car_id'])){
    $cid = $_REQUEST['car_id'];
    $sql = "DELETE FROM car WHERE  car_id=$cid;";
    $res = mysqli_query($conn, $sql);
    if($res){
        header('location: ../pages/cars.php?msg=success');
    }else{
        header('location: ../pages/cars.php?msg=failed');
    }
}