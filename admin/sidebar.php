<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    body {
      font-family: "Lato", sans-serif;
    }

    .sidenav {
      height: 100%;
      width:22%;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #111;
      overflow-x: hidden;
      padding-top: 20px;
    }

    .sidenav a {
      padding: 6px 8px 6px 5px;
      text-decoration: none;
      font-size:19px;
      color: #818181;
      display: block;
    }

    .sidenav a:hover {
      color: #f1f1f1;
    }

    .main {
      margin-left: 160px;
      /* Same as the width of the sidenav */
      font-size: 28px;
      /* Increased text to enable scrolling */
      padding: 0px 10px;
    }

    @media screen and (max-height: 450px) {
      .sidenav {
        padding-top: 15px;
      }

      .sidenav a {
        font-size: 18px;
      }
    }
  </style>
</head>

<body>

  <div class="sidenav">
    <a class="navbar-brand text-center" href="index.html">
      <img src="https://www.getmyuniversity.com/images/logo.png" alt="getmyuniversity" width="100" height="100">
    </a>
    <button class='btn w-100 btn-dark  m-2'><a class='text-start' href="#about">Dashboard</a></button>
    <button class='btn w-100 btn-dark  m-2'><a class='text-start' href="addPage.php">Add Page</a></button>
    <button class='btn w-100 btn-dark  m-2'><a class='text-start' href="addPage.php">All Pages</a></button>
    <button class='btn w-100 btn-dark  m-2'><a class='text-start' href="addAdmissionCounselling.php"> Add Admission
        Counselling </a></button>
    <button class='btn w-100 btn-dark  m-2'><a class='text-start' href="allAdmissionCounselling.php"> All Admission
        Counselling </a></button>
    <button class='btn w-100 btn-dark  m-2'><a class='text-start' href="addAbroadCountry.php"> Add Abroad Country
      </a></button>
    <button class='btn w-100 btn-dark  m-2'><a class='text-start' href="allAbroadCountry.php"> All Abroad Country
      </a></button>
    <button class='btn w-100 btn-dark  m-2'><a class='text-start' href="insert_fastfacts.php"> Add fast fact
      </a></button>
    <button class='btn w-100 btn-dark  m-2'><a class='text-start' href="addIndiaUniversity.php"> Add indian medical
        university </a></button>
    <button class='btn w-100 btn-dark  m-2'><a class='text-start' href="allIndiaUniversity.php"> All indian medical
        university </a></button>
    <button class='btn w-100 btn-dark  m-2'><a class='text-start' href="addservices.php"> Add Services </a></button>
    <button class='btn w-100 btn-dark  m-2'><a class='text-start' href="service_section.php"> sercive section image
      </a></button>

    <button class='btn w-100 btn-dark  m-2'><a class='text-start' href="allservices.php"> All Services </a></button>
    <button class='btn w-100 btn-dark  m-2'><a class='text-start' href="editaboutsection.php">Edit About Section
      </a></button>
    <button class='btn w-100 btn-dark  m-2'><a class='text-start' href="adduniversityvideos.php">Add University
        videos</a></button>
    <button class='btn w-100 btn-dark  m-2'><a class='text-start' href="alluniversityvideos.php"> All University videos
      </a></button>
    <button class='btn w-100 btn-dark  m-2'><a class='text-start' href="addblogs.php">Add blogs </a></button>
    <button class='btn w-100 btn-dark  m-2'><a class='text-start' href="allblogs.php">All blogs </a></button>
    <button class='btn w-100 btn-dark  m-2'><a class='text-start' href="editForum.php">Forum </a></button>
    <button class='btn w-100 btn-dark  m-2'><a class='text-start' href="editNavbar.php">Edit Navabar</a></button>
    <button class='btn w-100 btn-dark  m-2'><a class='text-start' href="editHeroSection.php">Edit hero
        section</a></button>
    <button class='btn w-100 btn-dark  m-2'><a class='text-start' href="editfooter.php">Footer</a></button>
    <button class='btn w-100 btn-dark  m-2'><a class='text-start' href="addGallery.php">Add Gallery</a></button>
    <button class='btn w-100 btn-dark  m-2'><a class='text-start' href="allGallery.php">All Gallery</a></button>

  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>