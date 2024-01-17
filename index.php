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
    <title>Bookstore</title>
</head>
<body>
    <h1>Books</h1>
    <a href="addbook.php">Add New Book</a>
    <ul>
        <?php foreach ($books as $book): ?>
            <li>
                <?php echo htmlspecialchars($book['title'], ENT_QUOTES); ?>
                - <?php echo htmlspecialchars($book['category'], ENT_QUOTES); ?>
                - $<?php echo htmlspecialchars($book['price'], ENT_QUOTES); ?>
                <a href="index.php?delete=<?php echo $book['id']; ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

