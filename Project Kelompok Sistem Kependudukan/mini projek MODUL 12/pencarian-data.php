<!DOCTYPE html> <!--tag pembuka html, dan menandakan bahwa file ini adalah html-->
<html>
<head>
    <title>Pencarian Data Penduduk</title> <!--untuk menginput judul pada tab laman browser--->
</head>
<body>
    <h2>Pencarian Data Penduduk</h2> <!--untuk menginput judul pada laman browser-->
    <!--action digunakan pemanggilan file berikutnya -->
    <form action="pencarian-data.php" method="post">

        <!--membuat button untuk pencarian data-->
        <label for="cari">Cari Nama atau No Kependudukan (KTP):</label>
        <input type="text" id="cari" name="cari">
        <input type="submit" value="Cari">
    </form>

    <?php
    if (isset($_POST['cari'])) { //memanggil file pada input penncarian-data.php
        $cari = $_POST['cari'];
        $file = fopen("penduduk.txt", "r");

        if ($file) {
            echo "<table border='1'>";
            echo "<tr><th>No</th><th>Nama</th><th>Tanggal Lahir</th><th>No Kependudukan</th><th>Alamat</th><th>Aksi</th></tr>";

            $no = 1;

            while (!feof($file)) {
                //feof digunakan untuk membaca file
                //fgets digunakan menampilkan text pada URL
                $nama = fgets($file);
                $ttl = fgets($file);
                $ktp = fgets($file);
                $alamat = fgets($file);

                // Cek apakah Nama atau No Kependudukan cocok dengan kata kunci pencarian
                if (stripos($nama, $cari) !== false || stripos($ktp, $cari) !== false) {
                    //stripos digunakan untuk mengembalikan nilai integer sesuai dengan posisi sub-string
                    echo "<tr>";
                    echo "<td>$no</td>";
                    echo "<td>$nama</td>";
                    echo "<td>$ttl</td>";
                    echo "<td>$ktp</td>";
                    echo "<td>$alamat</td>";
                    echo "<td><a href='mengubah.php?nama=$nama&ttl=$ttl&ktp=$ktp&alamat=$alamat'>Edit</a> | <a href='menghapus-datapenduduk.php?nama=$nama&ttl=$ttl&ktp=$ktp&alamat=$alamat'>Hapus</a></td>";
                    echo "</tr>";
                    $no++;
                }
            }

            if ($no == 1) {
                echo "<tr><td colspan='6'>Tidak ada hasil yang ditemukan.</td></tr>";
            }

            echo "</table>";
            echo '<a href="database.html">Kembali ke Menu</a>';
            fclose($file);
        } else {
            echo "File penduduk.txt tidak ditemukan.";

        }
    }
    
    ?>

</body>
</html>
