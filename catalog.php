<?php
include "config/db.php";

$result = $conn->query("SELECT * FROM books");
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>Каталог книг</title>
<link rel="stylesheet" href="css/shop.css">
</head>
<body>

<header>
  <h1>Каталог книг</h1>

  <nav>
    <a href="index.php">Главная</a>
    <a href="catalog.php">Каталог</a>
    <a href="cart.php">Корзина</a>
  </nav>
</header>

<div class="grid">

<?php while($book = $result->fetch_assoc()): ?>

  <div class="card">
    <img src="<?= $book['image'] ?>" alt="book">

    <h3><?= $book['title'] ?></h3>
    <p><?= $book['author'] ?></p>
    <p><b><?= $book['price'] ?> ₽</b></p>

    <a href="add_to_cart.php?id=<?= $book['id'] ?>">
      Добавить в корзину
    </a>
  </div>

<?php endwhile; ?>

</div>

</body>
</html>