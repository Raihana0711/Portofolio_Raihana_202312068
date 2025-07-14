<?php 
$ukuran_baju = "M";

switch ($ukuran_baju) {
    case "S":
        echo "Ukuran kecil";
        break;
    case "M":
        echo "Ukuran sedang";
        break;
    case "L":
        echo "Ukuran besar";
        break;
    case "XL":
        echo "Ukuran ekstra besar";
        break;
    default:
        echo "Ukuran tidak diketahui";
}
?>
