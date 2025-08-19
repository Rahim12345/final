<?php
if (isset($_POST['number'])) {
    $number = $_POST['number'];

    if ($number > 0) {
        echo "Müsbət";
    } elseif ($number < 0) {
        echo "Mənfi";
    } else {
        echo "Sıfır";
    }
}
?>

<form method="post" action="">
    Ədəd daxil edin: <input type="number" name="number">
    <button type="submit">Yoxla</button>
</form>