<?php
if (!isset($_COOKIE['menset'])) {
    setcookie("menset", "Hello User", time() + 3600);
}
?>
<!DOCTYPE html>
<html lang="az">
<head>
  <meta charset="UTF-8">
  <title>Cookie Nümunəsi</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 50px;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: #fff;
    }

    .cookie-box {
      background: #fff;
      color: #333;
      padding: 30px 50px;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
      text-align: center;
      font-size: 20px;
    }

    .cookie-box span {
      color: #f7971e;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="cookie-box">
    <?php
      if (isset($_COOKIE['menset'])) {
          echo "Salam, <span>" . $_COOKIE['menset'] . "</span>!";
      } else {
          echo "Cookie yaradıldı! Səhifəni yenidən yükləyin.";
      }
    ?>
  </div>
</body>
</html>
