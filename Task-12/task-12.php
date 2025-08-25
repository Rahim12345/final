<!DOCTYPE html>
<html lang="az">
<head>
  <meta charset="UTF-8">
  <title>PHP Praktika - Form ilə GET</title>
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
    }

    h1 {
      font-size: 22px;
      margin-bottom: 20px;
    }

    form {
      margin-bottom: 20px;
    }

    input[type="text"] {
      padding: 10px;
      width: 100%;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
      margin-bottom: 10px;
    }

    button {
      padding: 10px 20px;
      background: #43cea2;
      color: #fff;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s;
    }

    button:hover {
      background: #185a9d;
    }

    .answer {
      background: #f7f7f7;
      padding: 15px 20px;
      border-radius: 10px;
      font-size: 18px;
      color: #222;
    }

    .answer strong {
      color: #185a9d;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Form ilə GET<br>İstifadəçi adını daxil etsin və PHP ilə $_GET vasitəsilə ekrana çap edin.</h1>

    <form method="get">
      <input type="text" name="ad" placeholder="Adınızı " >
      <button type="submit">Göndər</button>
    </form>

    <div class="answer">
      <?php
        if (isset($_GET['ad']) && $_GET['ad'] != "") {
          $ad = htmlspecialchars($_GET['ad']); 
          echo "Salam, <strong>$ad</strong>!";
        } else {
          echo "Adınızı daxil edin və göndərin ✅";
        }
      ?>
    </div>
  </div>
</body>
</html>
