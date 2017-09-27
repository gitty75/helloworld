


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Die Tabelle, die aus der Datenbank kam</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css?v=<?=time();?>">  
</head>
<body>

<div  id="left" class="pure-u-1 pure-u-md-1-3" >
<h1>Todo-Liste</h1>
</div>
<div id="mid" class="pure-u-1 pure-u-md-1-3" >
     <?php 
    require_once("src/func.php");
    require_once("src/data.php");

    $rows = getDataToTable();
    renderTable($rows);

    ?>
</div>
<div  id="right" class="pure-u-1 pure-u-md-1-3" >
</div>
</body>
</html>