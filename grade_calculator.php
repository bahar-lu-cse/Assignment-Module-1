<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }
        h1 {
            font-size: 45px;
            margin-bottom: 20px;
            color: #000000;
            text-align: center;
        }
        .container {
            margin: 50px auto;
            width: 450px;
            border: 1px solid #482d2d;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            font-size: 20px;
            margin-bottom: 10px;
            border: 1px solid #482d2d;
            border-radius: 5px;
            margin-top: 10px;
        }

        button {
            background-color: #000000;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            font-size: 20px;
            width: 80%;
            cursor: pointer;
            margin-top: 15px;
            text-align: center;
        }
        button:hover {
            background-color: #4CAF50;
            color: white;
        }

        #result {
            margin-top: 20px;
            font-size: 25px;
            line-height: 35px;
        }
    </style>

</head>

<body>
    <div class="container">
        <h2>Grade Calculator</h2>
        <form method="post" action="">
            <input type="number" name="num1" placeholder="Enter Number 1"><br>
            <input type="number" name="num2" placeholder="Enter Number 2"><br>
            <input type="number" name="num3" placeholder="Enter Number 3"><br>
            
            <button type="submit" name="submit">Calculate</button>
        </form>
        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $num3 = $_POST["num3"];                
                $result = ($num1+$num2+$num3)/3; 
                $total_marks = $num1+$num2+$num3; 
                $final_result = sprintf("%0.2f",$result);  
                
                if($num1 >=0 && $num2 >=0 && $num3 >=0){
                    if ($final_result>=80) {
                        echo "Number 1: ". $num1 ."<br>"."Number 2: ". $num2 ."<br>"."Number 3: ". $num3."<br>"."<br>";
                        echo "Total Marks is: ".$total_marks."<br>"." Average Result is = ".$final_result."<br>"." Corresponding Latter Grade: A";
                    } elseif ($final_result>=70) {
                        echo "Number 1: ". $num1 ."<br>"."Number 2: ". $num2 ."<br>"."Number 3: ". $num3."<br>"."<br>";
                        echo "Total Marks is: ".$total_marks."<br>"." Average Result is = ".$final_result."<br>"." Corresponding Latter Grade: B";
                    } elseif ($final_result>=60) {
                        echo "Number 1: ". $num1 ."<br>"."Number 2: ". $num2 ."<br>"."Number 3: ". $num3."<br>"."<br>";
                        echo "Total Marks is: ".$total_marks."<br>"." Average Result is = ".$final_result."<br>"." Corresponding Latter Grade: C";
                    } elseif ($final_result>=50) {
                        echo "Number 1: ". $num1 ."<br>"."Number 2: ". $num2 ."<br>"."Number 3: ". $num3."<br>"."<br>";
                        echo "Total Marks is: ".$total_marks."<br>"." Average Result is = ".$final_result."<br>"." Corresponding Latter Grade: D";
                    } else {
                        echo "Number 1: ". $num1 ."<br>"."Number 2: ". $num2 ."<br>"."Number 3: ". $num3."<br>"."<br>";
                        echo "Total Marks is: ".$total_marks."<br>"." Average Result is = ".$final_result."<br>"." Corresponding Latter Grade: F";
                       
                    }

                }else{
                    echo "Number 1: ". $num1 ."<br>"."Number 2: ". $num2 ."<br>"."Number 3: ". $num3."<br>"."<br>";
                    echo "Invalid Negative Value Input."."<br>"." Please input gether than or equal 0";
                }                
                
            }
            ?>
        </div>
    </div>
</body>

</html>
