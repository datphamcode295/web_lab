<?php
include 'config.php';
$id = $_GET['id'];
$name = $_GET['name'];
$description = $_GET['description'];
$price = $_GET['price'];

echo $id." ".$name." ".$description." ".$price;

$sql2 = "UPDATE products SET name = '$name', description = '$description', price = $price WHERE product_id = $id";
echo $sql2;
$result = mysqli_query($conn, $sql2);

if ($result){
  header("Location: index.php?page=home");
}