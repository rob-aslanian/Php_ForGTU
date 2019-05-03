<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

$conn->connect_error ? die($conn->connect_error) : NULL;

$conn->select_db('mydata');
