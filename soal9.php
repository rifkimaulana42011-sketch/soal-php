<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $a = $_POST["a"];
    $b = $_POST["b"];
    $operator = $_POST["operator"];

    switch ($operator) {

        case "+":
            $hasil = $a + $b;
            break;

        case "-":
            $hasil = $a - $b;
            break;

        case "*":
            $hasil = $a * $b;
            break;

        case "/":
            if ($b == 0) {
                $hasil = "Tidak bisa dibagi nol!";
            } else {
                $hasil = $a / $b;
            }
            break;

        default:
            $hasil = "Operator tidak valid";
    }

    echo "Hasil: " . $hasil;
}
?>

<form method="POST">
    Angka pertama:
    <input type="number" name="a" step="any" required>
    <br><br>

    Angka kedua:
    <input type="number" name="b" step="any" required>
    <br><br>

    Operator:
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <br><br>

    <button type="submit">Hitung</button>
</form>