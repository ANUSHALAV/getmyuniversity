<?php

if (isset($_POST["btn"])) {

    $conn = mysqli_connect('localhost', 'root', '', 'collegs');

    $blog_heading = $_POST['blog_heading'];
    $discription = $_POST['discription'];
    $blog_date = $_POST['blog_date'];
    $about_the_blog = $_POST['about_the_blog'];
    $locationcompresion1 = $_POST['locationcompresion1'];
    $locationcompresion2 = $_POST['locationcompresion2'];
    $historycompresion1 = $_POST['historycompresion1'];
    $historycompresion2 = $_POST['historycompresion2'];
    $placementcompresion1 = $_POST['placementcompresion1'];
    $placementcompresion2 = $_POST['placementcompresion2'];

    $blog_front_image = $_FILES['blog_front_image']['tmp_name'];

    $imageData = file_get_contents($blog_front_image);
    $imageData = mysqli_real_escape_string($conn, $imageData);


    $query = "INSERT INTO `blogs` (`blog_front_image`, `blog_heading`, `blog_date`, `discription`, `about_the_blog`, `locationcompresion1`, `locationcompresion2`, `historycompresion1`, `historycompresion2`, `placementcompresion1`, `placementcompresion2`) VALUES ('$imageData','$blog_heading','$blog_date','$discription','$about_the_blog','$locationcompresion1','$locationcompresion2','$historycompresion1','$historycompresion2','$placementcompresion1','$placementcompresion2')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header('Location: http://localhost/collegs/admin/allblogs.php');
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

    <div class="container my-5">
        <h2 class="py-4 text-capitalize fw-bold py-5">add blogs</h2>

        <form  action="" method="post" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label">Blog front image</label>
                <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="blog_front_image">
            </div>
            <div class="mb-4">
                <label for="exampleInputPassword1" class="form-label">Blog heading</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="blog heading"
                    name="blog_heading">
            </div>
            <div class="mb-4">
                <label for="exampleInputPassword1" class="form-label">Blog post date</label>
                <input type="date" class="form-control" id="exampleInputPassword1" name="blog_date">
            </div>
            <div class="mb-4">
                <label for="exampleInputPassword1" class="form-label">Blog short discription</label>
                <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="blog short discription"
                    name="discription" rows="10"></textarea>
            </div>
            <div class="mb-4">
                <label for="exampleInputPassword1" class="form-label">about the blog</label>
                <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="about the blog"
                    rows="10" name="about_the_blog"></textarea>
            </div>



            <div class="mb-4">
                <label for="exampleInputPassword1" class="form-label">campus location</label>
                <div class="">
                    <textarea type="text" class="form-control w-100 mb-4" id="exampleInputPassword1"
                        placeholder="locationcompresioning 1" name="locationcompresion1" rows="10"></textarea>
                    <textarea type="text" class="form-control w-100" id="exampleInputPassword1"
                        placeholder="locationcompresioning 2" name="locationcompresion2" rows="10"></textarea>
                </div>
            </div>

            <div class="mb-4">
                <label for="exampleInputPassword1" class="form-label">history</label>
                <div class="">
                    <textarea type="text" class="form-control w-100 mb-4" rows="10" id="exampleInputPassword1"
                        placeholder="historycompresioning 1" name="historycompresion1"></textarea>
                    <textarea type="text" class="form-control w-100 mb-4" rows="10" id="exampleInputPassword1"
                        placeholder="historycompresioning 2" name="historycompresion2"></textarea>
                </div>
            </div>

            <div class="mb-4">
                <label for="exampleInputPassword1" class="form-label">Placement</label>
                <div class="">
                    <textarea type="text" class="form-control w-100 mb-4" rows="10" id="exampleInputPassword1"
                        placeholder="locationcompresioning 1" name="placementcompresion1"></textarea>
                    <textarea type="text" class="form-control  mb-4" rows="10" id="exampleInputPassword1"
                        placeholder="locationcompresioning 2" name="placementcompresion2"></textarea>
                </div>
            </div>



            <button type="submit" class="btn btn-danger mt-4" name="btn">Submit</button>
        </form>

    </div>
</body>

</html>