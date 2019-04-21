<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Davaleba 2</title>
</head>
<body>

    <?php 


       function generateRandomString() {
            $characters = 'qwertyuiopasdfghjklzxcvbnmზხცვბნმასდფგჰჯკლქწერტყუიოჭღთჩ';
            $charactersLength = strlen($characters);
            $length = rand(2,15);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        echo generateRandomString();


   
    ?>

   <div class="jumbotron">
    <div class="row">
        <div class="col-md-12">
         </div>
   </div>


</body>
</html>