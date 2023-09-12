<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal_Info</title>
    <style>
        h1{
            color: #17202A;
            text-align: center;
            font-size: 40px;
        }
        body {
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
        }
        p{
            color: #000000;
            font-size: 20px;
            line-height: 35px;
        }

        .container {
            margin: 30px auto;
            width: 500px;
            border: 1px solid #461d7c;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px #B9770E;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $name = "Habibul Bahar";
        $age = 23;
        $country = "Bangladesh";
        $introduction = "Hello, I'm Habibul Bahar. I am a dedicated PHP developer with a strong background in Front-end development. With over 2 years of experience.";

        echo "<h1>Personal Information</h1>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Age:</strong> $age</p>";
        echo "<p><strong>Country:</strong> $country</p>";
        echo "<p><strong>Introduction:</strong> $introduction</p>";
        ?>
    </div>
</body>
</html>