<?php
require_once 'PupukController.php';

$pupukController = new PupukController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pupuk = $_POST['nama_pupuk'];
    $stok = $_POST['stok'];
    $deskripsi = $_POST['deskripsi'];

    $result = $pupukController->insert($nama_pupuk, $stok, $deskripsi);
    
    if ($result) {
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit;
    } else {
        echo "Insert gagal!";
    }
}
