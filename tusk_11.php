<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tusk_11</title>
</head>
<body>
<center><h3><i>İstifadəçidən bir string alın və onu kiçik hərflərə çevirin, uzunluğunu çap edin, 3-cü simvolunu çıxarın!</i></h3></center>

<div align="center" class="form">
    <form action="" method="POST">
        <label>Bir söz yazın :
            <input type="text" name="word">
        </label>
        <input type="submit" value="göstər">
    </form>
</div>
<hr>
<br>
<?php
echo '<center>';
if (isset($_POST['word'])){
    $word = (String)$_POST['word'];

    $lower = strtolower($word);

    $length = strlen($word);

    if ($length >= 3) {
        $modified = substr_replace($word, '[]', 2, 1);
    } else {
        $modified = $word;
    }
    echo '<pre>'.'Kiçik həriflərlə yazılışı   :  ' . $lower . '</pre>';
    echo '<pre>'.'Sözün uzunluğu              :  ' . $length . '</pre>';
    echo '<pre>'.'Seçdiyiniz simvol           :  ' . $modified . '</pre>';

}
echo '</center>';
?>

</body>
</html>
