<DOCTYPE html> <!--tag pembuka html, dan menandakan bahwa file ini adalah html-->
    <head>
        <title>olah data administrasi</title> <!--untuk menginput judul pada tab laman browser--->
        </head>
    <style>
</style>
    <body>
        <h1><b>Menambah Data Penduduk</b></h1><hr><!--untuk menginput judul pada laman browser--->
       <!--action digunakan pemanggilan file berikutnya -->
        <form method="POST" action='output-tambah-penduduk.php' >

       <p>
       <!--membuat button untuk menginputkan data dibawah-->
       <label> Nama :</label><br>
       <input type="text" name="nama" placeholder="Masukan Nama"style="width : 400px "><br>
       <!--memberikan perintah input untuk dipanggil di output php yang berisi type,name,placeholder,style-->
       <label> Tanggal Lahir:</label><br>
       <input type="date" name="ttl" placeholder="Tempat Tanggal Lahir" style="width : 400px"><br>
       <!--memberikan perintah input untuk dipanggil di output php yang berisi type,name,placeholder,style-->
       <label> Nomor Induk Kependudukan:</label><br>
       <input type="number" name="nik" placeholder="Nomor Induk Kependudukan" style="width : 400px"><br>
       <!--memberikan perintah input untuk dipanggil di output php yang berisi type,name,placeholder,style-->
       <label> Alamat:</label><br>
       <textarea type="text" name="alamat" placeholder="Alamat" rows = "7" cols = "55"></textarea><br>
       <!--digunakan untuk membuat area text yang lebih besar dihalaman web sehingga memungkinkan pengguna untuk memasukkan text dengan jumlah yang banyak-->
       <label>  </label><br>
       <button type="submit" name="buat" value="Create" style="width : 100px">Submit</button>
       <!--memberikan perintah input untuk dipanggil di output php yang berisi type,name,placeholder,style-->
</form>
</body>
</html><!--tag penutup html-->