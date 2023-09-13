<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        .container{
            display: flex; 
            justify-content: center;
            align-items: center;
            margin: 50px auto;
            width: 1170px;
        }
        h1{
            border-bottom: 2px solid purple;
            text-align: center;
            padding-bottom: 20px;
            font-size: 40px;
        }
        .box{
            width: 500px;
            height: 500px;
            padding: 20px;
            border: 1px solid black;
            border-radius: 10px;
            box-shadow: 0 0 10px black;
            background-color: white;
            margin: 20px;
            text-align: center;
            font-size: 20px;            
        }
        .form_design{
            align-items: center;
            padding-top: 20px;
        }
        input, select{
            margin: 10px;
            padding: 10px;
            border: 1px solid black;
            border-radius: 10px;
            font-size: 20px;
            text-align: left;
            width: 450px;
            
        }
        button {
            width: 350px;
            background-color: #4CAF50;
            border: 1px solid black;
            color: white;
            padding: 15px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 25px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 10px;
            }
        button:hover {
            background-color: purple;
            color: white;
        }
        #result{
            padding-top: 20px;
            font-size: 30px;
            line-height: 45px;
            text-align: center;

        }
        h2 {
            font-size: 30px;
        }
        .output_text{
           font-size: 40px !important;
           line-height: 60px !important;
        }
    </style>
</head>
<body>
      <div class="container">
        <div class="box">
            <h1>Calculator</h1>
            <div class="form_design">
            <form method="post" action="">
                    <input type="number" name="num1" placeholder="Enter First Number" required><br><br>
                    <input type="number" name="num2" placeholder="Enter Second Number" required><br>
                    <br>
                    <select name="Operation" id="">
                            <option value="add">Addition</option>
                            <option value="sub">Subtraction</option>
                            <option value="mul">Multiplication</option>
                            <option value="div">Division</option>
                        </select>
                    <br><br>
                    <button type="submit" name="submit">Calculate</button>
                </form>                
            </div>                      
        </div>

        <div class="box">
            <h1>Result Output</h1>
                <div id="result" class="output_text">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $num1 = $_POST["num1"];
                        $num2 = $_POST["num2"];
                        $Operation = $_POST["Operation"];
                        
                        switch ($Operation) {
                            case "add":
                                $result = $num1 + $num2;
                                echo "First Number: " . $num1."<br>";
                                echo "Second Number: " . $num2."<br>";
                                echo "$num1 + $num2 = " . $result."<br>";
                                echo "Final Result: $result"."<br>";
                                break;
                            case "sub":
                                $result = $num1 - $num2;
                                echo "First Number: " . $num1."<br>";
                                echo "Second Number: " . $num2."<br>";
                                echo "$num1 - $num2 = " . $result."<br>";
                                echo "Final Result: $result"."<br>";
                                break;
                            case "mul":
                                $result = $num1 * $num2;
                                echo "First Number: " . $num1."<br>";
                                echo "Second Number: " . $num2."<br>";
                                echo "$num1 × $num2 = " . $result."<br>";
                                echo "Final Result: $result"."<br>";
                                break;
                            case "div":
                                if ($num2 != 0) {
                                    $result = $num1 / $num2;
                                    $final_result = sprintf("%0.2f", $result);
                                    echo "First Number: " . $num1."<br>";
                                    echo "Second Number: " . $num2."<br>";
                                    echo "$num1 ÷ $num2 = " . $final_result."<br>";
                                    echo "Final Result: $final_result"."<br>";
                                    break;
                                } else {
                                    echo "Division by 0 is not possible";
                                }                            
                        }
                    }
                    ?>
                </div>
            </div>
    </div>
</body>
</html>
