<?php 
$value = $_GET['value'];
$date = $_GET['date'];
require_once('conection.php');
$t = new Connection("localhost", 'routine', 'root' ,'', 'utf8'); 
$t->save($value ,$date);
