<!DOCTYPE html> <!--tag pembuka html, dan menandakan bahwa file ini adalah html-->
<html>
<head>
    <title>Hapus Data Penduduk</title> <!--untuk menginput judul pada tab laman browser-->
</head>
<body>
    <h2>Hapus Data Penduduk</h2> <!--untuk menginput judul pada laman browser--->

    <?php // tag pembuka file php
    if (isset($_POST['hapus'])) { //memanggil file pada inputan
        $ktpHapus = $_POST['ktp'];

        //tulis file pada penduduk.txt, "r" untuk membaca file
        $file = fopen("penduduk.txt", "r");
        //temp untuk menyimpan nilai sementara, "w" untuk penulisan data dan menghapus semua isi data sebelumnya
        $tempFile = fopen("temp_penduduk.txt", "w");

        $dataDihapus = false;

        while (!feof($file)) {
            //feof digunakan untuk membaca file
            //fgets digunakan menampilkan text pada URL
            $nama = trim(fgets($file));
            $ttl = trim(fgets($file));
            $ktp = trim(fgets($file));
            $alamat = trim(fgets($file));

            if ($ktp == $ktpHapus) {
                $dataDihapus = true;
            } else {
                fputs($tempFile, "$nama\n");
                fputs($tempFile, "$ttl\n");
                fputs($tempFile, "$ktp\n");
                fputs($tempFile, "$alamat\n");
            }
        }

        fclose($file);
        fclose($tempFile);

        if ($dataDihapus) {
            unlink("penduduk.txt");
            rename("temp_penduduk.txt", "penduduk.txt");
            echo "Data berhasil dihapus.<br>";
            echo '<a href="menampilkan-keseluruhan.php">Kembali ke Form</a>';
        } else {
            echo "Data berhasil dihapus.<br>";
            echo '<a href="menampilkan-keseluruhan.php">Kembali ke Form</a>';
        }
    } else {
        $nama = $_GET['nama'];
        $ttl = $_GET['ttl'];
        $ktp = $_GET['ktp'];
        $alamat = $_GET['alamat'];

        echo "Nama: $nama<br>";
        echo "Tanggal Lahir: $ttl<br>";
        echo "No Kependudukan: $ktp<br>";
        echo "Alamat: $alamat<br>";
        
        echo "<form action='menghapus-datapenduduk.php' method='post'>";
        echo "<input type='hidden' name='ktp' value='$ktp'>";
        echo "<input type='submit' name='hapus' value='Hapus'>";
        echo "</form>";
    }
    ?>

</body>
</html>
