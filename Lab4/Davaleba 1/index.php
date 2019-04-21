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
       $arr = [];

       function fillArr(){
        $arr = array_fill(0,10,array_fill(0,10, generateRandomString()));
        return $arr;
       }

       function generateRandomString($length = 7) {
            $characters = '_-@%*^!';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        $arr = fillArr();
    ?>

   <div class="jumbotron">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <tbody>
                    <?php foreach($arr as $key => $value): ?>
                        <tr>
                            <?php foreach($value as $v): ?>
                                <td><?php echo $v?></td>
                            <?php endforeach; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
   </div>


</body>
</html>