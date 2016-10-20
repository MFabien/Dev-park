<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('UTC');

$dbconnexion = new PDO('mysql:host=localhost;dbname='.'dev_park', 'root', 'asqefxc&é', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));





?>