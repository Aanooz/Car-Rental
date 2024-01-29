<?php
if(isset($_REQUEST['q'])){
    include_once('./dbConnection.php');

    $status = $_REQUEST['q'];
    $bid = $_REQUEST['r'];
    $sql = "";
    if($status == '0'){
        $sql = "UPDATE booked SET status=1 WHERE bid=$bid";
    }else{
        $sql = "UPDATE booked SET status=0 WHERE bid=$bid";
    }

    $res = mysqli_query($conn, $sql);
    if($res){
        header("location: ../pages/bookedcar.php?msg=success");
    }else{
        header("location: ../pages/bookedcar.php?msg=failed");
    }
}
?>

