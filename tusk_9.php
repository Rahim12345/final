<?php
session_start();

if (!isset($_SESSION['students'])) {
    $_SESSION['students'] = [];
}

if (isset($_POST['name'],$_POST['surname'], $_POST['age'], $_POST['fenn'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $fenn = $_POST['fenn'];

    $_SESSION['students'][] = [
        "name" => $name,
        "surname" => $surname,
        "age" => $age,
        "fenn" => $fenn
    ];

    if (isset($_GET['delete'])){
        $key = $_GET['delete'];
        if (isset($_SESSION['students'][$key])) {
            unset($_SESSION['students'][$key]);
            $_SESSION['students'] = array_values($_SESSION['students']);
        }
    }
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tusk_9</title>
</head>
<body>
<center><h3><i>Aşağıdakı assosiativ array-in bütün açar və dəyərlərini foreach ilə çap edin:</i></h3></center>
<center><h1>Tələbə Qeydiyyat</h1></center>

<div align="center" class="form">
    <form action="" method="POST">
        <label>Ad:
            <input type="text" name="name">
        </label>
        <label>Soyad:
            <input type="text" name="surname">
        </label>
        <label>Yaş:
            <input type="number" name="age">
        </label>
        <label>Oxuduğu Fənn:
            <input type="text" name="fenn">
        </label>
        <input type="submit" value="Qeydiyyat">
    </form>
</div>
<hr>
<br>
<?php if (!empty(isset($_SESSION['students']))) { $students = $_SESSION['students'];?>
    <table style="width: 70%" border="1" align="center" cellpadding="10">
        <thead>
        <tr>
            <th>ID</th>
            <th>Ad</th>
            <th>Soyad</th>
            <th>Yaş</th>
            <th>Oxuduğu fənn</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($students as $key => $value) { $key++?>
            <tr>

                <td><?= $key ?></td>
                <td><?= htmlspecialchars($value['name']) ?></td>
                <td><?= htmlspecialchars($value['surname']) ?></td>
                <td><?= htmlspecialchars($value['age']) ?></td>
                <td><?= htmlspecialchars($value['fenn']) ?></td>
                <td>
                    <div style="display: flex">
                        <form action="" method="GET">
                            <input type="hidden" name="delete" value="<?= $key ?>">
                            <input style="background-color: crimson ; margin-right: 50%" type="submit" value="delete" onclick="return confirm('Silmək istədiyinizə əminsiniz?')">
                        </form>
                        <form method="GET">
                            <input style="background-color: deepskyblue ; margin-left: 50%" type="submit" name="update" id="update" value="update">
                </td>
                </form>
                </div>
            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php } ?>
</body>
</html>

