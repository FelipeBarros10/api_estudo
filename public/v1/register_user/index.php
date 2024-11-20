<?php


  require_once __DIR__ . '/../../../api_core/config.php';
  require_once __DIR__ . '/../../../api_core/data.php';
  require_once __DIR__ . '/../../../api_core/response.php';

  header('Content-Type: application/json');

  // Lê o corpo da requisição (o JSON enviado)
  $registerData = json_decode(file_get_contents('php://input'), true);

  print_r($registerData);

  if(isset($registerData['usuario']) && isset($registerData['senha']) && isset($registerData['email'])){
    $userName = $registerData['usuario'];
    $userPassword = $registerData['senha'];
    $userEmail = $registerData['email'];

    $hashedPassword = password_hash($userPassword, PASSWORD_BCRYPT);  
    
    mysqli_select_db($conn, $databaseName);

    $queryAll = "SELECT * FROM $userTable";

    $sqlQuery = mysqli_query($conn,$queryAll);

    $rowsBd = $sqlQuery->fetch_all();


    if($rowsBd === null){
      $commandToInsert = "INSERT INTO $userTable (nome, email, senha) VALUES ('$userName', '$userEmail', '$userPassword')";
      
      $sqlQuery = mysqli_query($conn, $commandToInsert);


    }
  
  }




  //  echo Response::json(200, 'API is running', $data);

?>