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

    <?php 


       function generateRandomString($length = 7) {
            $characters = '0123456789qwertyuiopasdfghjklzxcvbnm';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
    ?>

   <div class="jumbotron">
    <div class="row">
        <div class="col-md-12">
            <form action="./index.php" method="post">
            <h1><?php echo $cr_v =  generateRandomString(); ?></h1>

            <div class="form-group">
                <input type="text" name="x_number" placeholder="Number here">
                <input type="hidden" name="correct_value" value="<?php echo $cr_v; ?>">
            </div>
            <button type="submit" name="submit_form" class="btn btn-success">Submit</button>

            </form>
        </div>
        <?php if(isset($_POST['submit_form'])): ?>
            <?php 
                if(isset($_POST['x_number']) && isset($_POST['correct_value'])){
                    $x_number = $_POST['x_number'];
                    $crv = $_POST['correct_value'];

                   echo !strcmp($x_number , $crv) ? "<h1>Equal</h1>" : "<h1>Not Equal</h1>";
                }
            
            ?>
        <? endif ?>
    </div>
   </div>


</body>
</html>