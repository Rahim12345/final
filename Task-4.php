<?php
if (isset($_POST['day'])) {
    $day = $_POST['day'];

    switch ($day) {
        case 1:
            echo "Bazar ertəsi";
            break;
        case 2:
            echo "Çərşənbə axşamı";
            break;
        case 3:
            echo "Çərşənbə";
            break;
        case 4:
            echo "Cümə axşamı";
            break;
        case 5:
            echo "Cümə";
            break;
        case 6:
            echo "Şənbə";
            break;
        case 7:
            echo "Bazar";
            break;
        default:
            echo "Yanlış dəyər daxil etdiniz. 1-7 arasında olmalıdır.";
    }
}
?>

<!-- HTML form -->
<form method="post" action="">
    Həftənin gün nömrəsini daxil edin (1-7): 
    <input type="number" name="day" min="1" max="7">
    <button type="submit">Göstər</button>
</form>
