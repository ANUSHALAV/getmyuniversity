<?php

if (isset($_POST["btn"])) {
    $conn = mysqli_connect("localhost", "root", "", "collegs");
    $service_name = $_POST['service_name'];
    $service_dis = $_POST['service_discription'];
    $service_img = $_FILES['service_image']['tmp_name'];

    $service_imgData = file_get_contents($service_img);
    $service_imgData = mysqli_escape_string($conn, $service_imgData);

    $query = "INSERT INTO `services`(`service_name`, `service_dis`, `service_img`) VALUES ('$service_name','$service_dis','$service_imgData')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: http://localhost/collegs/admin/allservices.php");
    }
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    include 'sidebar.php';
    ?>

    <div class="container my-4">
        <h3 class="fw-bold text-capitalize py-4">add services</h3>

        <form action="" enctype="multipart/form-data" method="post">

            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">service name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="service_name">
            </div>
            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">service discription</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="service_discription">
            </div>
            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">service image</label>
                <input type="file" class="form-control" id="exampleFormControlInput1" name="service_image">
            </div>

            <div class="mb-3">
                <input type="submit" class="btn btn-outline-danger" name="btn">
            </div>
        </form>
    </div>
</body>

</html>