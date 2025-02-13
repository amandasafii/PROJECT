<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    table, th, td {
      border: 1px solid #000;
      padding: 10px;
      text-align: center;
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
  </style>
</head>
<body>
<div class="container">
  <table>
    <tr class="header">
      <th>No</th>
      <th>Nama</th>
      <th>NIM</th>
      <th>Email</th>
      <th>Nomor HP</th>
      <th>Semester</th>
      <th>IPK Terakhir</th>
      <th>Pilihan Beasiswa</th>
      <th>Berkas Syarat</th>
      <th>Status</th>
    </tr>       
    <?php 
      // Include koneksi database
      include('koneksi.php');
      $no = 1;
      $query = mysqli_query($connection, "SELECT * FROM tbl_beasiswa");
      while ($row = mysqli_fetch_array($query)) {
    ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $row['nama'] ?></td>
        <td><?php echo $row['nim'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['hp'] ?></td>
        <td><?php echo $row['semester'] ?></td>
        <td><?php echo number_format($row['ipk'],2) ?></td>
        <td><?php echo $row['pilihan'] ?></td>
        <td>
          <?php 
            // Cek ekstensi file
            $fileExt = strtolower(pathinfo($row['upload'], PATHINFO_EXTENSION));
            $filePath = 'berkas/' . $row['upload'];
            if (in_array($fileExt, ['jpg', 'jpeg', 'png', 'gif'])) {
              // Tampilkan gambar
              echo "<img src='$filePath' alt='Gambar' style='width: 100px; height: auto;'>";
            } else {
              // Tampilkan link untuk file selain gambar
              echo "<a href='$filePath'>Download</a>";
            }
          ?>
        </td>
        <td>

          <a href="?id=<?php echo $row['no'] ?>"  >Belum Verifikasi</a>
        </td>
      </tr>
    <?php
      }
    ?>
  </table>
</div>
</body>
</html>
