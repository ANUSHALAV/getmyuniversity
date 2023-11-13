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
            <h2 class="fw-bold py-4 text-capitalize">all services</h2>

            <table class="table text-capitalize">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">service name</th>
                        <th scope="col">service discrition</th>
                        <th scope="col">service image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'collegs');



                    $query = "SELECT * FROM `services`";

                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_array($result)) {
                            ?>

                            <tr>
                                <td>
                                    <?php echo $row['id']; ?>
                                </td>
                                <td>
                                    <?php echo $row['service_name']; ?>
                                </td>
                                <td>
                                    <?php echo $row['service_dis']; ?>
                                </td>
                                <td>
                                    <img width="70px" height="60px"
                                        src="data:image/jpeg;base64,<?php echo base64_encode($row['service_img']); ?>">
                                </td>
                                <td><a href="" class="btn btn-primary" id="<?php echo $row['id'] ?>">edit</a></td>
                                <td><a href="" class="btn btn-danger" id="<?php echo $row['id'] ?>">delete</a></td>
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