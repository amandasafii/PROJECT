<?php
if (isset($_POST['buat'])){
$nama = $_POST['nama'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$ktp = $_POST['ktp'];

//membuat file 
if (!file_exists("penduduk.txt")){
    $file=fopen("penduduk.txt","w");
    echo "Berhasil membuat file baru";
}else{
    echo "File sudah ada";
}

//tulis file
$file=fopen("penduduk.txt","w");

fputs($file,"$nama\n");
fputs($file,"$ttl\n");
fputs($file,"$ktp\n");
fwrite($file,"$alamat");
fclose($file);




}

echo "Nama : $nama<br>";
echo "Tanggal Lahir  : $ttl <br>";
echo "No Kependudukan : $ktp <br>";
echo "Alamat : $alamat <br>";
?>