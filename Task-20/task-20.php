<!DOCTYPE html>
<html lang="az">
<head>
<meta charset="UTF-8">
<title>Faktoriyal Nümunəsi</title>
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
    <h1>Factorial Hesablama</h1>
    <p>
        <?php
        $n = 5; 
        $result = 1;
        for ($i = 1; $i <= $n; $i++) {
            $result *= $i;
        }
        echo "5! = " . $result;
        ?>
    </p>
</div>
</body>
</html>
