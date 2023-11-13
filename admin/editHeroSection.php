<?php

if (isset($_POST['btn'])) {

    $conn = mysqli_connect("localhost", "root", "", "collegs");

    $heading1 = $_POST['heading1'];
    $heading2 = $_POST['heading2'];
    $heading3 = $_POST['heading3'];
    $discription = $_POST['discription'];
    $bgcolor = $_POST['bg-color'];


    if (isset($_FILES['hero-img']['tmp_name']) && !empty($_FILES['hero-img']['tmp_name'])) {
        $image = $_FILES['hero-img']['tmp_name'];

        $imageData = file_get_contents($image);
        $imageData = mysqli_real_escape_string($conn, $imageData);

        $updateimage = "UPDATE `hero_section` SET `image` = '$imageData' WHERE `id`=1";
        if (mysqli_query($conn, $updateimage)) {
            header('Location: http://localhost/collegs');
        } else {
            echo '<script>console.log("Cannot insert data successfully...");</script>';
        }
    }


    $query = "UPDATE `hero_section` SET `heading1`='$heading1',`heading2`='$heading2',`heading3`='$heading3',`discription`='$discription',`bgcolor`='$bgcolor' WHERE `id`=1";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header('Location: http://localhost/collegs/index.php');
    } else {
        echo '<script>hero section not updated...</script>';
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

        <?php

        $conn = mysqli_connect("localhost", "root", "", "collegs");

        $query = "SELECT * FROM `hero_section` WHERE `id`=1";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result)) {
            while ($row = mysqli_fetch_array($result)) { ?>

                <div class="container py-3 text-capitalize w-75">
                    <h2 class="fw-bold my-4">edit hero section</h2>

                    <form class="my-5" method="POST" enctype="multipart/form-data">

                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="form-label">heading 1</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="heading 1"
                                name="heading1" value="<?php echo $row['heading1'] ?>">
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="form-label">heading 2</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="heading 2"
                                name="heading2" value="<?php echo $row['heading2'] ?>">
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="form-label">heading 3</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="heading 3"
                                name="heading3" value="<?php echo $row['heading3'] ?>">
                        </div>

                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="form-label">small discription</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="small description about the hero section" name="discription"
                                value="<?php echo $row['discription'] ?>">
                        </div>

                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="form-label">hero section background color</label>
                            <input type="color" class="form-control w-25 p-0" id="exampleFormControlInput1" name="bg-color"
                                value="<?php echo $row['bgcolor'] ?>">
                        </div>

                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="form-label">hero section image</label>
                            <input type="file" class="form-control" id="exampleFormControlInput1" name="hero-img">
                            <div>
                                <img src="data:image/jpeg;base64,<?php echo base64_encode($row['image']); ?>" alt=""
                                    height="60px" width="50px">
                            </div>
                        </div>

                        <div class="mb-5">
                            <input type="submit" value="Submit" class="btn btn-outline-danger px-5"
                                id="exampleFormControlInput1" name="btn">
                        </div>


                    </form>
                </div>

                <?php
            }
        } ?>
    </div>

</body>

</html>