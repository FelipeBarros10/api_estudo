<?php


  require_once __DIR__ . '/../../../api_core/config.php';
  require_once __DIR__ . '/../../../api_core/response.php';

  $getAllData = require_once __DIR__ . '/../../../api_core/data.php';

  $emailDomains = [];
  
  foreach($getAllData as $personEmail){
    if(filter_var($personEmail['email'], FILTER_VALIDATE_EMAIL)){
      $emailDomain = explode('@', $personEmail['email'])[1];
        if(!in_array($emailDomain, $emailDomains)){
          $emailDomains[] = $emailDomain;
        }
    }
  }
    echo Response::json(200, 'API is running', ['email_domains' => $emailDomains]);