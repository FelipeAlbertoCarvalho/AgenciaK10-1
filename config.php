<?php
require_once 'environment.php';

define('BASE_URL', 'http://localhost/AgenciaK10/');
global $config;
$config = array();

if (ENVIRONMENT == 'development') {
  $config["dbname"] = "agencia";
  $config["dbhost"] = "localhost";
  $config["dbuser"] = "root";
  $config["dbpass"] = "";
} else {
  
}