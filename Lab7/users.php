<?php require_once("./dbConnect.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Users</title>
</head>

<body>

    <div class="jumbotron">
        <form action="./users.php" method="post">

            <div class="form-group">
                <input type="text" name="name" placeholder="Name">
            </div>

            <div class="form-group">
                <input type="text" name="last_name" placeholder="Last name">
            </div>
            <div class="form-group">
                <input type="number" name="age">
            </div>
            <div class="form-group">
                <input type="date" name="birthday">
            </div>
            <div class="form-group">
                <input type="password" name="password">
            </div>
            <div class="form-group">
                <select name="gender">
                    <option value="null" disabled selected>Select gender</option>
                    <option value="male">Male</option>
                    <option value="female">FeMale</option>
                </select>
            </div>
            <button type="submit" name="submit_form" class="btn btn-success">Submit</button>

        </form>
    </div>

    <?php
    if (isset($_POST['submit_form'])) {
        $name      = $_POST['name'];
        $last_name = $_POST['last_name'];
        $age       = $_POST['age'];
        $birthday  = $_POST['birthday'];
        $password  = $_POST['password'];
        $gender    = $_POST['gender'];
        $reg_date = date("Y-m-d h:i:sa");
        $password = password_hash($password, PASSWORD_BCRYPT);



        $sql = "INSERT INTO `users` 
                (`Name` , `Lastname` , `Age` , `BirthDay` , `Password` , `Gender` , `Reg_Date`) 
                VALUES(
                    '$name' , '$last_name', '$age' , '$birthday',
                    '$password' , '$gender' , '$reg_date'
        )";

        $conn->query($sql);

        $conn->close();
    }

    ?>

</body>

</html>