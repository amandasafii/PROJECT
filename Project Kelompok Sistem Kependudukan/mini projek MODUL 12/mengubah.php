<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data Penduduk</title>
</head>
<body>
    <h2>Ubah Data Penduduk</h2>

    <?php
    if (isset($_POST['simpan'])) {
        $namaBaru = $_POST['nama'];
        $ttlBaru = $_POST['ttl'];
        $ktpBaru = $_POST['ktp'];
        $alamatBaru = $_POST['alamat'];

        $file = fopen("penduduk.txt", "r");
        $tempFile = fopen("temp_penduduk.txt", "w");

        $ubahData = false;

        while (!feof($file)) {
            $nama = trim(fgets($file));
            $ttl = trim(fgets($file));
            $ktp = trim(fgets($file));
            $alamat = trim(fgets($file));

            if ($ktp == $ktpBaru) {
                fputs($tempFile, "$namaBaru\n");
                fputs($tempFile, "$ttlBaru\n");
                fputs($tempFile, "$ktpBaru\n");
                fputs($tempFile, "$alamatBaru");
                $ubahData = true;
            } else {
                fputs($tempFile, "$nama\n");
                fputs($tempFile, "$ttl\n");
                fputs($tempFile, "$ktp\n");
                fputs($tempFile, "$alamat");
            }
        }

        fclose($file);
        fclose($tempFile);

        unlink("penduduk.txt");
        rename("temp_penduduk.txt", "penduduk.txt");

        if ($ubahData) {
            echo "Data berhasil disimpan.<br>";
            echo '<a href="menampilkan-keseluruhan.php">Kembali ke Form</a>';
        } else {
            echo "Data berhasil disimpan.<br>";
            echo '<a href="menampilkan-keseluruhan.php">Kembali ke Form</a>';
            
        }
    } else {
        $nama = $_GET['nama'];
        $ttl = $_GET['ttl'];
        $ktp = $_GET['ktp'];
        $alamat = $_GET['alamat'];

        echo "<form action='mengubah.php' method='post'>";
        echo "Nama: <input type='text' name='nama' value='$nama'><br>";
        echo "Tanggal Lahir: <input type='text' name='ttl' value='$ttl'><br>";
        echo "No Kependudukan: <input type='text' name='ktp' value='$ktp'><br>";
        echo "Alamat: <input type='text' name='alamat' value='$alamat'><br>";
        echo "<input type='submit' name='simpan' value='Simpan'>";
        echo "</form>";
    }
    ?>

</body>
</html>
