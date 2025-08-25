<?php
session_start(); 

if (!isset($_SESSION['daxil'])) {
    $_SESSION['daxil'] = false; 
}

if (isset($_POST['login'])) {
    $_SESSION['daxil'] = true;
} elseif (isset($_POST['logout'])) {
    $_SESSION['daxil'] = false;
}
?>

<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <title>PHP Session Nümunəsi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .box {
            background: #fff;
            padding: 30px 50px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            text-align: center;
        }
        button {
            padding: 10px 20px;
            margin: 5px;
            border: none;
            border-radius: 8px;
            background: #007bff;
            color: #fff;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
        p {
            font-size: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="box">
        <p>
            <?php
                if ($_SESSION['daxil']) {
                    echo "Xoş gəlmisiniz!";
                } else {
                    echo "Zəhmət olmasa daxil olun";
                }
            ?>
        </p>

        <form method="post">
            <button name="login">Daxil ol</button>
            <button name="logout">Çıxış</button>
        </form>
    </div>
</body>
</html>
