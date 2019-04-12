<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Davaleba 3</title>
</head>
<body>

   <div class="jumbotron">
    <div class="row">
        <div class="col-md-6">
            <form action="./index.php" method="post">

                <div class="row">
                    <div class="col-6">
                        <h1>Who is Bill Gates ? </h1>
                        <div class="custom-control custom-radio form-radio">
                            <input type="radio" class="custom-control-input" id="customCheck1" name="answer1" value="0">
                            <label class="custom-control-label" for="customCheck1">Programmer</label>
                        </div>
                        <div class="custom-control custom-radio form-radio">
                            <input type="radio" class="custom-control-input" id="customCheck2" name="answer1"  value="1">
                            <label class="custom-control-label" for="customCheck2">CEO of Microsoft</label>
                        </div>
                        <div class="custom-control custom-radio form-radio">
                            <input type="radio" class="custom-control-input" id="customCheck3" name="answer1" value="0">
                            <label class="custom-control-label" for="customCheck3">Creator of PHP</label>
                        </div>
                        <div class="custom-control custom-radio form-radio">
                            <input type="radio" class="custom-control-input" id="customCheck4" name="answer1" value="0">
                            <label class="custom-control-label" for="customCheck4">Singer</label>
                        </div>
                    </div>
                    
                    <div class="col-6">
                        <h1>What is PHP ?</h1>
                        <div class="custom-control custom-radio form-radio">
                            <input type="radio" class="custom-control-input" id="answer2_1" name="answer2" value="1">
                            <label class="custom-control-label" for="answer2_1"> Hypertext Preprocessor</label>
                        </div>
                        <div class="custom-control custom-radio form-radio">
                            <input type="radio" class="custom-control-input" id="answer2_2" name="answer2"  value="0">
                            <label class="custom-control-label" for="answer2_2">Personal home page</label>
                        </div>
                        <div class="custom-control custom-radio form-radio">
                            <input type="radio" class="custom-control-input" id="answer2_3" name="answer2" value="0">
                            <label class="custom-control-label" for="answer2_3">Candy</label>
                        </div>
                        <div class="custom-control custom-radio form-radio">
                            <input type="radio" class="custom-control-input" id="answer2_4" name="answer2" value="0">
                            <label class="custom-control-label" for="answer2_4">Abbr of America state</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <h1>Who are programmers ?</h1>
                        <div class="custom-control custom-radio form-radio">
                            <input type="radio" class="custom-control-input" id="answer3_1" name="answer3" value="0">
                            <label class="custom-control-label" for="answer3_1">Gods</label>
                        </div>
                        <div class="custom-control custom-radio form-radio">
                            <input type="radio" class="custom-control-input" id="answer3_2" name="answer3"  value="1">
                            <label class="custom-control-label" for="answer3_2">People who can write code</label>
                        </div>
                        <div class="custom-control custom-radio form-radio">
                            <input type="radio" class="custom-control-input" id="answer3_3" name="answer3" value="0">
                            <label class="custom-control-label" for="answer3_3">Shit</label>
                        </div>
                        <div class="custom-control custom-radio form-radio">
                            <input type="radio" class="custom-control-input" id="answer3_4" name="answer3" value="0">
                            <label class="custom-control-label" for="answer3_4">Porn directors</label>
                        </div>
                    </div>

                    <div class="col-6">
                        <h1>What is answer?</h1>
                        <div class="form-group">
                            <input type="text" placeholder="20+40=?" name="answer4">
                        </div>
                    </div>

                    <div class="col-6">
                        <h1>What is answer?</h1>
                        <div class="form-group">
                            <input type="text" placeholder="sqrt of 81 is ?" name="answer5">
                        </div>
                    </div>
                    
                </div>

             <button type="submit" name="submit_form" class="btn btn-success">Submit</button>

            </form>
        </div>
        <div class="col-md-6">
            
        <?php if(isset($_POST['submit_form'])): ?>
            <?php 
                $correct_count = 0;

                /** Check radio values */
                for($i = 1; $i <= 3; $i++){
                    if(isset($_POST['answer' . $i])){
                        if($_POST['answer' . $i] === '1'){
                            $correct_count++;
                        }
                    }
                }

                /** Check input values  */

                if(isset($_POST['answer4']) && $_POST['answer4'] == 60){
                    $correct_count++;
                }

                if(isset($_POST['answer5']) && $_POST['answer5'] == 9){
                     $correct_count++;
                }

                echo  "Count of correct answer is: ". $correct_count;
            
            ?>
        <? endif ?>
        
        </div>
    
    </div>


   </div>



  
    
</body>
</html>