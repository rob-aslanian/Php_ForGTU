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
        date_default_timezone_set("Asia/Tbilisi");

        $errs = [];
        $code = NULL;

        function validateField($fieldName , $min = 0 , $max = 10){
            global $errs;
            $formVar = $_POST[$fieldName];
            
            if(!empty($formVar)){
                if(strlen($formVar) < $min || strlen($formVar) > $max){
                 array_push($errs ,  $fieldName . ' lenght min is ' . $min . ' and max is ' . $max);

                 return false;
                }
            }else{
               array_push($errs ,  $fieldName . ' can`t be empty');

               return false;
            }

            return true;
        }

        function generateRandomString() {
            $characters = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < 3; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString . rand(10,99);
        }
        
        if(isset($_POST['submit_form'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $r_password = $_POST['r_password'];


            if(!filter_var($email , FILTER_VALIDATE_EMAIL) && !validateField('email' , 2 , 30) ){
                array_push($errs , 'Email not correct');
            }
            
            if(validateField('password' , 3, 30) &&   validateField('r_password' , 3, 30) ){
                if(strcmp($password , $r_password) == -1){
                    array_push($errs , 'Password not match');
                }
            } 
       
            if(count($errs) == 0){
                $code =  generateRandomString();
                $con = mysqli_connect("localhost","root","","gtu_php") or die("Error with connection");
                $reg_date = date("Y-m-d h:i:sa");
                $password = password_hash($password , PASSWORD_BCRYPT);

                mysqli_query($con , "INSERT INTO `users` (`email` , `password`, `reg_date`)
                VALUES ('$email' , '$password' , '$reg_date')
                " );


                mysqli_close($con);
            }
            
        }

    ?>

   <div class="jumbotron">
    <div class="row">
        <div class="col-md-6">
            <?php if( !is_null($code) ):?>
                <h2><?php echo $code ?></h2>
            <?php endif;?>
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