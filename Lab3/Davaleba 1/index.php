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
                $matrix = [
                    range(rand(10,99) , rand(10,99)),
                    range(rand(10,99) , rand(10,99)),
                    range(rand(10,99) , rand(10,99)),
                    range(rand(10,99) , rand(10,99)),
                    range(rand(10,99) , rand(10,99)),
                    range(rand(10,99) , rand(10,99)),
                    range(rand(10,99) , rand(10,99)),
                    range(rand(10,99) , rand(10,99)),
                    range(rand(10,99) , rand(10,99)),
                    range(rand(10,99) , rand(10,99)),
                ];

                var_dump($matrix);

            ?>
   
        </div>
    
    </div>

   </div>


    
</body>
</html>