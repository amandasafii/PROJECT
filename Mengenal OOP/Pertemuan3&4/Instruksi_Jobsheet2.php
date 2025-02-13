<?php

// Kelas abstrak Pengguna
abstract class Pengguna {
    protected $nama;

    // Constructor untuk menginisialisasi atribut nama
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Getter untuk atribut nama
    public function getNama() {
        return $this->nama;
    }

    // Metode abstrak aksesFitur(), harus diimplementasikan oleh kelas turunan
    public abstract function aksesFitur();
}

// Kelas Mahasiswa, mewarisi dari kelas Pengguna
class Mahasiswa extends Pengguna {
    private $nim;
    private $jurusan;
    
    // Constructor untuk menginisialisasi atribut Mahasiswa
    public function __construct($nama, $nim, $jurusan) {
        parent::__construct($nama); // Memanggil constructor dari kelas induk (Pengguna)
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data Mahasiswa
    public function tampilData() {
        return "Nama mahasiswa: $this->nama <br>
        NIM: $this->nim <br>
        Jurusan: $this->jurusan.<br>";
    }

    // Metode getter untuk atribut nama
    public function getNama() {
        return $this->nama;
    }

    // Metode setter untuk atribut nama
    public function setNama($namaBaru) {
        $this->nama = $namaBaru;
        return "<br>Nama Mahasiswa telah diubah menjadi $this->nama.<br>";
    }

    // Metode getter untuk atribut NIM
    public function getNim() {
        return $this->nim;
    }

    // Metode setter untuk atribut NIM
    public function setNim($nimBaru) {
        $this->nim = $nimBaru;
        return "<br>NIM Mahasiswa telah diubah menjadi $this->nim.<br>";
    }

    // Metode getter untuk atribut Jurusan
    public function getJurusan() {
        return $this->jurusan;
    }

    // Metode setter untuk atribut Jurusan
    public function setJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
        return "<br>Jurusan Mahasiswa telah diubah menjadi $this->jurusan.<br>";
    }

    // Implementasi dari metode aksesFitur(), menunjukkan fitur akses Mahasiswa
    public function aksesFitur() {
        return "Nama mahasiswa: $this->nama <br>
        NIM: $this->nim<br>
        Jurusan: $this->jurusan<br>
        Dapat mengakses Jadwal Perkuliahan<br>";
    }
}

// Instansiasi objek Mahasiswa dan menampilkan hasilnya
$mahasiswa1 = new Mahasiswa("Celline", "12345678", "Rekayasa Mesin dan Pertanian");
echo "<br>";
echo $mahasiswa1->tampilData();

// Mengubah nama mahasiswa dan menampilkan hasil perubahan
echo $mahasiswa1->setNama("Lily"); // Menampilkan hasil perubahan nama
echo "<br>";
echo $mahasiswa1->tampilData(); // Menampilkan data terbaru

// Mengubah NIM mahasiswa dan menampilkan hasil perubahan
echo $mahasiswa1->setNim("098754"); // Menampilkan hasil perubahan NIM
echo "<br>";
echo $mahasiswa1->tampilData(); // Menampilkan data terbaru

// Mengubah jurusan mahasiswa dan menampilkan hasil perubahan
echo $mahasiswa1->setJurusan("Mesin"); // Menampilkan hasil perubahan jurusan
echo "<br>";
echo $mahasiswa1->tampilData(); // Menampilkan data terbaru
echo "<br>";

// Kelas Dosen, mewarisi dari Pengguna
class Dosen extends Pengguna {
    private $mataKuliah;

    // Constructor untuk menginisialisasi atribut Dosen
    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama); // Memanggil constructor dari kelas Pengguna
        $this->mataKuliah = $mataKuliah;
    }

    // Getter untuk atribut Mata Kuliah
    public function getMataKuliah() {
        return $this->mataKuliah;
    }

    // Metode untuk menampilkan data dosen
    public function tampilDataDosen() {
        return "Nama Dosen: $this->nama <br>
        Mata Kuliah: $this->mataKuliah.<br>";
    }

    // Implementasi metode aksesFitur() untuk dosen
    public function aksesFitur() {
        return "Nama Dosen: $this->nama<br>
        Mengampu mata kuliah: $this->mataKuliah<br>
        Dapat mengelola dan melihat jadwal perkuliahan<br>";
    }
}

// Instansiasi objek Dosen dan menampilkan hasilnya
$dosen1 = new Dosen("Cella", "Matematika Diskrit");
echo "<hr>";
echo "<br>";
echo $dosen1->tampilDataDosen();

echo "<hr>";

// Instansiasi objek Mahasiswa kedua dan menampilkan akses fiturnya
$mahasiswa2 = new Mahasiswa("Beyonce", "0987544", "MIPA");
echo $mahasiswa2->aksesFitur();
echo "<br>";

// Instansiasi objek Dosen kedua dan menampilkan akses fiturnya
$dosen2 = new Dosen("Feast", "Ilmu Ukur Tanah");
echo $dosen2->aksesFitur();

?>
