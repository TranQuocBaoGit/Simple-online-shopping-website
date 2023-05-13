<?php

$host = "localhost";
$db = "OnlineStore";
$username = "root";
$passwpord = "";

// $connection = mysqli_connect($host,$username,$passwpord);

// $dropdtb = "DROP DATABASE IF EXISTS OnlineStore";
// mysqli_query($connection, $dropdtb);
// $database = "CREATE DATABASE IF NOT EXISTS OnlineStore";
// mysqli_query($connection, $database);

$connection = mysqli_connect($host, $username, $passwpord, $db);

// $destroyUser = "DROP TABLE IF EXISTS users";
// mysqli_query($connection, $destroyUser);
$UserTable = "CREATE TABLE IF NOT EXISTS users (
    userId INT(9) AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    name VARCHAR(255),
    birthdate DATE,
    age INT(9) UNSIGNED,
    address VARCHAR(255),
    UNIQUE (email)
    )";

$destroyProduct = "DROP TABLE IF EXISTS products";
$ProductTable = "CREATE TABLE IF NOT EXISTS products(
    productId INT(9) AUTO_INCREMENT PRIMARY KEY,
    productName VARCHAR(255) NOT NULL,
    productType VARCHAR(255) NOT NULL,
    inStock INT(9) NOT NULL,
    prices INT(9) NOT NULL
    )";
$alterProduct = "ALTER TABLE products AUTO_INCREMENT=1000000";

$insertProduct = "INSERT INTO products (productName, productType, inStock, prices) VALUES 
('T-shirt','Clothing',100,20),
('Hat','Clothing',110,25),
('Iphone','High tech',25,800),
('Ipad','High tech',20,1200),
('T-shirt','Clothing',100,20),
('Hat','Clothing',110,25),
('Iphone','High tech',25,800),
('Iphone','High tech',25,800),
('Ipad','High tech',20,1200),
('T-shirt','Clothing',100,20),
('Hat','Clothing',110,25),
('Iphone','High tech',25,800),
('Iphone','High tech',25,800),
('Ipad','High tech',20,1200),
('T-shirt','Clothing',100,20),
('Hat','Clothing',110,25),
('Iphone','High tech',25,800),
('T-shirt','Clothing',100,20),
('Hat','Clothing',110,25),
('Iphone','High tech',25,800),
('Ipad','High tech',20,1200),
('T-shirt','Clothing',100,20),
('Hat','Clothing',110,25),
('Iphone','High tech',25,800),
('Iphone','High tech',25,800),
('Ipad','High tech',20,1200),
('T-shirt','Clothing',100,20),
('Hat','Clothing',110,25),
('Iphone','High tech',25,800),
('Iphone','High tech',25,800),
('Ipad','High tech',20,1200),
('T-shirt','Clothing',100,20),
('Hat','Clothing',110,25),
('Iphone','High tech',25,800),
('T-shirt','Clothing',100,20),
('Hat','Clothing',110,25),
('Iphone','High tech',25,800),
('Ipad','High tech',20,1200),
('T-shirt','Clothing',100,20),
('Hat','Clothing',110,25),
('Iphone','High tech',25,800),
('Iphone','High tech',25,800),
('Ipad','High tech',20,1200),
('T-shirt','Clothing',100,20),
('Hat','Clothing',110,25),
('Iphone','High tech',25,800),
('Iphone','High tech',25,800),
('Ipad','High tech',20,1200),
('T-shirt','Clothing',100,20),
('Hat','Clothing',110,25),
('Iphone','High tech',25,800),
('T-shirt','Clothing',100,20),
('Hat','Clothing',110,25),
('Iphone','High tech',25,800),
('Ipad','High tech',20,1200),
('T-shirt','Clothing',100,20),
('Hat','Clothing',110,25),
('Iphone','High tech',25,800),
('Iphone','High tech',25,800),
('Ipad','High tech',20,1200),
('T-shirt','Clothing',100,20),
('Hat','Clothing',110,25),
('Iphone','High tech',25,800),
('Iphone','High tech',25,800),
('Ipad','High tech',20,1200),
('T-shirt','Clothing',100,20),
('Hat','Clothing',110,25),
('Iphone','High tech',25,800),
('T-shirt','Clothing',100,20),
('Hat','Clothing',110,25),
('Iphone','High tech',25,800),
('Ipad','High tech',20,1200),
('T-shirt','Clothing',100,20),
('Hat','Clothing',110,25),
('Iphone','High tech',25,800),
('Iphone','High tech',25,800),
('Ipad','High tech',20,1200),
('T-shirt','Clothing',100,20),
('Hat','Clothing',110,25),
('Iphone','High tech',25,800),
('Iphone','High tech',25,800),
('Ipad','High tech',20,1200),
('T-shirt','Clothing',100,20),
('Hat','Clothing',110,25),
('Iphone','High tech',25,800)";



mysqli_query($connection, $UserTable);
mysqli_query($connection, $destroyProduct);
mysqli_query($connection, $ProductTable);
mysqli_query($connection, $alterProduct);
mysqli_query($connection, $insertProduct);

return $connection;