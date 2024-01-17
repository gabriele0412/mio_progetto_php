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
    <title>Add Book</title>
</head>
<body>
    <h1>Add New Book</h1>
    <form method="post">
        Title: <input type="text" name="title"><br>
        Price: <input type="text" name="price"><br>
        Category: 
        <select name="category">
            <option value="Fiction">Fiction</option>
            <option value="Non-Fiction">Non-Fiction</option>
            <option value="Biography">Biography</option>
            <option value="Science Fiction">Science Fiction</option>
            <option value="Mystery">Mystery</option>
        </select><br>
        <input type="submit" value="Add Book">
    </form>
</body>
</html>

