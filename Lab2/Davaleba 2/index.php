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
                <input type="number" name="x_number" placeholder="Number here">
            </div>
            <button type="submit" name="submit_form" class="btn btn-success">Submit</button>

            </form>
        </div>
        <div class="col-md-6">
            
        <?php if(isset($_POST['submit_form'])): ?>
            <?php 
                $matrix = [
                    [10 , 20 , 25 , 60],
                    [22 , 32 , 55 , 87],
                    [25 , 44 , 61 , 90],
                    [30 , 45 , 78 , 100],

                ];
                $matrix_elems = [];
                $matrix_diogram = [];
                $matrix_sum = 0;
                $average = 0;

                for($i = 0; $i <= 3; $i++){
                     array_push($matrix_diogram , $matrix[$i][$i]);
                     $average = array_sum($matrix[$i])/count($matrix[$i]);

                   for($j = 0; $j <= 3; $j++){
                       $matrix_sum += $matrix[$i][$j];
                       
                        array_push($matrix_elems , $matrix[$i][$j]);
                    }
                }
            
            ?>

            <h1>Matrix avg<?php echo $average ?></h1>
            <h1>Matrix Sum<?php echo $matrix_sum ?></h1>

            <!-- Matrix table -->
             <table class="table">
                <tbody>
                    <?php foreach($matrix_elems as $elem):?>
                            <td><?php echo $elem;?></td>
                    <?php endforeach;?>
                </tbody>
            </table>

            <!-- Diogram table -->

             <table class="table">
                <tbody>
                    <tr>
                        <?php foreach($matrix_diogram as  $elem):?>
                                <td><?php echo $elem;?></td>
                        <?php endforeach;?>
                    </tr>
                </tbody>
            </table>
        
        <? endif ?>


       
        </div>
    
    </div>


   </div>



  
    
</body>
</html>