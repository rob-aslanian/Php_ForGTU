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
            <form action="./index.php" method="post">

            <div class="form-group">
                <input type="number" name="x_number" placeholder="Number here">
            </div>
            <button type="submit" name="submit_form" class="btn btn-success">Submit</button>

            </form>
        </div>
        <div class="col-md-6">
            
        <?php if(isset($_POST['submit_form'])): ?>
            <?php 
                $numbers = range(10 , 100 , 8);
                $g_then = 0;
                $l_then = 0;

                if(isset($_POST['x_number'])){
                    $x_number = intval($_POST['x_number']);
                    foreach($numbers as $number){
                        if($x_number < $number){
                            $g_then++;
                        }else{
                            $l_then++;
                        }
                    }
                }

                echo 'Greater then ' . $g_then . '<br/>';
                echo 'Less then' . $l_then;
            
            ?>
        <? endif ?>
        
        </div>
    
    </div>


   </div>



  
    
</body>
</html>