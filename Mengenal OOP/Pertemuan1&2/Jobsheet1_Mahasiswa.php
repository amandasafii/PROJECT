<?php
class Mahasiswa{

    public $nama;
    public $nim;
    public $jurusan;

    public function tampilkanData() {
        echo "Nama:  $this->nama .;
        echo "NIM: " . $this->nim .;
        echo "Jurusan: " . $this->jurusan .;
    }
}




?>