<!DOCTYPE html>
<html lang="az">
<head>
  <meta charset="UTF-8">
  <title>PHP Praktika - String funksiyaları</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #ffecd2, #fcb69f);
      margin: 0;
      padding: 40px;
    }

    .container {
      max-width: 700px;
      margin: auto;
      background: #fff;
      padding: 30px;
      border-radius: 15px;
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
      line-height: 1.8;
      color: #222;
    }

    .answer span {
      display: inline-block;
      background: #fcb69f;
      color: #fff;
      padding: 8px 15px;
      border-radius: 8px;
      margin: 5px 0;
      font-weight: bold;
      box-shadow: 0 4px 6px rgba(0,0,0,0.2);
      transition: 0.3s;
    }

    .answer span:hover {
      background: #ff6f61;
      transform: translateY(-3px);
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>String funksiyaları<br>İstifadəçidən bir string alın və onu kiçik hərflərə çevirin, uzunluğunu çap edin, 3-cü simvolunu çıxarın.</h1>

    <div class="answer">
      <?php
        $text = "SalamDunya"; 

        $lower = strtolower($text);
        echo "<span>Kiçik hərflər: $lower</span><br>";

        $length = strlen($text);
        echo "<span>Uzunluğu: $length</span><br>";

        $removeThird = substr_replace($text, "", 2, 1);
        echo "<span>3-cü simvol çıxarıldı: $removeThird</span>";
      ?>
    </div>
  </div>
</body>
</html>
