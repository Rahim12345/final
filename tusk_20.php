<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <title>tusk_20</title>
</head>
<body>
<center><h1><i>FACTORIAL</i></h1></center>
<center style="margin: 10%">
    <form method="GET">
        <label for="factorial">Factorial : !
            <input style="width: 5%" type="number" name="factorial">
        </label>
        <button type="submit">factorial</button>
    </form>
    <hr>
    <br>
    <?php
    if (isset($_GET['factorial'])){
        $factorial = $_GET['factorial'];

        echo 'Factorial :  ' . factorial($factorial);
    }
    function factorial($n){
        if ($n<=1){
            return 1;
        }
        return $n*factorial($n-1);
    }
    ?>
</center>
</body>
</html>
