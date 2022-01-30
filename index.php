<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href='download.png'>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Routine</title>
</head>
<body>
    <nav class='navbar'>
        <h1 class='navbar-text'>Routine</h1>
        <img src="download.png">
    </nav>
    <div class='container' id='main'><a href='#' onclick='CreateTask()'>Criar Tarefa</a></div> 
    <script src='index.js'></script>
    <div class='container' id='tasks'>
    <?php 
    require_once('conection.php');
    $t = new Connection("localhost", 'routine', 'root' ,'', 'utf8'); 
    $data = $t->requestTask();
    foreach($data as $v) {
        ?>
        <div class='card'>
        <h2><?php echo $v['task']; ?></h2>
        <h3><?php echo $v['date'] ?></h3></div> 
        <?php 
    }
    ?>
</div>
</body>
</html>