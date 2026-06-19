<?php
include "config/db.php";

$sql = "SELECT cart.id, books.title, books.author, books.price, cart.quantity
FROM cart
JOIN books ON cart.book_id = books.id";

$result = $conn->query($sql);

$total = 0;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>Корзина</title>
<link rel="stylesheet" href="css/shop.css">
</head>
<body>

<header>
  <h1>Корзина</h1>

  <nav>
    <a href="index.php">Главная</a>
    <a href="catalog.php">Каталог</a>
    <a href="cart.php">Корзина</a>
  </nav>
</header>

<div class="container">

<h2>Ваши товары</h2>

<?php if ($result->num_rows > 0): ?>

  <?php while($row = $result->fetch_assoc()): ?>

    <?php $total += $row['price'] * $row['quantity']; ?>

    <div class="cart-item">
      <h3><?= $row['title'] ?></h3>
      <p><?= $row['author'] ?></p>
      <p><?= $row['price'] ?> ₽ × <?= $row['quantity'] ?></p>

      <a href="remove_from_cart.php?id=<?= $row['id'] ?>">
        <button>Удалить</button>
      </a>
    </div>

  <?php endwhile; ?>

  <h2>Итого: <?= $total ?> ₽</h2>

<?php else: ?>

  <p>Корзина пуста</p>

<?php endif; ?>

</div>

<footer>
  © 2026 Igel Book
</footer>

</body>
</html>