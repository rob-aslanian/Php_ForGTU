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
 
    ?>

   <div class="jumbotron">
    <div class="row">
        <div class="col-md-6">
            <form action="./index.php" method="post">

            <div class="form-group">
                <input type="number" name="answer" placeholder="answer">
            </div>

            <button type="submit" name="submit_form" class="btn btn-success">Submit</button>

            </form>
        </div>
        <div class="col-md-6">
            
        <?php if(isset($_POST['submit_form'])): ?>
         <?php 
            function getNumLen($num){
                return strlen((string)$num);
            }
            if(isset($_POST['answer'])){
                echo getNumLen($_POST['answer']);
            
            }
         ?>

        <? endif ?>


       
        </div>
    
    </div>


   </div>



  
    
</body>
</html>