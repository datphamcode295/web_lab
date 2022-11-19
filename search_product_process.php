<?php
include 'config.php';
$value = $_GET['value'];

// echo $id." ".$name." ".$description." ".$price;

$sql2 = "SELECT * FROM products WHERE name LIKE '%".$value."%'";
echo $sql2;
$result = mysqli_query($conn, $sql2);

if ($result){
  header("Location: index.php?page=home");
}