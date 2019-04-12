<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Davaleba 1</title>
</head>
<body>

   <div class="jumbotron">
    <div class="row">
        <div class="col-md-6">
            <form action="./index.php" method="get">

            <div class="form-group">
                <input type="text" name="name" placeholder="სახელი">
            </div>

            <div class="form-group">
                <input type="text" name="surname" placeholder="გვარი">
            </div>

            <div class="form-group">
                <input type="text" name="position" placeholder="დაკავებული თანამდებობა">
            </div>

            <div class="form-group">
                <input type="number" name="salary" placeholder="ხელფასის რაოდენობა">
            </div>

            <div class="form-group">
                <input type="text" name="income" placeholder="დაკავებული საშემოსავლო">
            </div>

            <div class="form-group">
                <input type="text" name="accured_salary" placeholder="დარიცხული ხელფასი">
            </div>
        
            <button type="submit" name="submit_form" class="btn btn-success">Submit</button>

            </form>
        </div>
        <div class="col-md-6">
            
        <?php if(isset($_GET['submit_form'])): ?>
            <table class="table table-hover table-responsive">
                <thead>
                    <tr>
                        <th scope="col">სახელი</th>
                        <th scope="col">გვარი</th>
                        <th scope="col">დაკავებული თანამდებობა</th>
                        <th scope="col">ხელფასის რაოდენობა</th>
                        <th scope="col">დაკავებული საშემოსავლო</th>
                        <th scope="col">დარიცხული ხელფასი</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo isset($_GET['name']) ? $_GET['name'] : 'No Data'  ?></td>
                        <td><?php echo isset($_GET['surname']) ? $_GET['surname'] : 'No Data' ?></td>
                        <td><?php echo isset($_GET['position']) ? $_GET['position'] : 'No Data' ?></td>
                        <td><?php echo isset($_GET['salary']) ? $_GET['salary'] : 'No Data' ?></td>
                        <td><?php echo isset($_GET['income']) ? $_GET['income'] : 'No Data' ?></td>
                        <td><?php echo isset($_GET['accured_salary']) ? $_GET['accured_salary'] : 'No Data' ?></td>
                    </tr>
                </tbody>
            </table>
        <? endif ?>
        
        </div>
    
    </div>


   </div>



  
    
</body>
</html>