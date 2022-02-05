<?php
class Connection {
    private $pdo;
    function __construct($host,$dbname,$user,$password,$charset){
        try {
            $this->pdo = new PDO("mysql:host=".$host.";dbname=".$dbname.';charset='.$charset,$user,$password);  
        } catch (PDOException $ex){
            echo 'Erro PDO:'.$ex->getMessage(),$ex->getLine(),$ex->getFile();
        }  catch (Exception $ex){
            echo 'Erro:'.$ex->getMessage(),$ex->getLine(),$ex->getFile();
        }
      }
    function save($task, $date )
    {
        $cmd = $this->pdo->prepare('INSERT INTO task (task,date) values (:t,:d)');
        $cmd->bindValue(':t', $task);
        $cmd->bindValue(':d', $date);
        $cmd->execute();
    }
    function requestTask(){
        $cmd = $this->pdo->prepare('SELECT * FROM task');
        $cmd->execute();
        $data = $cmd->fetchAll();
        return $data;
    } 
    function delete($id){
        $cmd = $this->pdo->prepare('DELETE FROM task WHERE id = :id');
        $cmd->bindValue(':id',$id);
        $cmd->execute();       
    }
    function adicionarItemRotina($nome,$desc,$time){
        $cmd = $this->pdo->prepare('INSERT INTO routine (name,description,date) values (:n,:d,:t)');
        $cmd->bindValue(':n',$nome);
        $cmd->bindValue(':d',$desc);
        $cmd->bindValue(':t',$time);
        $cmd->execute();
    }
    function BuscarRotina(){
        $cmd = $this->pdo->prepare('SELECT * FROM routine ORDER BY date');
        $cmd->execute();
        $data = $cmd->fetchAll();
        return $data;
    }

    }