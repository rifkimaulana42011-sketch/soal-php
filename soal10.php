<form method="POST">
    Barang:
    <input type="text" name="barang" required>
    <br><br>

    Harga:
    <input type="number" name="harga" required>
    <br><br>

    Jumlah:
    <input type="number" name="jumlah" required>
    <br><br>

    <button type="submit">Hitung</button>
 </form>   
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $barang = $_POST["barang"];
    $harga = $_POST["harga"];
    $jumlah = $_POST["jumlah"];
    $total = $harga * $jumlah;
    $diskon = 0;
    if ($total > 100000) {
        $diskon = $total * 10 / 100;
    }
    $bayar = $total - $diskon;
    }
    
    if (empty($barang) || empty($harga) || empty($jumlah)) {
        echo "Barang, harga, dan jumlah tidak boleh kosong!";
    } else {
        echo "===== STRUK BELANJA =====<br>";
        echo "Barang: " . htmlspecialchars($barang) . "<br>";
        echo "Harga: Rp" . number_format($harga, 0, ',', '.') . "<br>";
        echo "Jumlah: " . htmlspecialchars($jumlah) . "<br>";
        echo "Total: Rp" . number_format($total, 0, ',', '.') . "<br>";
        echo "Diskon: Rp" . number_format($diskon, 0, ',', '.') . "<br>";
        echo "Total Bayar: Rp" . number_format($bayar, 0, ',', '.') . "<br>";
        echo "__________RIFKI STORE________";
    }
?>