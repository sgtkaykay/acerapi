<?php
  $id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';
  
  include 'config.php';
  include 'class.acer.php';

  header('Content-Type: application/json');

  $acer = new Acer();
  $list=$acer->get_acerone($id);

  echo "{\"Acer\":";
  echo json_encode($list);
  echo "}";
?>
