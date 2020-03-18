<?php
  $search = (isset($_GET['search']) && $_GET['search'] != '') ? $_GET['search'] : '';

  include 'config.php';
  include 'class.acer.php';

  header('Content-Type: application/json');

  $acer = new Acer();
  $list=$acer->search_acer($search);

  echo "{\"Acer\":";
  echo json_encode($list);
  echo "}";
