<!DOCTYPE html>
<html lang="az">
<head>
  <meta charset="UTF-8">
  <title>PHP Praktika - Salam Dünya</title>
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
      font-size: 24px;
      margin-bottom: 20px;
    }

    .answer {
      background: #f3f3f3;
      padding: 20px;
      border-radius: 10px;
      font-size: 20px;
      font-weight: bold;
      text-align: center;
      color: #444;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>1. PHP-də ekrana "Salam Dünya!" çap edən proqram yazın</h1>
    
    <div class="answer">
      <?php
        echo "Salam Dünya!";
      ?>
    </div>
  </div>
</body>
</html>
