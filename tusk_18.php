<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tusk_18</title>
</head>
<body>
<center><h3><i>İstifadəçinin adını cookie-də saxlayın və bir səhifəyə daxil olanda ekrana "Salam, [ad]" yazdırın.</i></h3></center>
<center style="margin: 10%">
    <?php
    if (isset($_POST['username'])){
        $username = $_POST['username'];
        setcookie("username" , $username , time() + 5);
        header("Location: ".$_SERVER['PHP_SELF']);
        exit;
    }else{
        ?>
        <form method="POST" action="welcome_cookie.php">
            <label for="username">Adınızı daxil edin:
                <input type="text" name="username" required>
            </label>
            <button type="submit">salamla</button>
        </form>
        <hr>
        <br>
    <?php } ?>
</center>
</body>
</html>

