<?php
include 'config.php';
$id = $_GET['id'];

$sql2 = "DELETE FROM products WHERE product_id = $id";
echo $sql2;
$result = mysqli_query($conn, $sql2);

if ($result){
  header("Location: index.php?page=home");
}