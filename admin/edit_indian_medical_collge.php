<?php

if (isset($_POST['btn'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'collegs');
    $collegeName = $_POST['college_name'];
    $state = $_POST['inputState'];
    $addres = $_POST['addres'];
    $fee = $_POST['fee'];
    $ownership = $_POST['ownership'];
    $established = $_POST['established'];
    $location_detail = $_POST['location_detail'];
    $courses = $_POST['courses'];
    $id = $_REQUEST['id'];
    $affilated_by = $_POST['affilated_by'];
    $college_email_id = $_POST['college_email_id'];
    $about_the_college = $_POST['about_the_college'];
    $about_the_faculty = $_POST['about_the_faculty'];
    $conclusion = $_POST['conclusion'];

    $image = $_FILES['image']['tmp_name'];

    $imageData = file_get_contents($image);
    $imageData = mysqli_real_escape_string($conn, $imageData);


    $collegeimage = $_FILES['college_img']['tmp_name'];

    $collegeimageData = file_get_contents($collegeimage);
    $collegeimageData = mysqli_real_escape_string($conn, $collegeimageData);

    $query = "UPDATE `medical_in_india` SET `college_name`='$collegeName', `college_logo`='$imageData', `state`='$state', `addres`='$addres', `fee_per_year`='$fee', `ownership`='$ownership',`established`='$established',`college_img`='$collegeimageData',`location_detail`='$location_detail',`courses`='$courses',`affilated_by`='$affilated_by',`college_email_id`='$college_email_id',`about_the_college`='$about_the_college',`about_the_faculty`='$about_the_faculty',`conclusion`='$conclusion' WHERE `id`='$id'";

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
    <?php

    $conn = mysqli_connect('localhost', 'root', '', 'collegs');

    $id = $_REQUEST['id'];

    $query = "SELECT * FROM `medical_in_india` WHERE `id`='$id'";

    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) { ?>


            <div class="container">
                <h3 class="my-5">Edit indain medical college</h3>
                <form action="" class="text-capitalize" enctype="multipart/form-data" method="post">
                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label">college name</label>
                        <input type="text" class="form-control py-2" id="exampleFormControlInput1" placeholder="college name"
                            name="college_name" value="<?php echo $row['college_name'] ?>">
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label">college addres</label>
                        <input type="text" class="form-control py-2" id="exampleFormControlInput1" placeholder="college addres"
                            name="addres" value="<?php echo $row['addres'] ?>">
                    </div>

                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label">fee per year(in lakh)</label>
                        <input type="number" class="form-control py-2" id="exampleFormControlInput1" placeholder="fee per year"
                            name="fee" value="<?php echo $row['fee_per_year'] ?>">
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label">college logo</label>
                        <input type="file" class="form-control py-2" id="exampleFormControlInput1" name="image">
                    </div>

                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label">college image</label>
                        <input type="file" class="form-control py-2" id="exampleFormControlInput1" name="college_img">
                    </div>

                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label">courses</label>
                        <input type="text" class="form-control py-2" id="exampleFormControlInput1" placeholder="courses"
                            name="courses" value="<?php echo $row['courses'] ?>">
                    </div>

                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label">college Established in</label>
                        <input type="text" class="form-control py-2" id="exampleFormControlInput1" name="established"
                            placeholder="college established in" value="<?php echo $row['established'] ?>">
                    </div>

                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label">college location detail</label>
                        <textarea type="text" class="form-control py-2" id="exampleFormControlInput1" name="location_detail"
                            placeholder="college location detail" rows="10"><?php echo $row['location_detail'] ?></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label">Affilated by</label>
                        <input type="text" class="form-control py-2" id="exampleFormControlInput1" name="affilated_by"
                            placeholder="college affilated by" value="<?php  echo $row['affilated_by'] ?>">
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label">college offcial email id</label>
                        <input type="email" class="form-control py-2" id="exampleFormControlInput1" name="college_email_id"
                            placeholder="college offcial email id" value="<?php  echo $row['college_email_id'] ?>">
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label">About the college</label>
                        <textarea type="text" class="form-control py-2" id="exampleFormControlInput1" name="about_the_college"
                            placeholder="about the college" rows="10"><?php  echo $row['about_the_college'] ?></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label">About the faculty</label>
                        <textarea type="text" class="form-control py-2" id="exampleFormControlInput1" name="about_the_faculty"
                            placeholder="about the faculty" rows="10"><?php  echo $row['about_the_faculty'] ?></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label">conclusion</label>
                        <textarea type="text" class="form-control py-2" id="exampleFormControlInput1" name="conclusion"
                            placeholder="about the faculty" rows="10"><?php  echo $row['conclusion'] ?></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="inputownership">owership</label>
                        <select class="form-control" id="ownership" name="ownership">
                            <option value="<?php echo $row['state'] ?>">
                                <?php echo $row['ownership'] ?>
                            </option>
                            <option value="public">public</option>
                            <option value="private">private</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label for="inputState">State</label>
                        <select class="form-control" id="inputState" name="inputState">
                            <option value="<?php echo $row['state'] ?>">
                                <?php echo $row['state'] ?>
                            </option>
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

            <?php }
    } ?>
    </div>
</body>

</html>