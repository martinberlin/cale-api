<?php

$queryType    = isset($_REQUEST['q']) ? trim($_REQUEST['q']) : null; 
$responseType = isset($_REQUEST['responseType']) ? trim($_REQUEST['responseType']) : 'text'; 
// Timezone to calculate right hour in your country
$timezone = isset($_REQUEST['timezone']) ? trim($_REQUEST['timezone']) : "Europe/Berlin"; 
date_default_timezone_set($timezone);
$responseJson = [];

switch($queryType) {
  case 'day':
	  $responseText = date('l');
	  $responseJson['day'] = $responseText;	  
	  break;

  case 'date':
          $format = isset($_REQUEST['f']) ? trim($_REQUEST['f']) : "Y-m-d";
          $responseText = date($format); 
          $responseJson['date'] = $responseText;    
	  break;

  case 'time':
          $format = isset($_REQUEST['f']) ? trim($_REQUEST['f']) : "H:i";
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
