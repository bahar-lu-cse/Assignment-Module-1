<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #ffffff;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }
        h1{
            text-align: center;
            font-size: 30px;
        }
        .container {
            margin: 50px auto;
            width: 500px;
            border: 1px solid #482d2d;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        #result{
            padding-top: 20px;
            font-size: 30px;
            text-align: center;
        }
        
        input[type="number"],
        select {
            width: 90%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #482d2d;
            border-radius: 5px;
            align-items: center;
            font-size: 20px;
        }
        button{
            width: 90%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #d000ff;
            color: white;
            background-color: #000000;
            font-size: 20px;
            cursor: pointer;
        }
        button:hover {
        background-color: #4CAF50;
        color: white;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Temperature Converter </h1>
        <form action="" method="post">
            <input type="number" name="num" placeholder="Please Enter Valid number:"><br>
            <select name="Operation" id="">
                <option value="celsius">Celsius to Fahrenheit</option>
                <option value="fahrenheit">Fahrenheit to Celsius</option>                
            </select>
            <br>
            <button type="submit" name="submit">Submit</button>           
        </form>
        <div id="result">
            <?php 
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $num = $_POST["num"];
                $Operation = $_POST["Operation"];
              
                switch($Operation){
                    case "celsius":
                        if($num !=0){
                            $result = $num*1.8 + 32;                           
                            echo "Celsius $num °C converted to Fahrenheit Temperature : $result"."°F";
                            break;
                        }else{
                            echo "Invalid Input. Please input gether than 0";
                        }                    

                    case "fahrenheit":
                        if($num >=32 ){                        
                        $result = ($num-32)*5/9;                        
                        echo "Fahrenheit $num °F converted to Celsius Temperature : $result"."°C";
                        break;
                    }else{
                        echo "Invalid Input. Please input gether than or equal to 32";
                    }
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
