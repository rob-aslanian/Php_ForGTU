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
        $errs = [
            'name'       => [],
            'last_name'  => [],
            'birth_day'  => [],
            'course'     => NULL,
            'card_num'   => [],
            'address'    => [],
            'telphone'   => []
        ];

        function validateField($fieldName , $min = 0 , $max = 10){
            global $errs;
            $formVar = $_POST[$fieldName];
            
            if(!empty($formVar)){
                if(strlen($formVar) < $min || strlen($formVar) > $max){
                 array_push($errs[$fieldName] ,  $fieldName . ' lenght min is ' . $min . ' and max is ' . $max);

                 return false;
                }
            }else{
               array_push($errs[$fieldName] ,  $fieldName . ' can`t be empty');

               return false;
            }

            return true;
        }
        function validateDate($fieldName , $minYear){
            global $errs;
            $date = $_POST[$fieldName];

            if($date){
              $fullDate = explode('-' , $date);
              if(!checkdate($fullDate[1] , $fullDate[2] , $fullDate[0])){
                array_push($errs[$fieldName] , 'Inccorect date value');
              }
              if($fullDate[0] < $minYear){
                  array_push($errs[$fieldName] , 'Min year is ' . $minYear);
              }
            }

        }

        function showMessage($name){
            global $errs;
            $template = '';
            $list = '';

            if(is_array($errs[$name])){
                if(count($errs[$name]) > 0){
                  foreach($errs[$name] as $err){
                    $list .= "<li>" . $err . "</li>";
                  }

                  $template =  '<div class="alert alert-danger">
                    <ul>' . $list . 
                    '</ul>
                  </div>';

                }else{
                    $template = NULL;
                }
            }


            return $template;
        }
        if(isset($_POST['submit_form'])){

            validateField('name', 2 , 30);
            validateField('last_name', 3 , 50);
            validateField('address', 0 , 70);
            validateField('telphone', 6 , 20);
            validateField('card_num', 0 , 11);
            validateDate('birth_day' , 1950);
            
        }
    ?>

   <div class="jumbotron">
    <div class="row">
        <div class="col-md-6">
            <form action="./index.php" method="post">

            <div class="form-group">
                <input type="text" name="name" placeholder="Name">
            </div>
            <?php echo showMessage('name')?>

            <div class="form-group">
                <input type="text" name="last_name" placeholder="Last name">
            </div>
            <?php echo showMessage('last_name')?>

            <div class="form-group">
                <input type="date" name="birth_day" >
            </div>
            <?php echo showMessage('birth_day')?>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Course</label>
                <select class="form-control" id="exampleFormControlSelect1" name="course">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>

            <div class="form-group">
                <input type="number" name="card_num" >
            </div>
            <?php echo showMessage('card_num')?>
            

            <div class="form-group">
                <input type="text" name="address" >
            </div>
             <?php echo showMessage('address')?>

            <div class="form-group">
                <input type="number" name="telphone" >
            </div>

            <?php echo showMessage('telphone')?>

            

            <button type="submit" name="submit_form" class="btn btn-success">Submit</button>

            </form>
        </div>
    
    </div>
   </div>

    
</body>
</html>