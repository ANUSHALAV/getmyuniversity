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
            <h3 class="fw-bold text-capitalize py-4">all universty video</h3>

            <table class="table text-capitalize mt-5">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">video heading</th>
                        <th scope="col">video link</th>
                        <th scope="col">video thambnail</th>
                        <th scope="col">video post date</th>
                        <th scope="col">video related on</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'collegs');



                    $query = "SELECT * FROM `university_videos`";

                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_array($result)) {
                            ?>

                            <tr>
                                <td>
                                    <?php echo $row['id']; ?>
                                </td>
                                <td>
                                    <?php echo $row['video_heading']; ?>
                                </td>
                                <td>
                                    <?php echo $row['video_link']; ?>
                                </td>
                                <td>
                                    <img width="70px" height="60px"
                                        src="data:image/jpeg;base64,<?php echo base64_encode($row['video_thumbnail']); ?>">
                                </td>
                                <td>
                                    <?php echo $row['video_post_date'] ?>
                                </td>
                                <td>
                                    <?php echo $row['video_related_on']; ?>
                                </td>
                                <td><a href="edituniversityvideo.php?id=<?php echo $row['id'] ?>" class="btn btn-primary"
                                        id="<?php echo $row['id'] ?>">edit</a></td>
                                <td><a href="deleteuniversityvideo.php?id=<?php echo $row['id'] ?>" class="btn btn-danger"
                                        id="<?php echo $row['id'] ?>">delete</a></td>
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