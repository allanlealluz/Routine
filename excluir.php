<?php 
$id = $_GET['id'];
require_once 'conection.php';
$t = new Connection("localhost", 'routine', 'root' ,'', 'utf8'); 
$t->delete($id);