<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tusk_21</title>
</head>
<body>
<center><h3><i>Bir array yaradın [2, 5, 8, 11, 14] və yalnız cüt ədədləri seçən funksiya yazın.</i></h3></center>

<center style="margin: 10%">

<div class="container">

    <form action="" method="GET">

        Arrays elementlərini daxil edin : <label for="number1">
            <input style="width: 50px" type="number" name="number1">
        </label>
        <label for="number2">
            <input style="width: 50px" type="number" name="number2">
        </label>
        <label for="number3">
            <input style="width: 50px" type="number" name="number3">
        </label>
        <label for="number4">
            <input style="width: 50px" type="number" name="number4">
        </label>
        <label for="number5">
            <input style="width: 50px" type="number" name="number5">
        </label>
        <input style="width: 70px" type="submit" value="find">
    </form>
</div>
<hr>
<br>
<?php
if (isset($_GET['number1'],$_GET['number2'],$_GET['number3'],$_GET['number4'],$_GET['number5'])){

    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];
    $number3 = $_GET['number3'];
    $number4 = $_GET['number4'];
    $number5 = $_GET['number5'];

    $arrays = [$number1,$number2,$number3,$number4,$number5];

    echo "<h2><pre>Cüt ədədlər: " . implode(", ", arr($arrays)) . '</pre></h2>';

}
function arr($arr) {
    $even = [];
    foreach ($arr as $num) {
        if ($num % 2 == 0) {
            $even[] = $num;
        }
    }
    return $even;
}
?>
</center>
</body>
</html>