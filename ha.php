<?php
$barang = [
    "Buku" => 250000,
    "Pulpen isi 12" => 30000, 
];

$total = array_sum($barang);

if ($total > 100000) {
    $diskon = $total * 10 / 100;
} else {
    $diskon = 0;
}

$bayar = $total - $diskon;

echo "===== STRUK BELANJA =====<br>";

foreach ($barang as $nama => $harga) {
    echo "$nama : Rp" .
    number_format($harga, 0, ',', '.') . "<br>";
}

echo "-------------------------<br>";

echo "Total: Rp" .                        
number_format($total, 0, ',', '.') . "<br>";

echo "Diskon: Rp" .
number_format($diskon, 0, ',', '.') . "<br>";

echo "Total Bayar: Rp" .
number_format($bayar, 0, ',', '.') . "<br>";

echo "__________RIFKI STORE________";

?>