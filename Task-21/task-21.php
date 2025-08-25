<!DOCTYPE html>
<html lang="az">
<head>
<meta charset="UTF-8">
<title>Array Filter Nümunəsi</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #f0f8ff;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .box {
        background: #fff;
        padding: 30px 50px;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        text-align: center;
    }
    h1 {
        margin-bottom: 20px;
    }
    p {
        font-size: 20px;
        color: #333;
    }
</style>
</head>
<body>
<div class="box">
    <h1>Array Filter – Cüt ədədlər</h1>
    <p>
        <?php
        $numbers = [2, 5, 8, 11, 14];

        $cutNumbers = array_filter($numbers, function($n) {
            return $n % 2 == 0;
        });

         $tekNumbers = array_filter($numbers, function($n) {
            return $n % 1 == 0;
        });

        echo "Cüt ədədlər: ";
        foreach($cutNumbers as $num) {
            echo $num . " ";
        }
      
        echo "<br>";
        echo "<br>";

         echo "Tek ədədlər: ";
        foreach($tekNumbers as $num) {
            echo $num . " ";
        }
        ?>
    </p>
</div>
</body>
</html>
