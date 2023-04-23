<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alds - Simple PHP Calculator</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <div class="heading">
        <h1>ALDS SIMPLE CALCULATOR</h1>
    </div>
    <div class="form">
            <form action="#">
                <input type="text" name="num1" placeholder="Number 1">
                <input type="text" name="num2" placeholder="Number 2">
                <select name="operator" >
                    <option></option>
                    <option>NONE</option>
                    <option>ADD</option>
                    <option>SUBTRACT</option>
                    <option>MULTIPLY</option>
                    <option>DIVIDE</option>
                </select>
                <br>
                <button name="submit" value="Submit">Calculate</button>
                <p>The answer is: </p>
                <?php
                    if(isset($_GET ['submit'])){
                        $result1 = $_GET['num1'];
                        $result2 = $_GET['num2'];
                        $operator = $_GET['operator'];

                        switch($operator){
                            case "NONE";
                            echo "Error, no method selected";
                            break;
                            case "ADD";
                            echo $result1 + $result2;
                            break;
                            case "SUBTRACT";
                            echo $result1 - $result2;
                            break;
                            case "MULTIPLY";
                            echo $result1 * $result2;
                            break;
                            case "DIVIDE";
                            echo $result1 / $result2;
                            break;
                            default:

                            echo "No Calculation done";

                        }
                    }

                ?>
            </form>
        </div>
</body>
</html>