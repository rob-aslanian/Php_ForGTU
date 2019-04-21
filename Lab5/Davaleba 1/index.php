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

    <?php 
        $errs = [];
        if(isset($_POST['submit_form'])){
            $email = $_POST['email'] | '';
            $password = $_POST['password'];
            $r_password = $_POST['r_password'];

            if(!filter_var($email , FILTER_VALIDATE_EMAIL)){
                array_push($errs , 'Email not correct');
            }

            if(strcmp($password , $r_password) == -1){
                array_push($errs , 'Password not match');
            }
            if(empty($password) || empty($email)){
                  array_push($errs , 'Value can`t be empty');
            }
            
        }
    ?>

   <div class="jumbotron">
    <div class="row">
        <div class="col-md-6">
            <form action="./index.php" method="post">

            <div class="form-group">
                <input type="email" name="email" placeholder="E-mail">
            </div>

            <div class="form-group">
                <input type="password" name="password" placeholder="password">
            </div>
            <div class="form-group">
                <input type="password" name="r_password" placeholder="repeat password">
            </div>

            <button type="submit" name="submit_form" class="btn btn-success">Submit</button>

            </form>
              <?php if( count($errs) > 0): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach($errs as $err): ?>
                        <li><?php echo $err ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>
        </div>
    
    </div>
   </div>

    
</body>
</html>