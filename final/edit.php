<?php  
    require_once './connection.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Edit Admin</title>
</head>

<body>
    <div class="jumbotron">
        <form action="./edit.php" method="post">

            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
            <div class="form-group">
                <input type="text" name="name" placeholder="Name">
            </div>

            <div class="form-group">
                <input type="text" name="last_name" placeholder="Last name">
            </div>
            <div class="form-group">
                <input type="number" name="personal_id">
            </div>
            <div class="form-group">
                <input type="date" name="birth_date">
            </div>
            <div class="form-group">
                <input type="text" name="possition">
            </div>
            <button type="submit" name="submit_form" class="btn btn-success">Submit</button>

        </form>
    </div>

    <?php
    if (isset($_POST['submit_form'])) {
        $id      = $_POST['id'];
        $description      = $_POST['description'];
        $created_at = date("Y-m-d h:i:sa");
        $query = "UPDATE `vakansia` SET `description`='" . $description . " WHERE `id` = $id";

        $conn->exec($query);
        $conn->close();
    }
    ?>

</body>

</html>