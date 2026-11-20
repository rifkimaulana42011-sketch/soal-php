<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];                                                       
    $umur = $_POST["umur"];
    $hobi = $_POST["hobi"];
    $tanggal_lahir = $_POST["tanggal_lahir"];

    if (empty($nama) || empty($kelas) || empty($umur) || empty($hobi) || empty($tanggal_lahir)) {
        echo "Nama, kelas, umur, hobi, dan tanggal lahir tidak boleh kosong!";
    } else {
        echo "Pendaftaran berhasil! <br>";
        echo "Nama: " . htmlspecialchars($nama) . "<br>";
        echo "Kelas: " . htmlspecialchars($kelas) . "<br>";
        echo "Umur: " . htmlspecialchars($umur) . "<br>";
        echo "Hobi: " . htmlspecialchars($hobi) . ",<br>";
        echo "Tanggal Lahir: " . htmlspecialchars($tanggal_lahir); 
    }
}
?>

<form method="POST">
    Nama:
    <input type="text" name="nama" required>
    <br><br>

    Kelas:
    <input type="text" name="kelas" required>
    <br><br>

    Umur:
    <input type="number" name="umur" required>
    <br><br>

    Hobi:
    <input type="text" name="hobi" required>
    <br><br>

    Tanggal Lahir
    <input type="date" name="tanggal lahir" required>
    <br></br>

    <button type="submit">Daftar</button>
</form>
