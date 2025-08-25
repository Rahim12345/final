<!DOCTYPE html>
<html lang="az">
<head>
  <meta charset="UTF-8">
  <title>PHP Praktika - Foreach</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 40px;
    }

    .container {
      max-width: 700px;
      margin: auto;
      background: #fff;
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
      line-height: 1.8;
      color: #222;
    }

    .answer span {
      display: inline-block;
      background: #66a6ff;
      color: #fff;
      padding: 8px 15px;
      border-radius: 8px;
      margin: 5px;
      font-weight: bold;
      box-shadow: 0 4px 6px rgba(0,0,0,0.2);
      transition: 0.3s;
    }

    .answer span:hover {
      background: #005bea;
      transform: translateY(-4px);
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Foreach döngüsü ilə array çapı</h1>

    <div class="answer">
      <?php
        $meyveler = ["alma", "armud", "banan"];

        foreach ($meyveler as $meyve) {
          echo "<span>$meyve</span>";
        }
      ?>
    </div>
  </div>
</body>
</html>
