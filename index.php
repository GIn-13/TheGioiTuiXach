<?php

session_start();

require './Models/Database.php';
require'./Controllers/BaseController.php';
require './Models/BaseModel.php';
error_reporting(E_ERROR | E_PARSE);

$controllerName =ucfirst((strtolower($_REQUEST['controller'])) . 'Controller');

if($_REQUEST['controller']==null)
	
	$controllerName='HomeController';


$actionName=$_REQUEST['action'] ?? 'index';

require "./Controllers/${controllerName}.php";

$controllerObject =new $controllerName;

$controllerObject->$actionName();