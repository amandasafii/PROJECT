<?php
if (isset($_POST['buat'])){
$nama = $_POST['nama'];
$ttl = $_POST['ttl'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];

//membuat file 
if (!file_exists("penduduk.txt")){
    $file=fopen("penduduk.txt","w");
    echo "Berhasil membuat file baru";
}else{
    echo "";
}

//tulis file
$file=fopen("penduduk.txt","a");

fputs($file,"$nama\n");
fputs($file,"$ttl\n");
fputs($file,"$nik\n");
fwrite($file,"$alamat");
fclose($file);



echo "Nama : $nama<br>";
echo "Tempat Tanggal Lahir  : $ttl<br>";
echo "Nomor Induk Kependudukan : $nik<br>";
echo "Alamat : $alamat<br><br><br>";
}
echo "<a href='masuk-txt.php'>Kembali ke form </a>";

?>