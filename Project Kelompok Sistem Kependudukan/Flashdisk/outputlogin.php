<?php
if (isset($_POST['proses'])){
$nama = $_POST['nama'];
$pass = $_POST['pass'];

if (!file_exists("pengguna.txt")){
    $file=fopen("pengguna.txt","w");
    echo "Berhasil membuat file baru";
}else{
    echo "File sudah ada";
}

$file=fopen("pengguna.txt","w");


fputs($file,"$nama\n");
fwrite($file,"$pass");
fclose($file);






}




?>