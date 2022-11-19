<?php
include 'config.php';
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

$sql2 = "INSERT INTO products(name, description, price) VALUES('$name', '$description', $price)";
$result = mysqli_query($conn, $sql2);

if ($result){
  header("Location: index.php?page=add_product&&message=New Product is Added");
}