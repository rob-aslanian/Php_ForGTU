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
            
        <?php if(isset($_POST['submit_form'])): ?>
            <?php 
                $matrix = [
                    [1,2,3,4,5,6],
                    [7,8,9,10,11,12],
                    [13,14,15,16,17,18],
                    [19,20,21,22,23,24],
                    [25,26,27,28,29,30],

                ];

            ?>


            <!-- Matrix table -->
             <table class="table">
                <tbody>
                <?php for($i = 0; $i <= count($matrix); $i++): ?>
                    <tr>
                        <?php  for($j = 0; $j <= count($matrix) ; $j++): ?>
                            <td><?php   echo $matrix[$i][$j]; ?></td>
                        <?endfor; ?>
                    </tr>
                <?endfor; ?>
                </tbody>
            </table>

        
        <? endif ?>
   
        </div>
    
    </div>

   </div>


    
</body>
</html>