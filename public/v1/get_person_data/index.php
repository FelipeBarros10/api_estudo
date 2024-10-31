<?php


  require_once __DIR__ . '/../../../api_core/config.php';
  require_once __DIR__ . '/../../../api_core/response.php';

  $getAllData = require_once __DIR__ . '/../../../api_core/data.php';

  if(isset($_GET['id'])){
    $id = $_GET['id'];
  } else {
    echo Response::json(400, 'error', 'Missing id Parameter');
    exit;
  }

  if($id < 0 || $id > count($getAllData) - 1){
    echo Response::json(400, 'error', 'Person not found');
    exit;
  }

   
    echo Response::json(200, 'API is running', $getAllData[$id]);