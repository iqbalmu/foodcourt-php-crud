<?php

include '../koneksi.php';

$aksi = !empty($_GET['aksi']) ? $_GET['aksi'] : '';

switch ($aksi) {
  case 'create':
    if (isset($_POST['submit'])) {
      $nama_menu = $_POST['nama_menu'];
      $kategori = $_POST['kategori'];
      $harga = $_POST['harga'];
      $stock = $_POST['stock'];
      $otlet = $_POST['otlet'];

      // echo $nama_menu;
      // echo $kategori;
      // echo $harga;
      // echo $stock;
      // echo $otlet;

      $sql = mysqli_query($db, "INSERT INTO menu(menu, kategori, harga, stock, id_otlet)
                               VALUES('$nama_menu','$kategori','$harga','$stock','$otlet')");

      if ($sql) {
        header('Location:../index.php?p=menu');
      } else {
        echo "Gagal Menginputkan Data Menu";
      }
    }
    break;

  case 'update':
    if (isset($_POST['submit'])) {
      $nama_menu = $_POST['nama_menu'];
      $kategori = $_POST['kategori'];
      $harga = $_POST['harga'];
      $stock = $_POST['stock'];
      $otlet = $_POST['otlet'];

      $sql = mysqli_query($db, "  UPDATE menu
                                  SET menu      = '$nama_menu',
                                      kategori  = '$kategori',
                                      harga     = '$harga',
                                      stock     = '$stock',
                                      id_otlet  = '$otlet'
                                  WHERE id_menu = '$_GET[id_edit]' ");

      if ($sql) {
        header('Location:../index.php?p=menu');
      } else {
        echo "Gagal mengupdate data";
      }
    }
    break;

  case 'delete':
    $hapus = mysqli_query($db, "DELETE FROM menu WHERE id_menu='$_GET[id_hapus]'");
    if ($hapus) {
      header('Location:../index.php?p=menu');
    } else {
      echo "Gagal menghapus data";
    }
    break;

  default:
    # code...
    break;
}

?>