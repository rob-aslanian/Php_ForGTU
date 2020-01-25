<?php  
    require_once './connection.php';

    $data = $conn->prepare("SELECT * FROM vakansia");
    $data->execute();

    $data = $data->fetchAll();

    // $categories = $conn->prepare("SELECT * FROM category")
    // $categories->execute();

    // $categories = $categories->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="jumbotron">
    <form method="post" acttion="index.php">
        <div class="form-group">
           <textarea name="description"></textarea>
        </div>




        <button type="submit" class="btn btn-primary"  name="submit_form">Submit</button>
    </form>
    </div>

    <a class="btn btn-primary" href="./get_test.php">Start Test</a>


    <table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">English</th>
        <th scope="col">Geo</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $row) {
                    echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["description"] . "</td>
                    <td>
                        <button class='btn btn-info'>
                            <a href='edit.php?id=" . $row["id"]  . "'>
                                Edit
                            </a>
                        </button>
                        <button class='btn btn-danger'>
                            <a href='delete.php?id=" . $row["id"]  . "'>
                                Delete
                            </a>
                        </button>

                    </td>
            </tr>";
        }
        ?>
    </tbody>
    </table>

    

    <?php
        date_default_timezone_set('Asia/Yerevan');
        if (isset($_POST['submit_form'])) {
            $description  = $_POST['description'];
            $created_at = date("Y-m-d");

            $sql = "INSERT INTO vakansia (description , created_at)
                    VALUES ('$description' , '$created_at')";

            $conn->exec($sql);
        }
        ?>
</body>
</html>