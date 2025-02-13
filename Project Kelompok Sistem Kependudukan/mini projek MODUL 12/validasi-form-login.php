<!DOCTYPE html> <!--tag pembuka html, dan menandakan bahwa file ini adalah html-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM LOGIN</title>
</head>
<body>
    <h2>FORM LOGIN</h2><hr> <!-- perintah untuk membuat judul pada laman browser-->

    <?php //tag pembuka file php
    if (isset($_POST['proses'])) { //pemanggilan untuk konten yang akan dikerjakan
        $nama = $_POST['nama'];
        $pass = $_POST['pass'];

        // Buka file pengguna.txt untuk penulisan
        $file = fopen("pengguna.txt", "a"); // Mode "a" digunakan untuk menambahkan data ke file yang sudah ada
        // menginput username dan password pada file pengguna.txt
        if ($file) {
            fwrite($file, "Username: $nama\n"); //untuk menuliskan username dan \n untuk memberi jarak
            fwrite($file, "Password: $pass\n"); //untuk menuliskan password dan \n untuk memberi jarak
            fwrite($file, "=======================\n"); // Penanda antara entri

            fclose($file); //untuk menutup file penginputan username dan password
            echo "Data login berhasil disimpan."; //pemberitahuan yang ditampilkan pada laman browser bahwa login berhasil disimpan
            // Redirect ke database.html setelah data disimpan
            echo "<script>window.location.href = 'database.html';</script>";
        } else {
            echo "Gagal membuka file pengguna.txt."; /*apabila username atau password kurang dari 8 huruf maka pengguna tidak dapat login
                                                        maka pada lama browser akan ditampilkan login gagal*/
                                                    
        }
    }
    ?>
<!--memanggil file berikutnya untuk ditampilkan pada laman browser-->
    <form method="POST" action="validasi-form-login.php">
        <p>
            <label> Username :</label><br>
            <input required minlength="8" type="text" name="nama" placeholder="Masukkan Username" style="width: 150px"><br>
            <!--inputan untuk username disetting untuk mengandung minimal 8 huruf, dan bertype text-->
            <label> Password :</label><br>
            <input required minlength="8" type="password" name="pass" placeholder="Masukkan Password" style="width: 150px" ><br>
            <!--inputan untuk password disetting untuk mengandung minimal 8 huruf dan huruf tidak ditampilkan karena password bersifat rahasia, dan bertype text-->
            <input type="submit" name="proses" value="Login">
            <!--inputan untuk submit-->
</body>
</html>
<!--penutup untuk tag htmml-->

<!--Kelompok Cantik kelas TI 1C
1. Amanda Dwi Safitri (230102050)
2. Andin Ardelina Saputri (230102052)
3. Galih Fitria Fijar Rofiqoh (230302060)
4. Windy Anggita Putri (230102072)-->