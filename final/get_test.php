<?php  
    require_once './connection.php';

    $data = $conn->prepare("SELECT * FROM geo_ka ORDER BY RAND() ");
    $data->execute();

    $data = $data->fetchAll();

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
<table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">English</th>
        <th scope="col">Geo</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $row) {
                    echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["en"] . "</td>
                    <td>" . $row["ka"] . "</td>
            </tr>";
        }
        ?>
    </tbody>
    </table>
</body>
</html>

