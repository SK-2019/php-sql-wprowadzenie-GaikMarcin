<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style1.css">
<a href="https://github.com/SK-2019/php-sql-wprowadzenie-GaikMarcin"> GitHub </a>

   <div class="nav">
    <a class="nav_link" href="index.php">Strona Główna</a> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php

function petla(){
    echo("<li>test");
    for($i=1;$i<10;$i++){
        echo("<li>to jest w petli: ".$i);
    }
}
petla();
?>