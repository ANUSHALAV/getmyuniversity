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


    <div class="container mt-5">
        <table class="table text-capitalize">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">college name</th>
                    <th scope="col">state</th>
                    <th scope="col">addres</th>
                    <th scope="col">fee</th>
                    <th scope="col">ownership</th>
                    <th scope="col">established</th>
                    <th scope="col">college logo</th>
                    <th scope="col">edit</th>
                    <th scope="col">delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'collegs');



                $query = "SELECT * FROM `medical_in_india`";

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
                                <?php echo $row['state']; ?>
                            </td>
                            <td>
                                <?php echo $row['addres']; ?>
                            </td>
                            <td>
                                <?php echo $row['fee_per_year']; ?>
                            </td>
                            <td>
                                <?php echo $row['ownership']; ?>
                            </td>
                            <td>
                                <?php echo $row['established']; ?>
                            </td>
                            <td>
                                <img width="70px" height="60px"
                                    src="data:image/jpeg;base64,<?php echo base64_encode($row['college_logo']); ?>">
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
</body>

</html>