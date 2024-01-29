<?php

include_once('../include/header.php');
$carid = "";
$carname = "";
$car_brand ="";
$carno = "";
$price = "";
if (isset($_REQUEST['car_id'])) {
    $carid = $_REQUEST['car_id'];
    include_once("../include/dbConnection.php");
    $sql = "SELECT * FROM car WHERE car_id=$carid;";
    $res = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($res)) {  
        
        $carname = $row['car_name'];
        $car_brand = $row['brand'];
        $carno = $row['number_plate'];
        $price = $row['price'];
    }
}
if (isset($_POST['submit'])) {
    $brand = $_POST['brand'];
    $car_name = $_POST['car_name'];
    $number_plate = $_POST['number_plate'];
    $price = $_POST['price'];
    include_once('../include/dbConnection.php');
    $sql = "UPDATE car SET brand = '$brand', car_name = '$car_name', number_plate = '$number_plate', price = '$price' WHERE car_id = $carid;";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location:./cars.php?msg=success");
    } else {
        header("location:./cars.php?msg=failed");
    }
}


?>




<br>
<a class="btn mx-3 btn-outline-info" href="../pages/cars.php">Go Back</a>
<br>
<div class="containor">

<form enctype='multipart/form-data' method="POST" action="#">
 <label for="inputcarname" >car brand</label>
 <input type="text" value="<?php echo $car_brand; ?>" name="brand" id="carbrand"><br>
 <label for="inputcarname" >car name</label>
 <input type="text" value="<?php echo $carname; ?>" name="car_name" id="carname"><br>
 <label for="inputplateno" >number plate</label>
 <input type="plateno" value="<?php echo $carno; ?>" name="number_plate" id="noplate"><br>
 <span id="displayE"  for="inputprice" >price</span>
 <input type="price" value="<?php echo $price; ?>" id="price" name="price"><br>
 <button type="submit" name="submit" >Update</button>
 <span id="displayP"></span>
</form>
</div>