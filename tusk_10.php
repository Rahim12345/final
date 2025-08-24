<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tusk_10</title>
</head>
<body>
<center><h3><i>Funksiya yazın: function topla($a, $b) iki ədədi cəmləsin və nəticəni qaytarsın.</i></h3></center>

<div align="center" class="form">
    <form action="" method="POST">
        <label>A :
            <input type="number" name="a">
        </label>
        <label>B :
            <input type="number" name="b">
        </label>
        <input type="submit" value="topla">
    </form>
</div>
<hr>
<br>
<?php
echo '<center>';
if (isset($_POST['a'],$_POST['b'])){
    $a = (int)$_POST['a'];
    $b = (int)$_POST['b'];

    echo '<pre>'.'Nəticə : ' . result($a,$b) . '</pre>';

}
function result($a,$b): int
{
    return $a+$b;
}
echo '</center>';
?>

</body>
</html>
