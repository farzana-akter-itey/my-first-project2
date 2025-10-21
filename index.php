<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <h1>PHP Calculator</h1>
        <div class="container">
            <div>
                <form method="POST" action="">
                    <div class="input">
                        <input type="text" name="num1" placeholder="Enter First Number">
                    </div>
                    <div class="input">
                        <input type="text" name="num2" placeholder="Enter Second Number">
                    </div>
                    <div class="input">
                        <span>+</span> 
                        <input type="radio" class="opa"name="operation" value="+">
                        <span>-</span>
                        <input type="radio" class="opa" name="operation" value="-">
                        <span>*</span> 
                        <input type="radio" class="opa" name="operation" value="*">
                        <span>/</span> 
                        <input type="radio" id="opa" class="opa" name="operation" value="/">
                    </div>
                    <div class="input">
                        <input type="submit" name="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
        <div class="input">
            <p> 
                <?php 
                    if (isset($_POST['operation'])) {
                        $num1 = $_POST['num1'];
                        $num2 = $_POST['num2'];
                        $operation = $_POST['operation'];
                        
                        if(is_numeric($num1) && is_numeric($num2)){

                            switch($operation){
                                case "+": $sum = $num1 + $num2;
                                    echo "The addition of two number is {$sum}";
                                    break;
                                case "-": $sub = $num1 - $num2;
                                    echo "The subtraction of two number is {$sub}";
                                    break;
                                case "*": $multi = $num1 * $num2;
                                    echo "The multiplication of two number is {$multi}";
                                    break;
                                case "/": 
                                    if($num2 == 0){
                                        echo "Division by zero is not allowed.";
                                    }
                                    else{
                                        $div = $num1 / $num2;
                                        echo "The division of two number is {$div}";
                                    } 
                                    break;
                                default: echo "Invalid Operation";
                            }   
                        }
                        else {
                            echo "Please enter valid numbers.";
                        }    

                    }
                ?>
            </p>
        </div>
    </div>
</body>
</html>