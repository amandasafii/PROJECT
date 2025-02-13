<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Pendaftaran Beasiswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function setIPK() {
      var nim = document.getElementById("nim").value;
      var ipkField = document.getElementById("ipk");
      var pilihanField = document.getElementById("pilihan");
      var uploadField = document.getElementById("upload");
      var submitButton = document.getElementById("submitBtn");

      var ipk = "";

      // Set IPK based on NIM
      if (nim === "229") {
        ipk = "";
      } else if (nim === "230") {
        ipk = "3";
      } else if (nim === "231") {
        ipk = "3.1";
      } else if (nim === "232") {
        ipk = "3.2";
      } else if (nim === "233") {
        ipk = "3.3";
      } else if (nim === "234") {
        ipk = "3.4";
      } else if (nim === "235") {
        ipk = "3.5";
      } else if (nim === "236") {
        ipk = "3.6";
      } else if (nim === "237") {
        ipk = "3.7";
      } else if (nim === "238") {
        ipk = "3.8";
      } else if (nim === "239") {
        ipk = "3.9";
      } else if (nim === "240") {
        ipk = "4";
      }
 
      ipkField.value = ipk;
 
      // Enable or disable fields based on IPK 
      if (ipk && parseFloat(ipk) >= 3) {
        pilihanField.disabled = false;
        uploadField.disabled = false;
        submitButton.disabled = false;
        pilihanField.focus(); // Move focus to pilihan beasiswa
      } else {
        pilihanField.disabled = true;
        uploadField.disabled = true;
        submitButton.disabled = true;
      }
    }

    function validateEmail() {
      var emailField = document.getElementById("email");
      var submitButton = document.getElementById("submitBtn");
      var email = emailField.value;
      var emailPattern = /^[^\s@]+@[^\s@]+\.(com|co|ac|id)$/;

      if (emailPattern.test(email)) {
        submitButton.disabled = false;
      } else {
        submitButton.disabled = true;
      }
    }
  </script>
</head>
<body>

<div class="container mt-3">
  <h2>Sistem Pendaftaran Beasiswa</h2>
  <p>UNIVERSITAS ABC</p>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="jenis.php">Jenis Beasiswa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="daftar.php">Daftar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="view.php">View</a>
    </li>
  </ul>
  <br>
  <h2 style="background-color: beige"><center>Hallo Para Pemburu Beasiswa!</center></h2>
</div>

<form action="simpan-daftar.php" method="POST" enctype="multipart/form-data">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-header">
            INPUT DATA PENDAFTARAN
          </div>
          <div class="card-body">

            <div class="form-group">
              <label>Masukkan Nama</label>
              <input type="text" name="nama" id="nama" placeholder="Masukkan Nama" class="form-control">
            </div>

            <div class="form-group">
              <label>NIM</label>
              <select class="form-select" name="nim" id="nim" onchange="setIPK()">
                <option value="229">229</option>
                <option value="230">230</option>
                <option value="231">231</option>
                <option value="232">232</option>
                <option value="233">233</option>
                <option value="234">234</option>
                <option value="235">235</option>
                <option value="236">236</option>
                <option value="237">237</option>
                <option value="238">238</option>
                <option value="239">239</option>
                <option value="240">240</option>
              </select>
              <p id="msg" name="msg"></p>
            </div>

            <div class="form-group">
              <label for="email">Masukkan Email</label>
              <input type="email" id="email" name="email" class="form-control" oninput="validateEmail()">
            </div>

            <div class="form-group">
              <label for="hp">Nomor HP</label>
              <input type="number" id="hp" name="hp" class="form-control">
            </div>

            <div class="form-group">
              <label>Semester</label>
              <select class="form-select" name="semester" id="semester">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
              </select>
            </div>

            <div class="form-group">
              <label>IPK Terakhir</label>
              <input type="number" id="ipk" name="ipk" class="form-control" readonly>
              <input type="hidden" id="ipkHidden" name="ipk">
            </div>

            <div class="form-group">
              <label>PILIHAN BEASISWA</label>
              <select class="form-select" name="pilihan" id="pilihan" disabled>
                <option value="akademik">Akademik</option>
                <option value="nonakademik">Non-Akademik</option>
              </select>
            </div>

            <div class="form-group">
              <label for="upload">Upload Berkas Syarat</label>
              <input type="file" id="upload" name="upload" class="form-control" disabled>
            </div>

            <button type="submit" id="submitBtn" class="btn btn-success" disabled>Daftar</button>
            <button type="reset" class="btn btn-warning">Batal</button>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="link mt-3">
    <a href="index.php">Kembali Ke Menu</a>
  </div>
</form>

</body>
</html>
