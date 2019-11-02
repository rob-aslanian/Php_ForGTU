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
<?php 
    $conn = mysqli_connect('localhost' ,'root' , '' , 'gtu');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "SELECT * FROM quiz_1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "
                    <table class='table'>
                        <thead class='table-dark'>
                            <tr>
                            <th >Id</th>
                            <th>Name</th>
                            <th>Last name</th>
                            <th>Personal Id</th>
                            <th >Mobile</th>
                            <th >Address</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>" . $row["id"] . "</td>
                            <td>" . $row["name"] . "</td>
                            <td>" . $row["lastName"] . "</td>
                            <td>" . $row["idNumber"] . "</td>
                            <td>" . $row["mobile"] . "</td>
                            <td>" . $row["address"] . "</td>
                            </tr>
                        </tbody>
                    </table>
                    ";
        }
    } else {
        echo "0 results";
    }

?>
</body>
</html>

