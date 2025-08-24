<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tusk_2</title>
</head>
<body>
<center><h3><i>A və B ( + , - , * , / ) nəticələri</i></h3></center>
<center style="margin: 10%">
    <form action="" method="POST">
        <label for="a">
            <input type="number" name="num1">
        </label>
        <label for="b">
            <input type="number" name="num2">
            <input type="submit" value="nəticə">
        </label>
    </form>
    <hr>
    <br>
    <?php
    if (isset($_POST['num1'],$_POST['num2'])){

        $a = $_POST['num1'];
        $b = $_POST['num2'];

        echo "<pre> toplama :  $a+$b = " . ($a+$b) . '<br><br>';
        echo "çıxma   :  $a-$b = " . ($a-$b) . '<br><br>';
        echo "vurma   :  $a*$b = " . ($a*$b) . '<br><br>';
        echo "bölmə   :  $a/$b = " . ($a/$b) . '<br><br>' . '</pre>';
    }


    ?>
</center>
</body>
</html>
