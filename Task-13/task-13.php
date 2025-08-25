<!DOCTYPE html>
<html lang="az">
<head>
  <meta charset="UTF-8">
  <title>PHP Praktika - Form ilə POST</title>
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

    input[type="email"], input[type="password"] {
      padding: 10px;
      width: 100%;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
      margin-bottom: 10px;
    }

    button {
      padding: 10px 20px;
      background: #ff6f61;
      color: #fff;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s;
    }

    button:hover {
      background: #c70039;
    }

    .answer {
      background: #f7f7f7;
      padding: 15px 20px;
      border-radius: 10px;
      font-size: 18px;
      color: #222;
    }

    .answer strong {
      color: #ff6f61;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Form ilə POST<br>İstifadəçi e-mail və şifrə daxil etsin. PHP-də $_POST istifadə edərək yoxlayın.</h1>

    <form method="post">
      <input type="email" name="email" placeholder="E-mail" required>
      <input type="password" name="sifre" placeholder="Şifrə" required>
      <button type="submit">Göndər</button>
    </form>

    <div class="answer">
      <?php
        $correct_email = "test@example.com";
        $correct_sifre = "12345";

        if (isset($_POST['email']) && isset($_POST['sifre'])) {
          $email = $_POST['email'];
          $sifre = $_POST['sifre'];

          if ($email === $correct_email && $sifre === $correct_sifre) {
            echo "<strong>Düzgün </strong>";
          } else {
            echo "<strong>Yanlış </strong>";
          }
        } else {
          echo "E-mail və şifrəni daxil edin və göndərin ✅";
        }
      ?>
    </div>
  </div>
</body>
</html>
