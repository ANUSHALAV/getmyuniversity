<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<div class="d-flex justify-content-between w-100">
    <div class="w-25">
        <?php
        include 'sidebar.php';
        ?>
    </div>
        <div class="container mb-5 w-75">
            <h2 class="fw-bold text-capitalize py-5">all gallery</h2>


            <table class="table text-capitalize">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">college name</th>
                        <th scope="col">college image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'collegs');



                    $query = "SELECT * FROM `gallery`";

                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_array($result)) {
                            ?>

                            <tr>
                                <td>
                                    <?php echo $row['id']; ?>
                                </td>
                                <td>
                                    <?php echo $row['college_name']; ?>
                                </td>
                                <td>
                                    <img width="70px" height="60px"
                                        src="data:image/jpeg;base64,<?php echo base64_encode($row['college_image']); ?>">
                                </td>
                                <td><a href="editgallery.php?id=<?php echo $row['id'] ?>" class="btn btn-primary"
                                        id="<?php echo $row['id'] ?>">edit</a></td>
                                <td><a href="deletegallery.php?id=<?php echo $row['id'] ?>" class="btn btn-danger"
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