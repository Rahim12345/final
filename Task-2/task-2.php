<!DOCTYPE html>
<html lang="az">
<head>
  <meta charset="UTF-8">
  <title>PHP Praktika - Dəyişənlər</title>
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
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }

    h1 {
      font-size: 22px;
      margin-bottom: 20px;
    }

    .answer {
      background: #f3f3f3;
      padding: 20px;
      border-radius: 10px;
      font-size: 18px;
      line-height: 1.6;
      color: #222;
    }

    .answer strong {
      color: #11998e;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>2. İki dəyişən yaradın: $a = 10, $b = 5. Onların cəmini, fərqini, hasilini və bölməsini ekrana çap edin.</h1>
    
    <div class="answer">
      <?php
        $a = 10;
        $b = 5;

        echo "<strong>Cəm:</strong> " . ($a + $b) . "<br>";
        echo "<strong>Fərq:</strong> " . ($a - $b) . "<br>";
        echo "<strong>Hasil:</strong> " . ($a * $b) . "<br>";
        echo "<strong>Bölmə:</strong> " . ($a / $b);
      ?>
    </div>
  </div>
</body>
</html>
