<!DOCTYPE html>
<html lang="az">
<head>
  <meta charset="UTF-8">
  <title>PHP Praktika - Assosiativ Array</title>
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
      background: #ff6f61;
      color: #fff;
      padding: 8px 15px;
      border-radius: 8px;
      margin: 5px;
      font-weight: bold;
      box-shadow: 0 4px 6px rgba(0,0,0,0.2);
      transition: 0.3s;
    }

    .answer span:hover {
      background: #c70039;
      transform: translateY(-4px);
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Assosiativ array<br>$student = ["ad" => "Elvin", "yas" => 20, "fenn" => "Riyaziyyat"]<br>foreach ilə bütün açar və dəyərləri çap edin.</h1>

    <div class="answer">
      <?php
        $student = [
          "ad" => "Elvin",
          "yas" => 20,
          "fenn" => "Riyaziyyat"
        ];

        foreach ($student as $key => $value) {
          echo "<span>$key : $value</span>";
        }
      ?>
    </div>
  </div>
</body>
</html>
