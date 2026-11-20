<!DOCTYPE html>
<html>
<head>
    <title>Konversi Suhu</title>
</head>
<body>

    <h2>Menampilkan konversi Suhu</h2>

    <form method="POST">
        <label><h3>Masukkan Suhu Celcius yaa:</h3></label>
        <input type="number" max="100" name="celcius" placeholder="nilainya dsini wokk" required>
        
        <button type="submit">Konversi</button>
    </form>

    <br>

    <?php
$hasil = false;
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $celcius = $_POST["celcius"] ?? "";

    if ($celcius !== "" && is_numeric($celcius)) {

        $c = (float) $celcius;

        $reamur = (4 / 5) * $c;
        $fahrenheit = (9 / 5) * $c + 32;
        $kelvin = $c + 273;
        $hasil = true;

    } else {
        $error = "masukkan suhu Celcius yang VALIDD!!";
    }
}
?>

    <?php if ($hasil) { ?>

        <h3>Hasil Konversi:</h3>

        <p><strong>Celcius: <?= $c ?> °C</strong></p>
        <p><strong>Reamur: <?= $reamur ?> °R</strong></p>
        <p><strong>Fahrenheit: <?= $fahrenheit ?> °F</strong></p>
        <p><strong>Kelvin: <?= $kelvin ?> K</strong></p>
    <?php } ?>

</body>
</html>