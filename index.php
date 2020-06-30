<?php

$queryType    = isset($_GET['q']) ? trim($_GET['q']) : null; 
$responseType = isset($_GET['responseType']) ? trim($_GET['responseType']) : 'text'; 
// Timezone to calculate right hour in your country
$timezone = isset($_GET['timezone']) ? trim($_GET['timezone']) : "Europe/Berlin"; 
date_default_timezone_set($timezone);
$responseJson = [];

switch($queryType) {
  case 'day':
	  $responseText = date('l');
	  $responseJson['day'] = $responseText;	  
	  break;

  case 'date':
          $format = isset($_GET['f']) ? trim($_GET['f']) : "Y-m-d";
          $responseText = date($format); 
          $responseJson['date'] = $responseText;    
	  break;

  case 'time':
          $format = isset($_GET['f']) ? trim($_GET['f']) : "H:i";
          $responseText = date($format); 
          $responseJson['time'] = $responseText;    
	  break;


  default: 
  $responseText = "q ".$queryType." is not defined";
  $responseJson['status'] = $responseText;
}

switch($responseType) {
  case 'json':
	  $json = json_encode($responseJson);
	  echo $json;
	  break;
  case 'text':
	  echo $responseText;
	  break;
  default:
	  echo "responseType not valid. Only accepted: text | json";
}
