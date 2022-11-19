<?php
include "config.php";

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS `users` (
`id` INT(11) UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
`name` VARCHAR(30) NOT NULL,
`username` VARCHAR(30) NOT NULL,
`password` VARCHAR(50) NOT NULL,
`role` INT NOT NULL
)";

$sql_2 = "CREATE TABLE IF NOT EXISTS `products` (
`product_id` INT(11) UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
`name` VARCHAR(30) NOT NULL,
`description` VARCHAR(30) NOT NULL,
`price` FLOAT NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table users created successfully\n";
} else {
    echo "Error creating table: " . $conn->error;
}

if ($conn->query($sql_2) === TRUE) {
    echo "Table products created successfully\n";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
