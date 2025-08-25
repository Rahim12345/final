<!DOCTYPE html>
<html lang="az">
<head>
  <meta charset="UTF-8">
  <title>PHP Praktika - Switch Case</title>
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
      color: #185a9d;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>4. Switch-case<br>Həftənin gün nömrəsini al və adını ekrana çap et.</h1>

    <div class="answer">
      <?php
        $day = 3; 

        switch ($day) {
          case 1:
            echo "1 → <strong>Bazar ertəsi</strong>";
            break;
          case 2:
            echo "2 → <strong>Çərşənbə axşamı</strong>";
            break;
          case 3:
            echo "3 → <strong>Çərşənbə</strong>";
            break;
          case 4:
            echo "4 → <strong>Cümə axşamı</strong>";
            break;
          case 5:
            echo "5 → <strong>Cümə</strong>";
            break;
          case 6:
            echo "6 → <strong>Şənbə</strong>";
            break;
          case 7:
            echo "7 → <strong>Bazar</strong>";
            break;
          default:
            echo "$day → <strong>Düzgün gün nömrəsi daxil et (1–7)</strong>";
        }
      ?>
    </div>
  </div>
</body>
</html>
