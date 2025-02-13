<!DOCTYPE html>
<html>
    <head>
        <title>DATABASE</title>
    </head>
    <body>
        <form method="POST" action="validasi-form-login.php"></form>
        <p>
            <label > <h1>Menu</h1><hr><br> </label>
            <label >1.</label>
            <a href='input-database.php'>Database penduduk</a><br><br>
            <label >2.</label>
            <input type="button" value="MENAMBAH DATA PENDUDUK" onclick="location.href='input-menambahkan-data.php'"><br><br>
            <label >3.</label>
            <input type="button" value="MENGUBAH DATA PENDUDUK" onclick="location.href='input-mengubah-data.php'"><br><br>
            <label >4.</label>
            <input type="button" value="MENGHAPUS DATA PENDUDUK" onclick="location.href='input-mengurangi-data.php'"><br><br>
            <label >5.</label>
            <input type="button" value="PENCARIAN DATA PENDUDUK BERDASARKAN NAMA" onclick="location.href='t'"><br><br>
            <label >6.</label>
            <input type="button" value="MENAMPILKAN KESELURUHAN DATA PENDUDUK" onclick="location.href='t'"><br><br>
            

<?php
if (isset($_POST['proses'])){
$nama = $_POST['username'];
$pass = $_POST['password'];

if (!file_exists("pengguna.txt")){
    $file=fopen("pengguna.txt","a");
    echo "Berhasil membuat file baru";
}else{
    echo " ";
}

$file=fopen("pengguna.txt","a");


fputs($file,"$nama\n");
fwrite($file,"$pass");
fclose($file);

}
?>

        </p>
    </body>
</html>
