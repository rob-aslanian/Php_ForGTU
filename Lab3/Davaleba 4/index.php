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
        $opp = ['+' , '-' , '*' , '/'];
        $randOp = rand(0 , count($opp) - 1);
    ?>

   <div class="jumbotron">
    <div class="row">
        <div class="col-md-6">
            <form action="./index.php" method="post">

            <h1>Random String 10 <?php echo $opp[$randOp]; ?> 20</h1>
            <div class="form-group">
                <input type="text" name="answer" placeholder="answer">
            </div>

            <button type="submit" name="submit_form" class="btn btn-success">Submit</button>

            </form>
        </div>
        <div class="col-md-6">
            
        <?php if(isset($_POST['submit_form'])): ?>
         <?php 

            if(isset($_POST['answer'])){
                $res = 0;
                switch($opp[$randOp]){
                    case'+' : $res = 10 + 20; break;
                    case'-' : $res = 10 - 20; break;
                    case'*' : $res = 10 * 20; break;
                    case'/' : $res = 10 / 20; break;
                    default: break;
                }

                echo $res;

                if($_POST['answer'] == $res){
                    echo "<div class='alert alert-success'>Correct!</div>";
                }
            }
         ?>

        <? endif ?>


       
        </div>
    
    </div>


   </div>



  
    
</body>
</html>