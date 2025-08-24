<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>tusk_12</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            max-width: 400px;
            margin-top: 100px;
            padding: 30px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .login-container h2 {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<?php
$username = 'Rəşad';
$db_email = 'resad@gmail.com';
$db_password = 'r12345';
$success = '';
$error = '';
if (isset($_POST['username'],$_POST['password'])){
    $email = trim(htmlspecialchars($_POST['email']));
    $password = trim(htmlspecialchars($_POST['password']));

    if ($db_email===$email && $db_password===$password){
        $success = "Xoş gəlmisiniz $username";
    }elseif (empty($email)||empty($password)){
        $error = 'Email və ya Password boş ola bilməz!';
    }else{
        $error = 'Email və ya Password yanlışdır!';
    }
}

?>
<center style="margin: 5%"><h3><i>İstifadəçi e-mail və şifrə daxil etsin. PHP-də $_POST istifadə edərək onları yoxlayın və ekrana "Düzgün" və ya "Yanlış" yazdırın!</i></h3></center>
<div class="form">
    <div class="login-container mx-auto">
        <h2 class="text-center">Login</h2>
        <?php if ($error): ?>
            <div class="alert alert-danger">
                <?php echo '<pre>' . $error . '</pre>'; ?>
            </div>
        <?php elseif ($success): ?>
            <div class="alert alert-success">
                <?php echo '<pre>' . $success . '</pre>'; ?>
            </div>
        <?php endif; ?>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">İstifadəçi adı</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="İstifadəçi adınızı daxil edin" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Şifrə</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Şifrənizi daxil edin" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Daxil ol</button>
            </div>
            <div class="mt-3 text-center">
                <a href="#"> Şifrənizi unutmusunuz? </a>
            </div>
        </form>
    </div>
</div>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

