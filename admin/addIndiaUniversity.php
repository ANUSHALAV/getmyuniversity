<?php

if (isset($_POST['btn'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'collegs');
    $collegeName = $_POST['college_name'];
    $state = $_POST['inputState'];
    $addres = $_POST['addres'];
    $fee = $_POST['fee'];
    $ownership = $_POST['ownership'];
    $established = $_POST['established'];

    $image = $_FILES['image']['tmp_name'];

    $imageData = file_get_contents($image);
    $imageData = mysqli_real_escape_string($conn, $imageData);

    $query = "INSERT INTO `medical_in_india`(`college_name`, `college_logo`, `state`, `addres`, `fee_per_year`, `ownership`,`established`) VALUES ('$collegeName','$imageData','$state','$addres','$fee','$ownership','$established')"; // Fix the concatenation error here by separating $fee and $ownership.

    if (mysqli_query($conn, $query)) {
        header('Location: http://localhost/collegs/admin/allIndiaUniversity.php');
    } else {
        echo '<script>console.log("Cannot insert data successfully...");</script>';
    }
}
?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" media="all">
    <link rel="stylesheet" href="css/modifystyle.css">
</head>

<body class="">
    <?php include 'sidebar.php'; ?>

    <div class="container">
        <h3 class="my-5">Add india university</h3>
        <form action="" class="text-capitalize" enctype="multipart/form-data" method="post">
            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">college name</label>
                <input type="text" class="form-control py-2" id="exampleFormControlInput1" placeholder="college name"
                    name="college_name">
            </div>
            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">college addres</label>
                <input type="text" class="form-control py-2" id="exampleFormControlInput1" placeholder="college addres"
                    name="addres">
            </div>

            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">fee per year(in lakh)</label>
                <input type="number" class="form-control py-2" id="exampleFormControlInput1" placeholder="fee per year"
                    name="fee">
            </div>
            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">college logo</label>
                <input type="file" class="form-control py-2" id="exampleFormControlInput1" name="image">
            </div>

            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">college Established in</label>
                <input type="text" class="form-control py-2" id="exampleFormControlInput1" name="established" placeholder="college established in">
            </div>

            <div class="mb-4">
                <label for="inputownership">owership</label>
                <select class="form-control" id="ownership" name="ownership">
                    <option value="SelectState">Select ownership</option>
                    <option value="public">public</option>
                    <option value="private">private</option>
                </select>
            </div>
            <div class="mb-5">
                <label for="inputState">State</label>
                <select class="form-control" id="inputState" name="inputState">
                    <option value="SelectState">Select State</option>
                    <option value="Andra Pradesh">Andra Pradesh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madya Pradesh">Madya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Orissa">Orissa</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="West Bengal">West Bengal</option>
                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                    <option value="Daman and Diu">Daman and Diu</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Lakshadeep">Lakshadeep</option>
                    <option value="Pondicherry">Pondicherry</option>
                </select>
            </div>

            <div>
                <input type="submit" class="btn btn-outline-danger w-25" name="btn">
            </div>
        </form>
    </div>
</body>

</html>



<!-- <script>

    addEventListener("key",()=>{
        let passwordvalue=document.getElementById("password").value;


        if(passwordvalue.length<=10){
            return true;
        }else{
            pre
        }
    })
</script> -->