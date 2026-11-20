<?php
function luas($r) {
    return 22/7 * $r * $r;
}
function keliling($r) {
    return 2 * 22/7 * $r;
}

foreach ([7, 14] as $r) {
    echo "Jari-jari: $r <br>";
    echo "luas: " . luas($r) . " cm<sup>2</sup><br>";
    echo "keliling: " . keliling($r) . " cm<br><br>";
} 
?>