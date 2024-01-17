<?php
include 'connect.php';

if (isset($_GET['delete'])) {
    $stmt = $pdo->prepare("DELETE FROM books WHERE id = ?");
    $stmt->execute([$_GET['delete']]);
}

$stmt = $pdo->query("SELECT * FROM books");
$books = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <title>Bookstore</title>
</head>
<body>
    <!-- Style the book list in index.php with Bootstrap classes -->
<div class="container">
    <h1>Books</h1>
    <a href="addbook.php" class="btn btn-primary mb-3">Add New Books</a>
    <ul class="list-group">
        <?php foreach ($books as $book): ?>
            <li class="list-group-item">
                <!-- Book details here -->
                <a href="index.php?delete=<?php echo $book['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
</body>
</html>

