<?php
if (isset($_POST['create'])){
$nama = $_POST['nama'];
$ttl = $_POST['ttl'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];


    if(!file_exists("penduduk.txt")){
    $file=fopen("penduduk.txt","w");
    echo "Berhasil Login";
}else{
    echo " ";
}

$file=fopen("penduduk.txt","a");

fputs($file,"$username, $password\n");
fclose($file);
    
}
?>