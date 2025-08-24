<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tusk_5</title>
</head>
<body>
<center><h3><i>for döngüsü ilə 1-dən 10-a qədər ədədləri və onların kvadratlarını çap edin</i></h3></center>
<center style="margin: 10%">
    <div class="container">
        <form action="" method="POST">
            <label for="num">enter age
                <input type="number" name="num" placeholder="enter number">
                <input style="text-align: right" type="submit" value="çap et">
            </label></form>
    </div>
    <hr>
    <br>
    <?php
    if (isset($_POST['num'])){
        $num = $_POST['num'];

        for ($i = 1; $i <= $num; $i++) {
            echo '<pre>' . $i . " ^ 2 = " . ($i * $i) . "<br><br>" . '</pre>';
        }
    }

    ?>

</center>
</body>
</html>

