<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Checker</title>
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
            background-color: coral;
            box-shadow: 10px 10px 5px lightblue;
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
            font-size: 30px;
            line-height: 35px;
            color: #ffffff;
        }
    </style>

</head>

<body>
    <div class="container">
        <h2>Even or Odd Checker</h2>
        <form method="post" action="">
            <input type="number" name="num" placeholder="Enter Given Number" required><br>            
            
            <button type="submit" name="submit">Check</button>
        </form>
        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num = $_POST["num"];               
                
                    if($num >=1 ){
                            if ($num % 2 == 0) {
                                echo "This Value $num is Even Number.";
                            } else {
                                echo "This Value $num is Odd Number.";
                            }
                             }
                    else{
                    echo "This Value $num is Invalid Input Error."."<br>"." Please input gether than or equal 1.";
                    }             
                
            }
            ?>
        </div>
    </div>
</body>

</html>
