<?php

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


// You don't need to use a WHERE clause in an INSERT query
$query = "UPDATE `navbar` SET `text_color` = '$textColor', `background-color` = '$backgroundColor' WHERE `id` = 2";

$result = mysqli_query($conn, $query);

if ($result) {
    header("Location: http://localhost/collegs/");
} else {
    echo "Data not updated...";
}

?>