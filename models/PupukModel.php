<?php
    require_once("../../helper/config.php"); // Update the path to connection.php

    class PupukModel {
        static function select(){
            global $conn;
            $sql = "SELECT * FROM pupuk";
            $result = mysqli_query($conn, $sql);
            $rows = array();
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $rows[] = $row;
                }
            }
            return $rows;
        }

        static function create($nama_pupuk, $stok, $deskripsi) {            
            global $conn;
            $query = "INSERT INTO pupuk (nama_pupuk, stok, deskripsi) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("sis", $nama_pupuk, $stok, $deskripsi);
            $stmt->execute();
            $result = $stmt->affectedrows > 0 ? true : false;
            $stmt->close();
            return $result;
        }

        static function detail($id) {
            global $conn;
            $query = "SELECT * FROM pupuk WHERE id =".$id;
            $result = mysqli_query($conn, $query);
            if ($result->num_rows > 0) {
                $data = mysqli_fetch_object($result);
            }
            else { 
                $data = [];
            }
                return $data;
        }

        static function update($id, $nama_pupuk, $stok, $deskripsi) {
            global $conn;
            $query = "UPDATE pupuk SET nama_pupuk = ?, stok = ?, deskripsi = ? WHERE id =".$id;
            $stmt = $conn->prepare($query);
            $stmt->bind_param("sis", $nama_pupuk, $stok, $deskripsi);
            $stmt->execute();
            $result = $stmt->affectedrows > 0 ? true : false;
            $stmt->close();
            return $result;
        }

        static function delete($id) {
            global $conn;
            $query = "DELETE FROM pupuk WHERE id = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param('i', $id);
            $stmt->execute();
            $result = $stmt->affected_rows > 0 ? true : false;
            $stmt->close();
            return $result;
        }

    }
?>