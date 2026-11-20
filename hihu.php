<?php
function hitunglingkaran($r) {
    $pi = ($r % 7 == 0) ? 22 / 7 : 3.14;
    $luas = $pi * $r * $r;
    $keliling = 2 * $pi * $r;
    return [$luas, $keliling];
}

foreach ([7, 14] as $r) {
    [$luas, $keliling] = hitunglingkaran($r);
    
echo "jari-jari (r): $r <br>";
echo "Luas Lingkaran: $luas <br>";
echo "Keliling Lingkaran: $keliling <br>";
}
    
?>