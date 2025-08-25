<!DOCTYPE html>
<html lang="az">
<head>
  <meta charset="UTF-8">
  <title>PHP Praktika - Şərt əməliyyatı</title>
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
      color: #764ba2;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>3. Şərt əməliyyatı (if-else)<br>Əgər ədəd müsbətdirsə "Müsbət", mənfidirsə "Mənfi", sıfırdırsa "Sıfır" yazdırın.</h1>

    <div class="answer">
      <?php
        $num = -5; 

        if ($num > 0) {
          echo "$num → <strong>Müsbət</strong>";
        } elseif ($num < 0) {
          echo "$num → <strong>Mənfi</strong>";
        } else {
          echo "$num → <strong>Sıfır</strong>";
        }
      ?>
    </div>
  </div>
</body>
</html>
