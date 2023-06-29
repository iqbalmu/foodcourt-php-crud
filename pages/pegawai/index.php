<?php 
$page = isset($_GET['page']) ? $_GET['page'] : 'list';
switch ($page) {
  case 'input':
    include 'input.php';
    break;

  case 'list':
    include 'list.php';
    break;

  case 'edit':
    include 'edit.php';
    break;

  default:
    include 'list.php';
    break;
}
?>