<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tusk_6</title>
</head>
<body>
<center><h3><i>while ilə 10-dan 1-ə qədər ədədləri tərs sırada çap edin</i></h3></center>
<center style="margin: 10%">
    <form action="" method="POST">
        <label for="num">Ədədi daxil edin :
            <input type="number" name="num">
        </label>
    </form>
    <hr>
    <br>
<?php
if (isset($_POST['num'])){
    $num = $_POST['num'];

    while($num>=1){
        echo 'Element : ' . $num . '<br>';
        $num--;
    }
}

?>
</center>
</body>
</html>

