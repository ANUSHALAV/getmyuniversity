<?php

if (isset($_POST["btn"])) {
    $conn = mysqli_connect("localhost", "root", "", "collegs");



    if (isset($_FILES["service_section_image"]["tmp_name"]) && !empty($_FILES["service_section_image"]["tmp_name"])) {
        $service_section_image = $_FILES['service_section_image']['tmp_name'];

        $service_imgData = file_get_contents($service_section_image);
        $service_imgData = mysqli_escape_string($conn, $service_imgData);

        $updateimage = "UPDATE `service_section_image` SET `service_section_img`='$service_imgData' WHERE `id`=1";
        if (mysqli_query($conn, $updateimage)) {
            header('Location: http://localhost/collegs/admin/service_section.php');
        } else {
            echo '<script>console.log("Cannot insert data successfully...");</script>';
        }
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

    <div class="d-flex justify-content-between">
        <div class="w-25">
            <?php
            include 'sidebar.php';
            ?>
        </div>
        <div class="container my-4 w-75">
            <h3 class="fw-bold text-capitalize py-4">service section update image</h3>

            <form action="" enctype="multipart/form-data" method="post">
                <div class="mb-4">
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "collegs");
                    $query = "SELECT * FROM `service_section_image` WHERE `id`=1";

                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) { ?>


                            <label for="exampleFormControlInput1" class="form-label">service section image</label>
                            <input type="file" class="form-control" id="exampleFormControlInput1" name="service_section_image">
                            <div>
                                <img src="data:image/jpeg;base64,<?php echo base64_encode($row['service_section_img']); ?>"
                                    alt="" height="60px" width="50px">
                            </div>
                        </div>

                        <div class="mb-3">
                            <input type="submit" class="btn btn-outline-danger" name="btn">
                        </div>
                        <?php
                        }
                    } ?>
            </form>

            <table class="table text-capitalize mt-5">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">service section image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'collegs');



                    $query = "SELECT * FROM `service_section_image`";

                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_array($result)) {
                            ?>

                            <tr>
                                <td>
                                    <?php echo $row['id']; ?>
                                </td>
                                <td>
                                    <img width="70px" height="60px"
                                        src="data:image/jpeg;base64,<?php echo base64_encode($row['service_section_img']); ?>">
                                </td>
                            </tr>
                        <?php }
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>




</body>

</html>