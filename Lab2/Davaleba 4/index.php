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
        <div class="col-md-12">
            
            <?php 
              $cars = array(
                array("Make"=>"Toyota", 
                    "Model"=>"Corolla", 
                    "Color"=>"White", 
                    "Mileage"=>24000, 
                    "Status"=>"Sold"),

                array("Make"=>"Toyota", 
                    "Model"=>"Camry", 
                    "Color"=>"Black", 
                    "Mileage"=>56000, 
                    "Status"=>"Available"),

                array("Make"=>"Honda", 
                    "Model"=>"Accord", 
                    "Color"=>"White", 
                    "Mileage"=>15000, 
                    "Status"=>"Sold")  );


            ?>

            <!-- Matrix table -->
             <table class="table">
                <tbody>
                <?php for($i = 0; $i < count($cars); $i++): ?>
                    <tr>
                        <?php  foreach($cars[$i] as $car): ?>
                            <td><?php  echo $car; ?></td>
                        <?endforeach; ?>
                    </tr>
                <?endfor; ?>
                </tbody>
            </table>

        
   
        </div>
    
    </div>

   </div>
</body>
</html>