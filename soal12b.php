<form method="POST" action="">
            Ussername / Email:
            <input type="text" name="ussername" required>
            <br></br>

            Password:
            <input type="password" name="password" required>
            <br></br>

            <button type="submit" name="login">LOGIN</button>
            <button type="reset">BATAL</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ussername = $_POST["ussername"];
    $password = $_POST["password"];

    echo "<div class='result'>";
    echo "<h3>Hasil Input Login</h3>";
    echo "ussername/Password: " . htmlspecialchars($ussername) . "<br>";
    echo "password: " . str_repeat('*', strlen($password)) . "<br>";
        echo "Status: <span style='color:blue;'><b>Data login berhasil dikirim ke server PHP.</b></span>";
        echo "</div>";
}
?>
