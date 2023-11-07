<?php


$conn = mysqli_connect("localhost", "root", "", "collegs");

$id = $_REQUEST['id'];

$query = "DELETE FROM `blogs` WHERE `id`='$id'";

$result = mysqli_query($conn, $query);

if ($result) {
    header('Location: http://localhost/collegs/admin/allblogs.php');
}



?>