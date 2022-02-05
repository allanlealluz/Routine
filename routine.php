<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routine</title>
    <link rel='icon' href='download.png'>
    <link rel='stylesheet' href='index.css'>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Routine</title>
</head>
<body onload='timer()'>
    <nav class='navbar bg-dark'>
        <h1 class='navbar-text text-light'>Routine</h1>
        <img class='nav-icon' src="download-removebg-preview.png">
    </nav>
    <div class="container" id='main'>
        <span class="span" id='timer'></span>
        <a href='#' onclick='CreateRoutine()'>Adicionar afazer na rotina</a>
    </div>
    <script src='routine.js'></script>
    <div class="container">
    <?php 
    require_once('conection.php');
    $t = new Connection("localhost", 'routine', 'root' ,'', 'utf8'); 
    $data = $t->BuscarRotina();
    foreach($data as $v){
        ?><div class="card" name='n'>
 <h2><?php echo $v['name'] ?></h2>
 <h2><?php echo $v['description'] ?></h2>
 <h3 id='date'><?php echo $v['date'] ?></h3>
        </div>  <?php
    }
    ?>
    
</div>
</body>
</html>