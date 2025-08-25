<!DOCTYPE html>
<html lang="az">
<head>
  <meta charset="UTF-8">
  <title>PHP Praktika - Funksiya</title>
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
      background: #a6c1ee;
      color: #fff;
      padding: 8px 15px;
      border-radius: 8px;
      margin: 5px;
      font-weight: bold;
      box-shadow: 0 4px 6px rgba(0,0,0,0.2);
      transition: 0.3s;
    }

    .answer span:hover {
      background: #4a69bd;
      transform: translateY(-4px);
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Funksiya yazın: function topla($a, $b) iki ədədi cəmləsin və nəticəni qaytarsın.</h1>

    <div class="answer">
      <?php
        function topla($a, $b) {
          return $a + $b;
        }

        $nəticə = topla(10, 5);

        echo "<span>10 + 5 = $nəticə</span>";
      ?>
    </div>
  </div>
</body>
</html>
