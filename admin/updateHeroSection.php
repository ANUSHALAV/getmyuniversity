<?php


$conn = mysqli_connect("localhost", "root", "", "collegs");

$heading1 = $_POST['heading1'];
$heading2 = $_POST['heading2'];
$heading3 = $_POST['heading3'];
$discription = $_POST['discription'];
$bgcolor = $_POST['bg-color'];

$image = $_FILES['hero-img']['tmp_name'];

$imageData = file_get_contents($image);
$imageData = mysqli_real_escape_string($conn, $imageData);


$query = "UPDATE `hero_section` SET `heading1`='$heading1',`heading2`='$heading2',`heading3`='$heading3',`discription`='$discription',`bgcolor`='$bgcolor',`image`='$imageData' WHERE `id`=1";

$result = mysqli_query($conn, $query);

if ($result) {
    header('Location: http://localhost/collegs/index.php');
} else {
    echo '<script>hero section not updated...</script>';
}


?>