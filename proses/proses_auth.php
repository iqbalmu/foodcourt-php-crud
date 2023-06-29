<?php

include '../koneksi.php';
$aksi = !empty($_GET['a']) ? $_GET['a'] : '';

switch ($aksi) {
  case 'signin':
    if (isset($_POST['submit'])) {
      $username = $_POST['username'];
      $password = md5($_POST['password']);
      $login = mysqli_query($db, "SELECT * FROM users WHERE username='$username' AND password='$password'");
      $hasil_login = mysqli_num_rows($login);
      $data_login = mysqli_fetch_array($login);

      if ($hasil_login > 0) {
        session_start();
        $_SESSION['username'] = $data_login['username'];
        $_SESSION['level'] = $data_login['level'];

        header('Location:../index.php');
      } else {
        echo "invalid";
      }
    }
    break;

  case 'signup':
    if (isset($_POST['submit'])) {

      $username = $_POST['username'];
      $password = md5($_POST['password']);
      $confirm_password = md5($_POST['confirm_password']);
      $date = Date('Y-m-d');

      if ($password !== $confirm_password) {

        header("Location: ../sign-up.php?msg=ncp");

      } else {

        $select = mysqli_query($db, "SELECT username FROM users WHERE username = '$username'");
        if (mysqli_num_rows($select)) {
          header("Location: ../sign-up.php?msg=exist");
        } else {
          $sql = mysqli_query($db, "INSERT INTO users(username, password, level, terdaftar)
                VALUES('$username','$password','user','$date')");

          if ($sql) {
            header("Location: ../sign-in.php?msg=succes");
          } else {
            header("Location: ../sign-in.php?msg=error");
          }
        }

      }
    }
    break;

  case 'signout':
    session_start();
    session_destroy();
    header("Location: ../sign-in.php");
    break;

  default:
    # code...
    break;
}

?>