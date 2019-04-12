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
        $rdStr = '';

        function generateRandomString($length = 5) {
            $characters = '0123456789';
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
        <div class="col-md-6">
            <form action="./index.php" method="post">

            <h1>Random String <?php echo $rdStr =  generateRandomString(); ?></h1>
            <div class="form-group">
                <input type="text" name="token" placeholder="Token">
            </div>

            <button type="submit" name="submit_form" class="btn btn-success">Submit</button>

            </form>
        </div>
        <div class="col-md-6">
            
        <?php if(isset($_POST['submit_form'])): ?>
         <?php 

            echo $_POST['token'] ;
            if(isset($_POST['token']) && (string)$_POST['token'] == $rdStr) {
                echo '<div class="alert alert-success">Correct !</div>';
            }
         ?>

        <? endif ?>


       
        </div>
    
    </div>


   </div>



  
    
</body>
</html>