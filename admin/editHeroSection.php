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


    <div class="container py-3 text-capitalize">
        <h2 class="fw-bold my-4">edit hero section</h2>

        <form action="updateHeroSection.php" class="my-5" method="POST" enctype="multipart/form-data">

            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">heading 1</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="heading 1"
                    name="heading1">
            </div>
            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">heading 2</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="heading 2"
                    name="heading2">
            </div>
            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">heading 3</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="heading 3"
                    name="heading3">
            </div>

            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">small discription</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="small description about the hero section" name="discription">
            </div>

            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">hero section background color</label>
                <input type="color" class="form-control w-25 p-0" id="exampleFormControlInput1" name="bg-color">
            </div>

            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">hero section image</label>
                <input type="file" class="form-control" id="exampleFormControlInput1" name="hero-img">
            </div>

            <div class="mb-5">
                <input type="submit" value="Submit" class="btn btn-outline-danger px-5" id="exampleFormControlInput1"
                    name="btn">
            </div>


        </form>
    </div>
</body>

</html>