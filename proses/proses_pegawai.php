<?php

include '../koneksi.php';

$aksi = !empty($_GET['aksi']) ? $_GET['aksi'] : '';

switch ($aksi) {
  case 'create':
    if (isset($_POST['submit'])) {
      $nama = $_POST['nama'];
      $umur = $_POST['umur'];
      $jk = $_POST['jk'];
      $alamat = $_POST['alamat'];
      $kontak = $_POST['kontak'];

      $sql = mysqli_query($db, "INSERT INTO pegawai(nama, umur, jk, no_hp, alamat)
                               VALUES('$nama','$umur','$jk','$kontak','$alamat')");

      if ($sql) {
        header('Location:../index.php?p=pegawai');
      } else {
        echo "Gagal Menginputkan Data user";
      }
    }
    break;

  case 'update':
    if (isset($_POST['submit'])) {
      $nama = $_POST['nama'];
      $umur = $_POST['umur'];
      $jk = $_POST['jk'];
      $alamat = $_POST['alamat'];
      $kontak = $_POST['kontak'];

      $sql = mysqli_query($db, "  UPDATE pegawai
                                  SET nama    = '$nama',
                                      umur    = '$umur',
                                      jk      = '$jk',
                                      no_hp   = '$kontak',
                                      alamat  = '$alamat'
                                  WHERE id_pegawai = '$_GET[id_edit]' ");

      if ($sql) {
        header('Location:../index.php?p=pegawai');
      } else {
        echo "Gagal mengupdate data";
      }
    }
    break;

  case 'delete':
    $hapus = mysqli_query($db, "DELETE FROM pegawai WHERE id_pegawai='$_GET[id_hapus]'");
    if ($hapus) {
      header('Location:../index.php?p=pegawai');
    } else {
      echo "Gagal menghapus data";
    }
    break;

  default:
    # code...
    break;
}

?>