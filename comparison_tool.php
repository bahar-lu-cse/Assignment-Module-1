<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comparison</title>
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
            height: 400px;
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
        input{
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
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <h1>Comparison Tools</h1>
            <div class="form_design">
                <form action="" method="POST">
                    <input type="number" name="num1" placeholder="Enter First Number" required><br>
                    <input type="number" name="num2" placeholder="Enter Second Number" required><br>
                    <br>
                    <button type="submit" name="submit">Compare</button>
                </form>                
            </div>                      
        </div>

        <div class="box">
            <h1>Comparison Result </h1><br>         
            <div id="result">
                <?php 
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $num1 = $_POST["num1"];
                    $num2 = $_POST["num2"];

                    $result = ($num1 > $num2) ? $num1 : $num2;
                    echo "First Number: $num1 <br>";
                    echo "Second Number: $num2";                    
                }
                
                ?>
                <h2><?php echo "Larger Number = ". $result; ?></h2>
            </div>
            <br><br>        
        </div>

    </div>
</body>
</html>
