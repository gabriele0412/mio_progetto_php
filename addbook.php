<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stmt = $pdo->prepare("INSERT INTO books (title, price, category) VALUES (?, ?, ?)");
    $stmt->execute([$_POST['title'], $_POST['price'], $_POST['category']]);
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <title>Add Book</title>
</head>
<body>
<div class="container">
    <h1>Add New Book</h1>
    <form method="post" class="mb-3">
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" name="price">
        </div>
        <div class="form-group">
            <label for="category">Category:</label>
            <select name="category" class="form-control">
                <!-- options here -->
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add Book</button>
    </form>
</div>

</body>
</html>

