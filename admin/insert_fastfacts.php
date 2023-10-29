<?php
require_once('./includes/db.php');


$page_id = $content = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $page_id = trim($_POST["page_id"]);
    if (empty($page_id) || !is_numeric($page_id)) {
        $errors["page_id"] = "Please enter a valid Page ID.";
    }

    if (isset($_POST["content"])) {
        $content = trim($_POST["content"]);
        if (empty($content)) {
            $errors["content"] = "Please enter the Fast Facts content.";
        }
    }

    if (empty($errors)) {
        $insertQuery = "INSERT INTO fast_facts (pages_id, content) VALUES (?, ?)";

        if ($stmt = $conn->prepare($insertQuery)) {
            $stmt->bind_param("is", $page_id, $content);

            if ($stmt->execute()) {
                header("Location: manage_fast_facts.php");
                exit();
            } else {
                $errors["database"] = "An error occurred while inserting data. Please try again.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Fast Facts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="custom.css">
</head>
<body>
    <?php include 'sidebar.php'  ?>
    <div class="container mt-5">
        <h1>Add Fast Facts</h1>
        <form action="insert_fastfacts.php" method="POST">
            <div class="form-group">
                <label for="page_id">Page ID:</label>
                <input type="number" class="form-control <?= isset($errors['page_id']) ? 'is-invalid' : '' ?>" id="page_id" name="page_id" value="<?= $page_id ?>" required>
                <?php if (isset($errors['page_id'])) : ?>
                    <div class="invalid-feedback">
                        <?= $errors['page_id'] ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="form-control <?= isset($errors['content']) ? 'is-invalid' : '' ?>" id="content" name="content" rows="4" required><?= $content ?></textarea>
                <?php if (isset($errors['content'])) : ?>
                    <div class="invalid-feedback">
                        <?= $errors['content'] ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php if (isset($errors['database'])) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= $errors['database'] ?>
                </div>
            <?php endif; ?>
            <button type="submit" class="btn btn-primary">Add Fast Facts</button>
        </form>
    </div>
</body>
</html>
