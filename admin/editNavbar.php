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
        </head>

        <body>
            <?php include 'sidebar.php'; ?>

            <div class="container mt-5">
                <h2>Edit Navbar</h2>
                <form action="updateNavbar.php" method="POST" enctype="multipart/form-data">
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
                        <img src="data:image/jpeg;base64,<?= base64_encode($row['logo']) ?>" width="100">
                        <br>
                        <label for="newImageUpload">New Image (if needed):</label>
                        <input type="file" class="form-control-file" id="newImageUpload" name="logo">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>

        <?php }
} ?>
</body>

</html>