<?php //tag pembuka php

//memanggil file pada input validasi-form-login.php
if (isset($_POST['buat'])){
$nama = $_POST['nama'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$ktp = $_POST['ktp'];

//membuat file untuk dikerjakan
if (!file_exists("penduduk.txt")){
    $file=fopen("penduduk.txt","w");
    echo "Berhasil membuat file baru";
}else{
    echo "";
}



 if (!empty($nama) && !empty($ttl) && !empty($alamat) && !empty($ktp)) {
    //tulis data pada file penduduk.txt
$file=fopen("penduduk.txt","a");

//menuliskan file untuk diinputkan pada pengguna.txt dan \n untuk memberi jarak
fputs($file,"$nama\n");
fputs($file,"$ttl\n");
fputs($file,"$ktp\n");
fwrite($file,"$alamat\n");
fclose($file); //menutup file




//menampilkan pada layar browser
echo "Nama : $nama<br>";
echo "Tanggal Lahir  : $ttl <br>";
echo "No Kependudukan : $ktp <br>";
echo "Alamat : $alamat <br><br>";
echo '<a href="database.html">Kembali ke Menu</a>';
 }else {
        echo "Harap isi semua bidang formulir. <br><br>";
        echo '<a href="database.html">Kembali ke Form</a>';
    }
}
?>