<?php


  require_once __DIR__ . '/../../../api_core/config.php';
  require_once __DIR__ . '/../../../api_core/response.php';

    echo Response::json(200, 'success', [
      'version' => API_VERSION,
      'status' => 'in maintenance'
    ]);