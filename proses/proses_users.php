<?php

include '../koneksi.php';

$aksi = !empty($_GET['aksi']) ? $_GET['aksi'] : '';

switch ($aksi) {
  case 'create':
    if (isset($_POST['submit'])) {
      $username = $_POST['username'];
      $password = md5($_POST['password']);
      $level = $_POST['level'];
      $date = Date('Y-m-d');

      $sql = mysqli_query($db, "INSERT INTO users(username, password, level, terdaftar)
                               VALUES('$username','$password','$level','$date')");

      if ($sql) {
        header('Location:../index.php?p=users');
      } else {
        echo "Gagal Menginputkan Data user";
      }
    }
    break;

  case 'update':
    if (isset($_POST['submit'])) {
      $username = $_POST['username'];
      $password = md5($_POST['password']);
      $level = $_POST['level'];

      $sql = mysqli_query($db, "  UPDATE users
                                  SET username = '$username',
                                      password = '$password',
                                      level    = '$level'
                                  WHERE username = '$_GET[username]' ");

      if ($sql) {
        header('Location:../index.php?p=users');
      } else {
        echo "Gagal mengupdate data";
      }
    }
    break;

  case 'delete':
    $hapus = mysqli_query($db, "DELETE FROM users WHERE username='$_GET[username]'");
    if ($hapus) {
      header('Location:../index.php?p=users');
    } else {
      echo "Gagal menghapus data";
    }
    break;

  default:
    # code...
    break;
}

?>