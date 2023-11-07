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
        <h2 class="fw-bold py-5 text-capitalize">all blogs</h2>

        <table class="table text-capitalize">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Blog front image</th>
                    <th scope="col">Blog heading</th>
                    <th scope="col">Blog post date</th>
                    <th scope="col">Blog short discription</th>
                    <th scope="col">about the blog</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'collegs');



                $query = "SELECT * FROM `blogs`";

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
                                    src="data:image/jpeg;base64,<?php echo base64_encode($row['blog_front_image']); ?>">
                            </td>
                            <td>
                                <?php echo $row['blog_heading']; ?>
                            </td>
                            <td>
                               <?php echo $row['blog_date'] ?>
                            </td>
                            <td>
                                <?php echo $row['discription']; ?>
                            </td>
                            <td>
                                <?php echo $row['about_the_blog']; ?>
                            </td>
                            <td><a href="editblog.php?id=<?php echo $row['id'] ?>" class="btn btn-primary" id="<?php echo $row['id'] ?>">edit</a></td>
                            <td><a href="deleteblog.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" id="<?php echo $row['id'] ?>">delete</a></td>
                        </tr>
                    <?php }
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>