<?php

// Class Mahasiswa 
class Mahasiswa {
    private $nama;
    private $nim;
    private $jurusan;

    // Constructor untuk menginisialisasi atribut Mahasiswa
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data Mahasiswa
    public function tampilData() {
        return "Nama mahasiswa: $this->nama <br>
        NIM: $this->nim <br>
        Jurusan: $this->jurusan.<br><hr>";
    }

    // Metode getter untuk atribut nama
    public function getNama() {
        return $this->nama;
    }

    // Metode setter untuk mengupdate atribut nama
    public function setNama($namaBaru) {
        $this->nama = $namaBaru;
        return "Nama Mahasiswa telah diubah menjadi <b>$this->nama</b>";
    }

    // Metode getter untuk atribut NIM
    public function getNim() {
        return $this->nim;
    }

    // Metode setter untuk mengupdate atribut NIM
    public function setNim($nimBaru) {
        $this->nim = $nimBaru;
        return "NIM Mahasiswa telah diubah menjadi <b>$this->nim</b>";
    }

    // Metode getter untuk atribut Jurusan
    public function getJurusan() {
        return $this->jurusan;
    }

    // Metode setter untuk mengupdate atribut Jurusan
    public function setJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
        return "Jurusan Mahasiswa telah diubah menjadi <b>$this->jurusan</b>";
    }
}

// Class Pengguna sebagai Parent untuk Inheritance
class Pengguna {
    protected $nama;

    // Constructor untuk menginisialisasi atribut nama
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Getter untuk atribut nama
    public function getNama() {
        return $this->nama;
    }
}

// Class Dosen yang mewarisi class Pengguna (Inheritance)
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

    // Metode untuk menampilkan data Dosen
    public function tampilDataDosen() {
        return "Nama Dosen: $this->nama <br>
        Mata Kuliah: $this->mataKuliah.<br><hr>";
    }
}

// Class Polymorphism dasar
class Pengguna_Poly {
    public function aksesFitur() {
        return "Akses Fitur";
    }
}

// Class Mahasiswa_Poly mewarisi Pengguna_Poly dan menerapkan Polymorphism
class Mahasiswa_Poly extends Pengguna_Poly {
    private $nama = "Mahasiswa";
    private $nim = "123456";
    private $jurusan = "Teknik";

    public function aksesFitur() {
        return "Mahasiswa $this->nama dengan nim $this->nim dan jurusan $this->jurusan dapat mengakses web SIA.<br>";
    }
}

// Class Dosen_Poly mewarisi Pengguna_Poly dan menerapkan Polymorphism
class Dosen_Poly extends Pengguna_Poly {
    private $nama = "Dosen";
    private $mataKuliah = "Pemrograman";

    public function aksesFitur() {
        return "Dosen $this->nama mengampu mata kuliah $this->mataKuliah dapat mengakses dan mengedit web SIA.<br>";
    }
}

// Abstraction dengan Class Abstract
abstract class Pengguna_Abstract {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    abstract public function aksesFitur(); // Abstract method untuk Polymorphism
}

// Class Mahasiswa2 menerapkan Abstraction
class Mahasiswa2 extends Pengguna_Abstract {
    public function aksesFitur() {
        return $this->nama . ", Sedang mengakses fitur mahasiswa: Mengikuti Study-Jams.<br>";
    }
}

// Class Dosen2 menerapkan Abstraction
class Dosen2 extends Pengguna_Abstract {
    public function aksesFitur() {
        return $this->nama . ", Sedang mengakses fitur Dosen: Mengajar Study-Jams.<br>";
    }
}

// Instansiasi 
echo "<h2>Membuat Class dan Object</h2>";
$mahasiswa1 = new Mahasiswa("Celline", "12345678", "Rekayasa Mesin dan Pertanian");
echo $mahasiswa1->tampilData();

// Mengubah nama mahasiswa (Encapsulation)
echo "<h2>Encapsulation</h2>";
$mahasiswa1->setNama("Lily");
echo $mahasiswa1->tampilData();

// Mengubah NIM mahasiswa (Encapsulation)
$mahasiswa1->setNim("098754");
echo $mahasiswa1->tampilData();

// Mengubah jurusan mahasiswa (Encapsulation)
$mahasiswa1->setJurusan("Mesin");
echo $mahasiswa1->tampilData();
echo "<br>";

// instansiasi Inheritance
echo "<h2>Inheritance</h2>";
$dosen1 = new Dosen("Cella", "Matematika Diskrit");
echo $dosen1->tampilDataDosen();
echo "<hr>";

// Instansiasi Polymorphism
echo "<h2>Polymorphism</h2>";
$mahasiswaPoly = new Mahasiswa_Poly();
echo $mahasiswaPoly->aksesFitur();

$dosenPoly = new Dosen_Poly();
echo $dosenPoly->aksesFitur();

// Instansiasi Abstraction
echo "<h2>Abstraction</h2>";
$mahasiswa2 = new Mahasiswa2("Beyonce");
echo $mahasiswa2->aksesFitur();

$dosen2 = new Dosen2("Feast");
echo $dosen2->aksesFitur();

?>
