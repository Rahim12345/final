<!DOCTYPE html>
<html lang="az">
<head>
  <meta charset="UTF-8">
  <title>PHP Praktika - Döngülər</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      color: #fff;
      margin: 0;
      padding: 40px;
    }

    .container {
      max-width: 700px;
      margin: auto;
      background: #ffffff;
      color: #333;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.25);
    }

    h1 {
      font-size: 22px;
      margin-bottom: 20px;
    }

    .answer {
      background: #f7f7f7;
      padding: 20px;
      border-radius: 10px;
      font-size: 18px;
      line-height: 1.6;
      color: #222;
    }

    .answer strong {
      color: #ff6f61;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Döngülər<br>For döngüsü ilə 1-dən 10-a qədər ədədləri və onların kvadratlarını çap edin.</h1>

    <div class="answer">
      <?php
        for ($i = 1; $i <= 10; $i++) {
          $square = $i * $i;
          echo "$i → <strong>$square</strong><br>";
        }
      ?>
    </div>
  </div>
</body>
</html>
