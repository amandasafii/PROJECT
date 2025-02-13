<?php
// Include koneksi database
include('koneksi.php');

// Get data dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$hp = $_POST['hp'];
$semester = $_POST['semester'];
$ipk = $_POST['ipk'];
$pilihan = $_POST['pilihan'];
$nama_berkas = $_FILES['upload']['name'];
$tmp_berkas = $_FILES['upload']['tmp_name'];
$direktori_berkas = 'berkas/';

// Ekstensi yang diperbolehkan
$ekstensi_boleh = array('pdf', 'jpg', 'zip');
$ekstensi_berkas = strtolower(pathinfo($nama_berkas, PATHINFO_EXTENSION));

// Cek apakah file yang diupload memiliki ekstensi yang diperbolehkan
if (in_array($ekstensi_berkas, $ekstensi_boleh)) {
    // Pindahkan file yang diupload ke folder 'berkas'
    if (move_uploaded_file($tmp_berkas, $direktori_berkas . $nama_berkas)) {
        // Query insert data ke dalam database
        $query = "INSERT INTO tbl_beasiswa (nama, nim, email, hp, semester, ipk, pilihan, upload)
                  VALUES ('$nama', '$nim', '$email', '$hp', '$semester', '$ipk', '$pilihan', '$nama_berkas')";

        // Kondisi pengecekan apakah data berhasil dimasukkan atau tidak
        if ($connection->query($query)) {
            // Redirect ke halaman view.php
            header("Location: view.php");
        } else {
            echo "Data Gagal Disimpan!";
        }
    } else {
        echo "Gagal mengunggah berkas!";
    }
} else {
    echo "Ekstensi file tidak diperbolehkan! Hanya file dengan ekstensi " . implode(', ', $ekstensi_boleh) . " yang diperbolehkan.";
}

?>
