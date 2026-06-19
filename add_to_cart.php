<?php
include "config/db.php";

$id = $_GET['id'];

$conn->query("INSERT INTO cart (book_id, quantity) VALUES ($id, 1)");

header("Location: cart.php");
?>