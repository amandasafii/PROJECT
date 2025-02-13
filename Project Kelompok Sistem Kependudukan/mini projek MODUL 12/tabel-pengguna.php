<!DOCTYPE html> <!--tag pembuka html, dan menandakan bahwa file ini adalah html-->
<html>
    <head>
        <title>Database Penduduk</title> <!--untuk menginput judul pada tab laman browser--->
    </head>
    <body>
        <h2>Pembuatan Database Penduduk</h2><hr> <!--untuk menginput judul pada laman browser--->
    <!--action digunakan pemanggilan file berikutnya -->
    <form method="POST" action="outputdata.php">
    <p>
        <!--membuat button untuk menginputkan data dibawah-->
        <label>Nama :</label><br>
        <input type="teks" name="nama" placeholder=" " style="width : 150px"><br>
        <!--memberikan perintah input untuk dipanggil di output php yang berisi type,name,placeholder,style-->
        <label>Tanggal lahir :</label><br>
        <input type="teks" name="ttl" placeholder=" " style="width : 150px"><br>
        <!--memberikan perintah input untuk dipanggil di output php yang berisi type,name,placeholder,style-->
        <label>Nomor Kependudukan :</label><br>
        <input type="number" name="ktp" placeholder=" " style="width : 150px"><br>
        <!--memberikan perintah input untuk dipanggil di output php yang berisi type,name,placeholder,style-->
        <label>Alamat :</label><br>
        <textarea type="teks" name="alamat" placeholder=" " cols="50" rows="3"></textarea><br>
        <!--digunakan untuk membuat area text yang lebih besar dihalaman web sehingga memungkinkan pengguna untuk memasukkan text dengan jumlah yang banyak-->
        <input type="submit" name="buat" value="creat" placeholder=" " style="width : 60px" ><br>
        <!--memberikan perintah input untuk dipanggil di output php yang berisi type,name,placeholder,style-->
    </p>
    </form>
    </body>
</html> <!--tag penutup html-->
