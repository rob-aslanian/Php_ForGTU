<?php require_once("./dbConnect.php") ?>

<?php
$sql = 'SELECT * FROM `admins` ';
$data = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Admins</title>
</head>

<body>

    <div class="jumbotron">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">Personal Id</th>
                    <th scope="col">Birth Date</th>
                    <th scope="col">Possition</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                <?php while ($row = $data->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["id"] . "</td>
                            <td>" . $row["name"] . "</td>
                            <td>" . $row["last_name"] . "</td>
                            <td>" . $row["personal_id"] . "</td>
                            <td>" . $row["birth_date"] . "</td>
                            <td>" . $row["possition"] . "</td>
                            <td>" . $row["created_at"] . "</td>
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

        <button class="btn btn-success">
            <a href="add.php">Add new admin</a>
        </button>


    </div>



</body>

</html>