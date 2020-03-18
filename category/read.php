<?php
  include 'config.php';
  include 'class.acer.php';

  header('Content-Type: application/json');

  $acer = new Acer();
  $list=$acer->get_category();

  echo "{\"Acer\":";
  echo json_encode($list);
  echo "}";
?>
