<?php
// get.php
if (isset($_GET['ad'])) {
    $ad = $_GET['ad'];
    echo "Salam, " . htmlspecialchars($ad) . "!";
}
?> 
<!-- form_get.html -->
<form method="get" action="get.php">
    Adınız: <input type="text" name="ad">
    <input type="submit" value="Gönder">
</form>