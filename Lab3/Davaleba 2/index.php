<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Davaleba 2</title>
</head>
<body>

   <div class="jumbotron">
    <div class="row">
        <div class="col-md-6">
            <form action="./index.php" method="post">

            <div class="form-group">
                <input type="number" name="strart" placeholder="Strart">
            </div>
             <div class="form-group">
                <input type="number" name="end" placeholder="End">
            </div>

             <div class="form-group">
                <input type="number" name="min" placeholder="Min">
            </div>

            <div class="form-group">
                <input type="number" name="max" placeholder="Max">
            </div>

            <button type="submit" name="submit_form" class="btn btn-success">Submit</button>

            </form>
        </div>
        <div class="col-md-6">
            
        <?php if(isset($_POST['submit_form'])): ?>
            <?php 
                $start = $_POST['start'] || 4;
                $end = $_POST['end'] || 4;
                $min = $_POST['min'] || 10;
                $max = $_POST['max'] || 99;
                $matrix = [];

                if($min > $max){
                     echo "<div class='alert alert danger'>Error<div/>";
                }else{
                    $matrix = range($start , $end);
                    array_push($matrix , rand($min , $max));
                }
            ?>

        
        <? endif ?>


       
        </div>
    
    </div>


   </div>



  
    
</body>
</html>