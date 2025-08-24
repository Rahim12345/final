<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tusk_16</title>
</head>
<body>
<center><h3><i>1-dən 100-ə qədər təsadüfi ədəd yaradın və istifadəçiyə "Böyük", "Kiçik" və ya "Bərabər 50" yazdırın.</i></h3></center>
<center style="margin: 10%">
    <div class="container">
        <form method="GET">
            <label for="number1">number_1 :
                <input type="number" name="number1">
            </label>
            <label for="number2">number_2 :
                <input type="number" name="number2">
            </label>
            <input type="submit" value="rand">
        </form>
    </div>
    <hr><br>
    <?php
    if (isset($_GET['number1'],$_GET['number2'])){
        $num_1 = $_GET['number1'];
        $num_2 = $_GET['number2'];

        if (rand($num_1,$num_2)>50)
            echo 'Element : ' . rand($num_1,$num_2) . '>  Böyükdür 50-dən';

        elseif (rand($num_1,$num_2)<50)
            echo 'Element : ' . rand($num_1,$num_2) . '<  Kiçikdir 50-dən';

        else
            echo 'Element : ' . rand($num_1,$num_2) . '=  Bərabərdir 50-yə';
    }
    ?>
</center>
</body>
</html>

