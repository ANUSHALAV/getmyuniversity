<?php


if (isset($_POST['btn'])) {
    $conn = mysqli_connect("localhost", "root", "", "collegs");

    $id = $_POST['id'];

    $college_name = $_POST['college_name'];
    $college_image = $_FILES['college_img']['tmp_name'];
    $college_imageData = file_get_contents($college_image);
    $college_imageData = mysqli_escape_string($conn, $college_imageData);

    $query = "UPDATE `gallery` SET `college_name`='$college_name',`college_image`='$college_imageData' WHERE `id`='$id'";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header('Location: http://localhost/collegs/admin/allGallery.php');
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
    include 'sidebar.php'
        ?>

    <?php

    $conn = mysqli_connect('localhost', 'root', '', 'collegs');

    $id = $_REQUEST['id'];
    $query = "SELECT * FROM `gallery` WHERE `id`='$id'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) { ?>

            <div class="container my-4">
                <h2 class="fw-bold text-capitalize py-5">edit gallery</h2>
                <form action="" enctype="multipart/form-data" method="post">
                    <div class="mb-4">
                        <input type="hidden" class="form-control" id="exampleFormControlInput1"
                            value="<?php echo $row['id'] ?>" name="id">
                    </div>

                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label">college Image</label>
                        <input type="file" class="form-control" id="exampleFormControlInput1" name="college_img">
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlTextarea1" class="form-label">college name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="college name"
                            name="college_name" value="<?php echo $row['college_name'] ?> ">
                    </div>

                    <div class="mb-3">
                        <input type="submit" class="btn btn-outline-danger" name="btn">
                    </div>
                </form>
            </div>

            <?php
        }
    } ?>
</body>

</html>