<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tusk_3</title>
</head>
<body>
<center><h3><i>Şərt əməliyyatı (if-else)</i></h3></center>
<center style="margin: 10%">
    <div>
        <form action="" method="POST">
            <label for="number">Ədədi daxil edin :
                <input type="number" name="number">
            </label>
        </form>
    </div>
    <hr><br>
    <?php
    if (isset($_POST['number'])){
        $number = $_POST['number'];

        if ($number>0)
            echo $number . '->  müsbət' . '<br><br>';
        elseif ($number==0)
            echo $number . '->  sıfır' . '<br><br>';
        elseif($number<0)
            echo $number . '->  mənfi' . '<br><br>';
        else
            echo 'düzgün ədəd daxil edin';
    }

    ?>
</center>
</body>
</html>

