<?php
    require_once("../../model/pupuk.php"); // Update the path to pupuk.php
    require_once("../../helper/connection.php"); // Update the path to connection.php

    class PupukController {
        public function select(){
            global $conn;
            $sql = "SELECT * FROM pupuk";
            $result = $conn->query($sql);
            $rows = array();
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $rows[] = $row;
                }
            }
            return $rows;
        }

        public function insert($nama_pupuk, $stok, $deskripsi) {
            $pupuk = new Pupuk($nama_pupuk, $stok , $deskripsi);
            
            global $conn;
            $stmt = $conn->prepare("INSERT INTO pupuk (nama_pupuk, stok, deskripsi) VALUES (?, ?, ?)");
            $stmt->bind_param("sis", $nama_pupuk, $stok, $deskripsi);
            $nama_pupuk = $pupuk->getName();
            $stok = $pupuk->getStock();
            $deskripsi = $pupuk->getDescription();
            $stmt->execute();
            
            return "Pupuk inserted successfully!";
        }
    }
?>