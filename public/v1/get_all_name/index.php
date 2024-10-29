<?php


  require_once __DIR__ . '/../../../api_core/config.php';
  require_once __DIR__ . '/../../../api_core/response.php';

  $getAllData = require_once __DIR__ . '/../../../api_core/data.php';

  $names = [];

  foreach($getAllData as $item){
    $names[] = $item['name'];
  }

    echo Response::json(200, 'API is running', $names);