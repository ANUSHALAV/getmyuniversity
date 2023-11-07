<?php


$conn = mysqli_connect("localhost", "root", "", "collegs");

$id = $_REQUEST['id'];

$query = "DELETE FROM `medical_in_india` WHERE `id`='$id'";

$result = mysqli_query($conn, $query);
if ($result) {
    header('Location: http://localhost/collegs/admin/allIndiaUniversity.php');
}else{
    header('Location: http://localhost/collegs/admin/allIndiaUniversity.php');
}
?>