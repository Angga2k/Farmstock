<?php 

require_once 'config/config.php';

class AuthModel{

  static function getdata($email)
  {
    global $conn;
    $query = "select * from user where email='".$email."'";
    $result = mysqli_query($conn, $query);
    $data = array();
    if ($result->num_rows > 0) {
      while($a = $result->fetch_array()) {
        $data[]=$a;
      }
    }
    return $data;
  }

  static function register($email, $username, $password)
  {
    global $conn;
    $query = "INSERT INTO user (email, username, password) values (?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sss", htmlspecialchars($email), htmlspecialchars($username), htmlspecialchars($password));
    $stmt->execute();
    $result = $stmt->affected_rows > 0 ? true : false;
    $stmt->close();
    return $result;
  }
}