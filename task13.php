<?php
$dogru_email = "test@example.com";
$dogru_sifre = "12345";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $sifre = $_POST['sifre'];
    
    if ($email == $dogru_email && $sifre == $dogru_sifre) {
        echo "Duzgun";
    } else {
        echo "Yanlıs";
    }
}
?>