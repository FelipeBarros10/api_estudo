<?php


  require_once __DIR__ . '/../../../api_core/config.php';
  require_once __DIR__ . '/../../../api_core/response.php';

  $hostName = 'localhost';
  $userName = 'root';
  $password = '';
  $dataBase = 'hdcevents';
  $userTable = 'events';

  $con = mysqli_connect($hostName,$userName,$password );

  mysqli_select_db($con, $dataBase);

  $queryAll = "SELECT * FROM $userTable";

  $result = mysqli_query($con,$queryAll);

  if($result){
    foreach($result as $item){
      $newArray = [];

      $newArray = $item;
    }
	}

  $getAllData = require_once __DIR__ . '/../../../api_core/data.php';

    echo Response::json(200, 'API is running', $newArray);