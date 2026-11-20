<h2>Menghitung Jari-Jari Lingkaran</h2>

<form method="POST">
    Masukkan Luas Lingkaran:
    <input type="number" name="luas" required>
    <br><br>

    <label>Pilih Nilai Phi (π):</label><br>
        <select name="phi" required>
            <option value="22/7">22/7</option>
            <option value="3.14">3,14</option>
        </select><br><br>

    <input type="submit" name="hitung" value="HITUNG">
</form>

<?php
if (isset($_POST['hitung'])) {
    $luas = $_POST['luas'];
    $pilihan_phi = $_POST['phi'];

    if ($pilihan_phi == "22/7") {
        $phi = 22/7;
    } else {
        $phi = 3.14;
    }

    $jari = sqrt($luas / $phi);

    echo "Luas Lingkaran = $luas <br>";
    echo "Jari-jari Lingkaran = " . number_format($jari, 2);
}
?>
