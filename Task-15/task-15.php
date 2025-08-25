<!DOCTYPE html>
<html lang="az">
<head>
  <meta charset="UTF-8">
  <title>PHP Praktika - Date funksiyaları</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 40px;
      color: #fff;
    }

    .container {
      max-width: 600px;
      margin: auto;
      background: #fff;
      color: #333;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.25);
      text-align: center;
    }

    h1 {
      font-size: 22px;
      margin-bottom: 20px;
    }

    .answer {
      background: #f7f7f7;
      padding: 15px 20px;
      border-radius: 10px;
      font-size: 18px;
      color: #222;
      display: inline-block;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Date funksiyaları nümunəsi</h1>

    <div class="answer">
      <?php
        date_default_timezone_set("Asia/Baku");

        $tarix = date("Y-m-d");

        $saat = date("H:i:s");

        echo "Bugünkü tarix: <strong>$tarix</strong><br>";
        echo "Saat: <strong>$saat</strong>";
      ?>
    </div>
  </div>
</body>
</html>
