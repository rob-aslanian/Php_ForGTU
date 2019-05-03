<?php

require_once('./dbConnect.php');

/// 1 davaleba ////
$sql = "CREATE DATABASE mydata";



/// 2 davaleba ///
$sql = "CREATE TABLE menu (
    id INT UNSIGNED AUTO_INCREMENT  PRIMARY KEY,
    title VARCHAR(50),
    Meta_k VARCHAR(200),
    Meta_d VARCHAR(200),
    Text TEXT

)";

/// 3 davaleba ///
$sql = "CREATE TABLE users (
    id INT UNSIGNED AUTO_INCREMENT  PRIMARY KEY,
    Name VARCHAR(30),
    Lastname VARCHAR(30),
    Age INT,
    BirthDay DATE,
    Reg_Date DATE,
    Password VARCHAR(50),
    Gender VARCHAR(20)

)";

/// 4 Davaleba ///
$sql = "CREATE TABLE data (
    id INT UNSIGNED AUTO_INCREMENT  PRIMARY KEY,
    Title VARCHAR(30),
    Date DATE,
    Type VARCHAR(30),
    Photo VARCHAR(50),
    Text TEXT,
    Author VARCHAR(30),
    Description VARCHAR(200),
    Meta_k VARCHAR(200),
    Meta_d VARCHAR(200)


)";



$conn->query($sql);

$conn->close();
