<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tusk_7</title>
</head>
<body>
<center><h3><i>Bir array yaradın: ["alma", "armud", "banan"]. foreach ilə hər meyvəni ekrana çap edin</i></h3></center>
<center style="margin: 10%">
    <form action="" method="POST">
        <label for="el_1">element_1 :
            <input type="text" name="el1">
        </label>
        <label for="el_2">element_2 :
            <input type="text" name="el2">
        </label>
        <label for="el_3">element_3 :
            <input type="text" name="el3">
        </label>
        <input type="submit" value="[ massivə yığ ]">
    </form>
    <hr>
    <br>
    <?php
    if (isset($_POST['el1'],$_POST['el2'],$_POST['el3'])){
        $el_1 = $_POST['el1'];
        $el_2 = $_POST['el2'];
        $el_3 = $_POST['el3'];

        $arr = [$el_1,$el_2,$el_3];
        echo 'Arrays [ ';
        foreach ($arr as $element){
            echo $element . ', ';
        }
        echo ' ]';
    }
    ?>
</center>
</body>
</html>
