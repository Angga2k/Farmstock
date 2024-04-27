<?php
require "../../models/PupukModel.php";

if(isset($_GET['action']) and $_GET['action'] == 'create') {
  PupukController::create();
}
else if(isset($_GET['action']) and $_GET['action'] == 'update') {
  PupukController::update();
}
else if(isset($_GET['action']) and $_GET['action'] == 'delete') {
  PupukController::delete();
}

class PupukController{

  static function index(){
    $data = PupukModel::select();
    return $data;
  }

  public static function create(){
    global $url;
    $data = PupukModel::create($_POST["nama_pupuk"],$_POST["stok"],$_POST["deskripsi"]);
    header("Location:".$url."/pages/Pupuk/list-pupuk-page.php");
  }

  public static function detail(){
    $data = PupukModel::detail($_GET["id"]);
    return $data;
  }

  public static function update(){
    global $url;
    $data = PupukModel::update($_POST["id"],$_POST["nama_pupuk"],$_POST["stok"],$_POST["deskripsi"]);
    header("Location:".$url."pages/Pupuk/list-pupuk-page.php");
  }

  public static function delete(){
    global $url;
    $data = PupukModel::delete($_GET["id"]);
    header("Location:".$url."/pages/Pupuk/list-pupuk-page.php");
  }
}