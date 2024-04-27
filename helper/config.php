
<?php 

$url = 'http://localhost/Farmstock/';
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'farmstok';

try {
  $conn = new mysqli($host, $username, $password, $database);
} catch (\Throwable $e) {
  echo "error";
}
