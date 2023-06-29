<?php

include '../koneksi.php';

$aksi = !empty($_GET['aksi']) ? $_GET['aksi'] : '';

switch ($aksi) {
  case 'create':
    if (isset($_POST['submit'])) {
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $alamat = $_POST['alamat'];

      $sql = mysqli_query($db, "INSERT INTO pemilik(name, email, address, phone)
                               VALUES('$nama','$email','$alamat','$phone')");

      if ($sql) {
        header('Location:../index.php?p=pemilik');
      } else {
        echo "Gagal Menginputkan Data";
      }
    }
    break;

  case 'update':
    if (isset($_POST['submit'])) {
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $alamat = $_POST['alamat'];

      $sql = mysqli_query($db, "  UPDATE pemilik
                                  SET name    = '$nama',
                                      email   = '$email',
                                      phone   = '$phone',
                                      address = '$alamat'                                      
                                  WHERE id_pemilik = '$_GET[id_edit]' ");

      if ($sql) {
        header('Location:../index.php?p=pemilik');
      } else {
        echo "Gagal mengupdate data";
      }
    }
    break;

  case 'delete':
    $hapus = mysqli_query($db, "DELETE FROM pemilik WHERE id_pemilik='$_GET[id_hapus]'");
    if ($hapus) {
      header('Location:../index.php?p=pemilik');
    } else {
      echo "Gagal menghapus data";
    }
    break;

  default:
    # code...
    break;
}

?>