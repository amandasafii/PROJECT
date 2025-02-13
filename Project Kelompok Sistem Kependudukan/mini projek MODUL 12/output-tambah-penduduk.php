<?php // tag pembuka file php
if (isset($_POST['buat'])){ //memanggil file pada input menghapus-datapenduduk.php
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $ktp = $_POST['nik'];

    //membuat file untuk dikerjakan
    //pemeriksa data sudah diisi apabila dikosongkan maka pengguna tidak dapat melanjutkan penginputan
    if (!empty($nama) && !empty($ttl) && !empty($alamat) && !empty($ktp)) {
        if (!file_exists("penduduk.txt")) {
            $file = fopen("penduduk.txt", "a");
            echo "Berhasil membuat file baru<br>";
        } else { 
            $file = fopen("penduduk.txt", "a");
      
        //tulis file pada penduduk.txt
        fwrite($file, "$nama\n");
        fwrite($file, "$ttl\n");
        fwrite($file, "$ktp\n");
        fwrite($file, "$alamat\n");
        fclose($file);
        }
        //menampilkan pada layar browser
        echo "Data berhasil disimpan!<br>";
        echo "Nama: $nama<br>";
        echo "Tanggal Lahir: $ttl<br>";
        echo "No Kependudukan: $ktp<br>";
        echo "Alamat: $alamat<br><br>";
        echo '<a href="database.html">Kembali ke Menu</a>';
    } else {
        echo "Harap isi semua bidang formulir. <br><br>";
        echo '<a href="menambah-data-penduduk.php">Kembali ke Form</a>';
    }
}
//tag penutup untuk file php
?>
