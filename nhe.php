<?php 
require_once('conection.php');
$t = new Connection("localhost", 'routine', 'root' ,'', 'utf8'); 
if($_GET['routine'] != ''){
    echo 'caiu na muralha bleyblayd estraçalha';
    $nome = $_GET['value'];
    $time = $_GET['date'];
    $desc = $_GET['text'];
    $t->adicionarItemRotina($nome,$desc,$time);
}else{
    $value = $_GET['value'];
    $date = $_GET['date'];
    $t->save($value ,$date);
}
