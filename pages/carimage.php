 <?php

    if (isset($_POST['submit'])) {
        $brand = $_POST['brand'];
        $name = $_POST['name'];
        $numberplate = $_POST['numberplate'];
        $price = $_POST['price'];
        $image = $_FILES['file']['name'];
        $imgtem = $_FILES['file']['tmp_name'];
        $fold = "../images/" . $image;

        include_once("../include/dbConnection.php");
        $sql = "INSERT INTO car (brand, car_name, number_plate, price, car_img) VALUES ('$brand','$name','$numberplate','$price','$fold')";
        $result = mysqli_query($conn, $sql);

        if (move_uploaded_file($imgtem, $fold)) {
            echo "uploaded";
            header("../pages/cars.php?id=1");
        } else {
            echo "failed to upload";
        }
    }



    ?>



 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
     <script src="../js/bootstrap.min.js"></script>
     <title>Add Image</title>
 </head>
 <div class="container">
     <br>
     <a class="btn mx-3 btn-outline-info" href="../pages/cars.php">Go Back</a>
     <br><br>
     <form enctype='multipart/form-data' method="POST" action="#">

         <label for="inputcarname" class="sr-only">car brand</label>
         <select name="brand" id="" class="form-control mb-3">
             <option value="mahindra">Mahindra</option>
             <option value="tata">Tata</option>
             <option value="hyundai">Hyundai</option>
             <option value="toyota">Toyota</option>
         </select>
         <label for="inputcarname" class="sr-only">car name</label>
         <input type="text" name="name" id="carname" class="form-control mb-3"><br>
         <label for="inputplateno" class="sr-only">number plate</label>
         <input type="plateno" name="numberplate" id="inputEmail" class="form-control mb-3">
         <span id="displayE" class=""></span><br>
         <label for="inputpassword" class="sr-only">price</label>
         <input type="price" id="price" name="price" class="form-control mb-3"><br>
         <label for="file">carimage</label>
         <input type="file" name="file" class="form-control" id="file"><br>
         <button type="submit" name="submit" class="btn btn-danger">upload</button>
         <span id="displayP"></span>
     </form>
 </div>