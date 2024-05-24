<?php
require_once "models/PupukModel.php";
require_once "function/function.php";

class PupukController{
  public function __construct()
  {
    global $url;
    session_start();
    if(!isset($_SESSION['is_auth']))
    {
      echo "<script>window.location.href = '".$url."/login'</script>";
      exit();
    }
  }

  public function index(){
    $data = PupukModel::select();
    loadView('pupuk', $data);
  }

  public static function create(){
    global $url;
    $image = $_FILES['image']['name'];
    $image_temp = "views/uploads/";
    $image_target = $image_temp . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $image_target);
    $data = PupukModel::create($_POST["nama_pupuk"],$_POST["stok"],$_POST["deskripsi"], $image);
    header("Location:".$url."/pupuk");
  }

  public static function detail(){
    $data = PupukModel::detail($_GET["id"]);
    return $data;
  }

    public function formupdate($id){
    $data = PupukModel::detail($id);
    loadView('editpupuk', $data);
  }

  public static function update($id=''){
    global $url;
    $image = $_FILES['image']['name'];
    $image_temp = "views/uploads/";
    $image_target = $image_temp . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $image_target);
    $data = PupukModel::update($_POST["id"],$_POST["nama_pupuk"],$_POST["stok"],$_POST["deskripsi"], $image);
    header("Location:".$url."/pupuk");
  }

  public static function delete($id){
      global $url;
      $data = PupukModel::delete($id);
      header("Location:".$url."/pupuk");
  }
}