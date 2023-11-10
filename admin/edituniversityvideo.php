<?php


if (isset($_POST['btn'])) {
    $conn = mysqli_connect("localhost", "root", "", "collegs");

    $heading = $_POST['video_heading'];
    $video_link = $_POST['video_link'];
    $video_related_on = $_POST['video_related_on'];
    $video_post_date=$_POST['video_post_date'];
    $id = $_POST['id'];

    if (isset($_FILES['thumbnail_img']['tmp_name']) && !empty($_FILES['thumbnail_img']['tmp_name'])) {
        $thumbnail_img = $_FILES['thumbnail_img']['tmp_name'];
        $imageData = file_get_contents($thumbnail_img);
        $imageData = mysqli_escape_string($conn, $imageData);

        $updateimage = "UPDATE `university_videos` SET `video_thumbnail` = '$imageData' WHERE `id`='$id'";
        $result = mysqli_query($conn, $updateimage);
        if ($result) {
            header("Location: http://localhost/collegs/admin/alluniversityvideos.php");
        } else {
            echo '<script>console.log("Cannot insert data successfully...");</script>';
        }
    }


    $query = "UPDATE  `university_videos` SET `video_heading`='$heading', `video_link`='$video_link',`video_related_on`='$video_related_on',`video_post_date`='$video_post_date' WHERE `id`='$id'";

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
        <h2 class="fw-bold text-capitalize py-5">edit university videos</h2>
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'collegs');
        $id = $_REQUEST['id'];

        $query = "SELECT * FROM `university_videos` WHERE `id`='$id'";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) { ?>


                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>">

                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Video heading</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="video_heading" value="<?php echo $row['video_heading'] ?>">
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Video link</label>
                        <input type="url" class="form-control" id="exampleInputPassword1" name="video_link"
                            value="<?php echo $row['video_link'] ?>">
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Video post date</label>
                        <input type="date" class="form-control" id="exampleInputPassword1" name="video_post_date"
                            value="<?php echo $row['video_post_date'] ?>">
                    </div>
                    <div class="mb-4">
                        <label for="" class="form-lable">Which Topic Related Video You Want To Post</label>
                        <select class="form-select" aria-label="Default select example" name="video_related_on">
                            <option value="<?php echo $row['video_related_on'] ?>">
                                <?php echo $row['video_related_on'] ?>
                            </option>
                            <option value="Medical College Review">medical college review</option>
                            <option value="Neet PG Counselling">Neet PG Counselling</option>
                            <option value="Neet UG Counselling">Neet UG Counselling</option>
                            <option value="MBBS Abroad">MBBS Abroad</option>
                            <option value="Neet UG 2023 Updates">Neet UG 2023 Updates</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="exampleInputEmail">video Thumbnail</label>
                        <input type="file" class="form-control" id="exampleCheck1" name="thumbnail_img">
                        <div>
                            <img src="data:image/jpeg;base64,<?php echo base64_encode($row['video_thumbnail']); ?>" alt=""
                                height="60px" width="50px">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-danger" name="btn">Submit</button>
                </form>

                <?php
            }
        } ?>
    </div>
</body>

</html>