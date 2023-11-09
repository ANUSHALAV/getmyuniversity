<?php

if (isset($_POST["btn"])) {
    $conn = mysqli_connect("localhost", "root", "", "collegs");

    $backgroundColor = $_POST['background-color'];
    $textColor = $_POST['text_color'];




    if (isset($_FILES['logo']['tmp_name']) && !empty($_FILES['logo']['tmp_name'])) {
        $image = $_FILES['logo']['tmp_name'];

        $imageData = file_get_contents($image);
        $imageData = mysqli_real_escape_string($conn, $imageData);

        $updateimage = "UPDATE `navbar` SET `logo` = '$imageData' WHERE `id`=2";
        if (mysqli_query($conn, $updateimage)) {
            header('Location: http://localhost/collegs');
        } else {
            echo '<script>console.log("Cannot insert data successfully...");</script>';
        }
    }

    $query = "UPDATE `navbar` SET `text_color` = '$textColor', `background-color` = '$backgroundColor' WHERE `id` = 2";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: http://localhost/collegs/");
    } else {
        echo "Data not updated...";
    }
}

?>





<?php
// Define database connection details
$host = "localhost";
$username = "root";
$password = "";
$database = "collegs";

$conn = mysqli_connect($host, $username, $password, $database);

$query = "SELECT * FROM `navbar` WHERE `id`=2";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        ?>

        <!DOCTYPE html>
        <html>

        <head>
            <title>Edit Fast Fact Recorde</title>
            <!-- Add Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

            <style>
                body{
                    height:100vh;
                    width:100%;
                    display: flex;
                    justify-content: space-between;
                }
            </style>
        </head>

        <body class="d-flex justify-content-between">
            <?php include 'sidebar.php'; ?>

            <div class="container mt-5  ">
                <h2>Edit Navbar</h2>
                <form method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <div class="form-group">
                        <label for="countryName">Background color:</label>
                        <input type="color" class="form-control w-25 p-0" id="countryName" name="background-color"
                            value="<?php echo $row['background-color'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="courseName">Text Color :</label>
                        <input type="color" class="form-control w-25 p-0" id="courseName" name="text_color"
                            value="<?php echo $row['text_color'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="imageUpload">Current Image:</label>
                        <input type="file" class="form-control-file" id="newImageUpload" name="logo">
                        <div>
                            <img src="data:image/jpeg;base64,<?php echo base64_encode($row['logo']); ?>" alt="" width="50px">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="btn">Save Changes</button>
                </form>
            </div>

        <?php }
} ?>
</body>

</html>