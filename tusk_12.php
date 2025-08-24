<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tusk_12</title>
</head>
<body>
<center><h3><i>HTML form yaradın. İstifadəçi adını daxil etsin və PHP ilə $_GET vasitəsilə ekrana çap edin!</i></h3></center>

<div align="center" class="form">
    <form action="" method="GET">
        <label>Adınızı qeyd edin :
            <input type="text" name="word">
        </label>
        <input type="submit" value="göstər">
    </form>
</div>
<hr>
<br>
<?php
echo '<center>';
if (isset($_GET['word'])){
    $word = (String)$_GET['word'];


    echo '<pre><h2>' .'Adının çapı :  ' . $word. '</h2></pre>';

}
echo '</center>';
?>

</body>
</html>
