<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href='download.png'>
    <link rel='stylesheet' href='index.css'>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Routine</title>
</head>
<body>
    <nav class='navbar bg-dark'>
        <h1 class='navbar-text text-light'>Routine</h1>
        <img class='nav-icon' src="download-removebg-preview.png">
    </nav>
    <div class='container' id='main'><a href='#' onclick='CreateTask()'>Criar Tarefa</a></div> 
    <script src='index.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous"></script>
    <div class='container' id='tasks'>
    <?php 
    require_once('conection.php');
    $t = new Connection("localhost", 'routine', 'root' ,'', 'utf8'); 
    $data = $t->requestTask();
    foreach ($data as $v) {
        ?>
        <div class='card' id='<?php echo $v['id']; ?>'>
        <h2><?php echo $v['task']; ?></h2>
        <h3> <?php 
        $data_inicio = new DateTime();
        $data_inicio->format('Y-m-d H:i:s');
        $dia1 = $data_inicio->format('d');
        $mes1 = $data_inicio->format('m');
        $ano1 = $data_inicio->format('Y');
        $data_fim = new DateTime($v['date']);
        $mes2 = $data_fim->format('m');
        $dia2 = $data_fim->format('d');
        $ano2 = $data_fim->format('Y');
        if ($dia1 < $dia2 || $mes1 < $mes2 || $ano1 < $ano2 ){
            $dateInterval = $data_inicio->diff($data_fim);
            echo 'Faltam '.$dateInterval->days.' dias';
        } else {
            echo 'passou';
        }
        ?></h3> 
        <img id='<?php echo $v['id']; ?>' class='short-img' src='cancel.png' onclick='Deletar(this.id)'></div>
        <?php 
    }
    ?>
</div>
</body>
</html>