<?php

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    setcookie("username", $username, time() + 5);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

echo '<center style="margin: 10%">
<h2><pre>';

if (isset($_COOKIE['username'])){
    $username = htmlspecialchars($_COOKIE['username']);
    echo "<h2>Salam xoş gəlmisiniz, " . $username . " 👋</h2>";
}else
    echo "<h2>Salam xoş gəlmisiniz, Hörmətli" . " 👋</h2>";

echo '</pre></h2></center>';