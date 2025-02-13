<!DOCTYPE html> <!--tag pembuka html, dan menandakan bahwa file ini adalah html-->
<html> <!--untuk menginput judul pada tab laman browser--->
<head>
    <title>Data Penduduk</title> <!--untuk menginput judul pada tab laman browser--->
</head>
<body>
    <h2>Data Penduduk</h2> <!--untuk menginput judul pada laman browser--->

    <?php //tag pembuka file php
    // Membaca isi file penduduk.txt
    $file = fopen("penduduk.txt", "r");

    if ($file) {
        echo "<table border='1'>";
        echo "<tr><th>No</th><th>Nama</th><th>Tanggal Lahir</th><th>No Kependudukan</th><th>Alamat</th><th>Aksi</th></tr>";

        $no = 1; // Variabel hitung (counter)
        
        while (!feof($file)) {
            //feof digunakan untuk membaca file
            //fgets digunakan menampilkan text pada URL
            $nama = fgets($file);
            $ttl = fgets($file);
            $ktp = fgets($file);
            $alamat = fgets($file);

            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>$nama</td>";
            echo "<td>$ttl</td>";
            echo "<td>$ktp</td>";
            echo "<td>$alamat</td>";
            echo "<td><a href='mengubah.php?nama=$nama&ttl=$ttl&ktp=$ktp&alamat=$alamat'>Edit</a> | <a href='menghapus-datapenduduk.php?nama=$nama&ttl=$ttl&ktp=$ktp&alamat=$alamat'>Hapus</a></td>";
            echo "</tr>";

            $no++; // Increment counter
        }

        echo "</table>";
        fclose($file);
    } else {
        echo "File penduduk.txt tidak ditemukan.";
    }
    ?>
    <a href="database.html">Kembali ke Menu</a>

</body>
</html>
