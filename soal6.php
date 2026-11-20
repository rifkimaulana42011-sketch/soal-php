<?php
$nilai = [
    "Gibrano" => 90,
    "Joko" => 90,
    "Prabono" => 70,
    "Rocky pp" => 80,
    "Erik th" => 78
];

echo "DAFTAR NILAI SISWA <br></br>";
echo "<table border='1' celpadding='8'>";
echo "<tr><th>nama</th><th>nilai</th></tr>";

foreach($nilai as $nama => $angka) {
    echo "<tr><td>$nama</td><td>$angka</td></tr>";
}

echo "</table>";
$rata = array_sum($nilai) / count($nilai); 
echo "Rata-rata nilai: $rata <br>";
echo "Nilai tertinggi: " . max($nilai) . "<br>";
echo "Nilai terendah: " . min($nilai) . "<br>";
?>