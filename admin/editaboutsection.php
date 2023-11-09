<?php


if (isset($_POST['btn'])) {
    $conn = mysqli_connect("localhost", "root", "", "collegs");
    $company_name = $_POST['company_name'];
    $about_the_company = $_POST['about_the_company'];

    $keypoint1 = $_POST['keypoint1'];

    $keypoint2 = $_POST['keypoint2'];

    $keypoint3 = $_POST['keypoint3'];

    $keypoint4 = $_POST['keypoint4'];
    $keypoint5 = $_POST['keypoint5'];

    $about_section_image = $_FILES['about_section_image']['tmp_name'];
    $imageData = file_get_contents($about_section_image);
    $imageData = mysqli_escape_string($conn, $imageData);

    $query = "UPDATE `about` SET `company_name`='$company_name',`about_the_company`='$about_the_company',`about_section_image`='$imageData',`key_point1`='$keypoint1',`key_point2`='$keypoint2',`key_point3`='$keypoint3',`key_point4`='$keypoint4',`key_point5`='$keypoint5' WHERE `id`=1";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: http://localhost/collegs/index.php");
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
    <div class="container">
        <div class="row py-4 text-capitalize">
            <div class="col-12 my-5">
                <h2 class=" fw-bold">edit about section</h2>
            </div>
            <form method="post" enctype="multipart/form-data">
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'collegs');

                $query = "SELECT * FROM `about`";

                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) { ?>


                        <div class="mb-5">
                            <label for="exampleInputEmail1" class="form-label">company name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="company name" name="company_name" value="<?php echo $row['company_name'] ?>">
                        </div>
                        <div class="mb-5">
                            <label for="exampleInputPassword1" class="form-label">about the company</label>
                            <textarea type="text" class="form-control" id="exampleInputPassword1"
                                placeholder="about the company" name="about_the_company"
                                rows="8"><?php echo $row['about_the_company'] ?></textarea>
                        </div>
                        <div class="mb-5">
                            <label for="exampleInputPassword1" class="form-label">about section image</label>
                            <input type="file" class="form-control" id="exampleInputPassword1" name="about_section_image">
                        </div>

                        <div class="mb-5">
                            <label for="exampleInputPassword1" class="form-label">company key points</label>
                            <input type="text" class="form-control mb-3" id="exampleInputPassword1" placeholder="point 1"
                                name="keypoint1" value="<?php echo $row['key_point1'] ?>">
                            <input type="text" class="form-control mb-3" id="exampleInputPassword1" placeholder="point 2"
                                name="keypoint2" value="<?php echo $row['key_point2'] ?>">
                            <input type="text" class="form-control mb-3" id="exampleInputPassword1" placeholder="point 3"
                                name="keypoint3" value="<?php echo $row['key_point3'] ?>">
                            <input type="text" class="form-control mb-3" id="exampleInputPassword1" placeholder="point 4"
                                name="keypoint4" value="<?php echo $row['key_point4'] ?>">
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="point 5"
                                name="keypoint5" value="<?php echo $row['key_point5'] ?>">

                        </div>



                        <button type="submit" class="btn btn-danger" name="btn">Submit</button>
                        <?php
                    }
                }
                ?>
            </form>

        </div>
    </div>
</body>

</html>