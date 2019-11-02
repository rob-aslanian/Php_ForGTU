
<?php
    include_once 'includes/dbh.inc.php';

    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];

    $sql = "INSERT INTO students(name, lastName, mobile, address)
    VALUES ('$name', '$lastName', '$mobile', '$address');";
    mysqli_query($conn, $sql);

    header("Location: ../index.php?signup=success");