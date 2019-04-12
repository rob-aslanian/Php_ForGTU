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
        <div class="col-md-6">
            <form action="./index.php" method="post">

            <div class="form-group">
                <input type="text" name="name" placeholder="სახელი">
            </div>

            <div class="form-group">
                <input type="text" name="surname" placeholder="გვარი">
            </div>

            <div class="form-group">
                <input type="text" name="course" placeholder="კურსი" max="4">
            </div>

            <div class="form-group">
                <input type="number" name="semester" placeholder="სემესტრი" max="2">
            </div>

            <div class="form-group">
                <input type="number" name="studing_course" placeholder="სასწავლო კურსი">
            </div>

            <div class="form-group">
                <input type="number" name="received_sign" placeholder="მიღებული ნიშანი" max="100">
            </div>

            <hr>

            <div class="form-group">
                <input type="text" name="leqt_name" placeholder="ლექტორის სახელი">
            </div>

            <div class="form-group">
                <input type="text" name="dec_fullName" placeholder="დეკანის სახელი გვარი">
            </div>
        
            <button type="submit" name="submit_form" class="btn btn-success">Submit</button>

            </form>
        </div>
        <div class="col-md-6">
            
        <?php if(isset($_POST['submit_form'])): ?>
            <table class="table table-hover table-responsive">
                <thead>
                    <tr>
                        <th scope="col">სახელი</th>
                        <th scope="col">გვარი</th>
                        <th scope="col">კურსი</th>
                        <th scope="col">სემესტრი</th>
                        <th scope="col">სასწავლო კურსი</th>
                        <th scope="col">მიღებული ნიშანი</th>
                        <th scope="col">ლექტორის სახელი</th>
                        <th scope="col">დეკანის სახელი გვარი</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo isset($_POST['name']) ? $_POST['name'] : 'No Data'  ?></td>
                        <td><?php echo isset($_POST['surname']) ? $_POST['surname'] : 'No Data' ?></td>
                        <td><?php echo isset($_POST['course']) ? $_POST['course'] : 'No Data' ?></td>
                        <td><?php echo isset($_POST['semester']) ? $_POST['semester'] : 'No Data' ?></td>
                        <td><?php echo isset($_POST['studing_course']) ? $_POST['studing_course'] : 'No Data' ?></td>
                        
                        <td class="<?php echo $sign_color?>">
                            <?php 
                                if(isset($_POST['received_sign'])){
                                    $sign = intval($_POST['received_sign']);
                                    $text_by_sign= NULL;

                                    if($sign >= 90 && $sign <= 100){
                                        $text_by_sign = $sign . ' A-ფრიადი';
                                    }else if($sign >= 80 && $sign <= 90){
                                        $text_by_sign = $sign . ' B-ძალიან კარგი';
                                    }else if($sign >= 60 && $sign <= 80){
                                        $text_by_sign = $sign . ' C-კარგი';
                                    }else if($sign >= 51 && $sign <= 60){
                                        $text_by_sign = $sign . ' D-ცუდი';
                                    }else{
                                        $text_by_sign = $sing . ' FX';
                                    }

                                    echo $text_by_sign != NULL ? $text_by_sign : 'No Data';
                                }
                            ?>
                        </td>

                        <td><?php echo isset($_POST['leqt_name']) ? $_POST['leqt_name'] : 'No Data' ?></td>
                        <td><?php echo isset($_POST['dec_fullName']) ? $_POST['dec_fullName'] : 'No Data' ?></td>


                    </tr>
                </tbody>
            </table>
        <? endif ?>
        
        </div>
    
    </div>


   </div>



  
    
</body>
</html>