<?php require_once("./dbConnect.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Data</title>
</head>

<body>

    <div class="jumbotron">
        <form action="./data.php" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <input type="text" name="title" placeholder="title">
            </div>

            <div class="form-group">
                <input type="date" name="date">
            </div>

            <div class="form-group">
                <input type="text" name="type" placeholder="Type">
            </div>

            <div class="form-group">
                <input type="file" name="photo">
            </div>

            <div class="form-group">
                <textarea name="text" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group">
                <input type="text" name="author" placeholder="Author">
            </div>

            <div class="form-group">
                <input type="text" name="descripton" placeholder="Description">
            </div>

            <div class="form-group">
                <input type="text" name="meta_k" placeholder="Meta key">
            </div>

            <div class="form-group">
                <input type="text" name="meta_d" placeholder="Meta Description">
            </div>

            <button type="submit" name="submit_form" class="btn btn-success">Submit</button>

        </form>
    </div>

    <?php

    if (isset($_POST['submit_form'])) {
        $title       = $_POST['title'];
        $date        = $_POST['date'];
        $type        = $_POST['type'];
        $photo       = $_FILES['photo']['name'];
        $text        = $_POST['text'];
        $author      = $_POST['author'];
        $descripton  = $_POST['descripton'];
        $meta_k      = $_POST['meta_k'];
        $meta_d      = $_POST['meta_d'];


        $sql = "INSERT INTO `data` 
                  (`Title`, `Date`, `Type`, `Photo`, `Text`, `Author`, `Description`, `Meta_k`, `Meta_d`)
                VALUES (
                    '$title'  , '$date' , '$type' , '$photo'  , '$text' ,
                    '$author' , '$descripton' , '$meta_k' , '$meta_d' )";

        $conn->query($sql);

        $conn->close();
    }

    ?>

</body>

</html>