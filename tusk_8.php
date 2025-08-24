<?php
session_start();
if (!isset($_SESSION['arr'])) {
    $_SESSION['arr'] = [];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tusk_8</title>
</head>
<body>
<center><h3><i>Array-ə yeni element əlavə edin, sonra elementləri azalan sırada sort edin və ekrana çap edin</i></h3></center>
<center style="margin: 10%">

    <form method="POST">
        <label for="el1">element_1 :
            <input style="width: 5%" type="number" name="el1">
        </label>
        <label for="el2">element_2 :
            <input style="width: 5%" type="number" name="el2">
        </label>
        <label for="el3">element_3 :
            <input style="width: 5%" type="number" name="el3">
        </label>
        <label for="el4">element_4 :
            <input style="width: 5%" type="number" name="el4">
        </label>
        <label for="el5">element_5 :
            <input style="width: 5%" type="number" name="el5">
        </label>
        <label for="el6">element_6 :
            <input style="width: 5%" type="number" name="el6">
        </label>
        <label for="el7">element_7 :
            <input style="width: 5%" type="number" name="el7">
        </label>
        <label for="el8">element_8 :
            <input style="width: 5%" type="number" name="el8">
        </label>
        <input type="submit" style="width: 4%" value="msv">
    </form>
    <hr>
    <br>
    <form action="" method="POST">
        <label style="text-align: right" for="add">add element :
            <input style="width: 5%" type="number" name="add">
            <input type="submit" value="add+">
        </label>
    </form>

    <hr>
    <br>
    <?php
    if (isset($_POST['el1'],$_POST['el2'],$_POST['el3'],$_POST['el4'],$_POST['el5'],$_POST['el6'],$_POST['el7'],$_POST['el8'])){
        $el1 = $_POST['el1'];
        $el2 = $_POST['el2'];
        $el3 = $_POST['el3'];
        $el4 = $_POST['el4'];
        $el5 = $_POST['el5'];
        $el6 = $_POST['el6'];
        $el7 = $_POST['el7'];
        $el8 = $_POST['el8'];

        $_SESSION['arr'] = [$el1, $el2, $el3, $el4, $el5, $el6, $el7, $el8];


        if (isset($_POST['add']) && $_POST['add'] !== '') {
            $add = $_POST['add'];
            $_SESSION['arr'][] = $add;
            $_SESSION['arr'] = [$el1, $el2, $el3, $el4, $el5, $el6, $el7, $el8,$add];
        }
        echo "Arrays [ ";
        foreach ($_SESSION['arr'] as $element) {
            echo $element . ', ';
        }
        echo "]";
    }
    ?>
</center>
</body>
</html>
