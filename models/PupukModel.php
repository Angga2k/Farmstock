<?php
    require_once("config/config.php"); // Update the path to connection.php

    class PupukModel {
        static function select(){
            global $conn;
            $sql = "SELECT * FROM pupuk";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->get_result();
            $rows = array();
            while($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;
        }

        static function create($nama_pupuk, $stok, $deskripsi, $image) {            
            global $conn;
            $query = "INSERT INTO pupuk (nama_pupuk, stok, deskripsi, image) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("siss", $nama_pupuk, $stok, $deskripsi, $image);
            $stmt->execute();
            $result = $stmt->affectedrows > 0 ? true : false;
            $stmt->close();
            return $result;
        }

        static function detail($id){
            global $conn;
            $query = "select * from pupuk WHERE id=".$id;
            $result = mysqli_query($conn, $query);
            if ($result->num_rows > 0) {
            while($a = $result->fetch_array()) {
                    $data[]=$a;
                }
            }
            else { 
                $data = [];
            }
            return $data;
        }

        static function update($id, $nama_pupuk, $stok, $deskripsi, $image) {
            global $conn;
            $query = "UPDATE pupuk SET nama_pupuk = ?, stok = ?, deskripsi = ?, image = ? WHERE id =".$id;
            $stmt = $conn->prepare($query);
            $stmt->bind_param("siss", $nama_pupuk, $stok, $deskripsi, $image);
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