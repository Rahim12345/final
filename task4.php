<?php
$gun = $_GET["gun"];  

switch ($gun) {
    case 1:
        echo "Bazar ertesi";
        break;
    case 2:
        echo "Çersenbe axşamı";
        break;
    case 3:
        echo "Çersenbe";
        break;
    case 4:
        echo "Cume axşamı";
        break;
    case 5:
        echo "Cume";
        break;
    case 6:
        echo "Senbe";
        break;
    case 7:
        echo "Bazar";
        break;
    default:
        echo "1–7 arası bir reqem daxil et";
}
?>