<form method="POST" action="">
    <h2>Formulir Registrasi</h2>
            Nama:
            <input type="text" name="nama" required>
            <br></br>

            Username / Email:
            <input type="text" name="username" required>
            <br></br>

            Password:
            <input type="password" name="password" required>
            <br></br>

            Konfirmasi Password:
            <input type="password" name="konfirmasi_password" required>
            <br></br>

            <button type="submit" name="daftar">DAFTAR</button>
            <button type="reset">BATAL</button>
</form>

    <?php
    if (isset($_POST['daftar'])) {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi_password'];

        echo "<h3>Hasil Input Registrasi:</h3>";
        echo "Nama: " . htmlspecialchars($nama) . "<br>";
        echo "Username/Email: " . htmlspecialchars($username) . "<br>";

        if ($password === $konfirmasi) {
            echo "Status: <span style='color:green;'><b>Berhasil!</b> Password cocok.</span>";
         
        } else {
            echo "Status: <span style='color:red;'><b>Gagal!</b> Password dan Konfirmasi Password tidak sama.</span>";
        }
    }
    ?>