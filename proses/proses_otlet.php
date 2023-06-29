<?php

include '../koneksi.php';

$aksi = !empty($_GET['aksi']) ? $_GET['aksi'] : '';

switch ($aksi) {
  case 'create':
    if (isset($_POST['submit'])) {
      $nama_otl = $_POST['nama_otl'];
      $kontak_otl = $_POST['kontak_otl'];
      $pemilik = $_POST['pemilik'];

      $sql = mysqli_query($db, "INSERT INTO otlet(nama,id_pemilik,kontak) VALUES('$nama_otl','$pemilik','$kontak_otl');");

      if ($sql) {
        header('Location:../index.php?p=otlet');
        // echo '<script>alert("Record submitted successfully")</script>';
        // echo "<script>window.location.href='../index.php?p=otlet'</script>";
      } else {
        echo "<script>alert('Something went wrong. Please try again.');</script>";
        echo "<script>window.location.href='../index.php?p=otlet'</script>";
      }
    }
    break;

  case 'update':
    if (isset($_POST['submit'])) {
      $nama = $_POST['nama'];
      $pemilik = $_POST['pemilik'];
      $kontak = $_POST['kontak'];

      $sql = mysqli_query($db, "  UPDATE otlet
                                  SET nama    = '$nama',
                                      id_pemilik    = '$pemilik',
                                      kontak   = '$kontak'
                                  WHERE id_otlet = '$_GET[id_edit]' ");

      if ($sql) {
        header('Location:../index.php?p=otlet');
      } else {
        echo "Gagal mengupdate data";
      }
    }
    break;

  case 'delete':
    $hapus = mysqli_query($db, "DELETE FROM otlet WHERE id_otlet='$_GET[id_hapus]'");
    if ($hapus) {
      header('Location:../index.php?p=otlet');
    } else {
      echo "Gagal menghapus data";
    }
    break;

  default:
    # code...
    break;
}

?>