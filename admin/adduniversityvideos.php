<?php


if (isset($_POST['btn'])) {
    $conn = mysqli_connect("localhost", "root", "", "collegs");

    $heading = $_POST['video_heading'];
    $video_link = $_POST['video_link'];
    $thumbnail_img = $_FILES['thumbnail_img']['tmp_name'];

    $imageData=file_get_contents($thumbnail_img);
    $imagaData=mysqli_escape_string($conn, $imageData);

    $query = "INSERT INTO `university_videos`(`video_heading`, `video_link`, `video_thumbnail`) VALUES ('$heading','$video_link','$imagaData')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: http://localhost/collegs/admin/alluniversityvideos.php");
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
        <h2 class="fw-bold text-capitalize py-5">add university videos</h2>

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label">Video heading</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="video_heading">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label">Video link</label>
                <input type="url" class="form-control" id="exampleInputPassword1" name="video_link">
            </div>
            <div class="mb-4">
                <label class="form-label" for="exampleInputEmail">video Thumbnail</label>
                <input type="file" class="form-control" id="exampleCheck1" name="thumbnail_img">
            </div>
            <button type="submit" class="btn btn-danger" name="btn">Submit</button>
        </form>
    </div>
</body>

</html>