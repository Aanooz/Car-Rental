<?php
if(isset($_REQUEST['p'])){
    include_once('./dbConnection.php');

    $payment = $_REQUEST['p'];
    $bid = $_REQUEST['a'];
    $sql = "";
    if($payment == '0'){
        $sql = "UPDATE booked SET payment=1 WHERE bid=$bid";
    }else{
        $sql = "UPDATE booked SET payment=0 WHERE bid=$bid";
    }

    $res = mysqli_query($conn, $sql);
    if($res){
        header("location: ../pages/bookedcar.php?msg=success");
    }else{
        header("location: ../pages/bookedcar.php?msg=failed");
    }
}
?>