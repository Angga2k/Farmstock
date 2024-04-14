<?php
class Pupuk {
    private $id;
    private $nama_pupuk;
    private $stok;
    private $deskripsi;

    // Constructor
    public function __construct($nama_pupuk, $stok, $deskripsi) {
        $this->nama_pupuk = $nama_pupuk;
        $this->stok = $stok;
        $this->deskripsi = $deskripsi;
    }

    // Getter methods
    public function getName() {
        return $this->nama_pupuk;
    }

    public function getDescription() {
        return $this->deskripsi;
    }

    public function getStock() {
        return $this->stok;
    }
}
?>
