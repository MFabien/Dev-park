<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('UTC');

define('NOM_DB', 'dev_park');
define('UTILISATEUR_DB', 'root');
define('MDP_DB', 'asqefxc&é');

$dbconnexion = new PDO('mysql:host=localhost;dbname='.NOM_DB, UTILISATEUR_DB, MDP_DB, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));





?>