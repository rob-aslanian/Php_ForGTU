<?php require_once("./dbConnect.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Menu</title>
</head>

<body>

    <div class="jumbotron">
        <form action="./menu.php" method="post">

            <div class="form-group">
                <input type="text" name="title" placeholder="Title">
            </div>

            <div class="form-group">
                <input type="text" name="meta_k" placeholder="Meta key">
            </div>
            <div class="form-group">
                <input type="text" name="meta_d" placeholder="Meta Description">
            </div>
            <div class="form-group">
                <textarea name="text" cols="30" rows="10"></textarea>
            </div>

            <button type="submit" name="submit_form" class="btn btn-success">Submit</button>

        </form>
    </div>

    <?php
    if (isset($_POST['submit_form'])) {
        $title = $_POST['title'];
        $meta_k = $_POST['meta_k'];
        $meta_d = $_POST['meta_d'];
        $text = $_POST['text'];

        $sql = "INSERT INTO `menu` (`title` , `Meta_k` , `Meta_d` , `text`) VALUES(
                '$title' , '$meta_k','$meta_d' , '$text'
            )";

        $conn->query($sql);
    }

    ?>

</body>

</html>