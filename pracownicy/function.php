<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../style1.css">
<a href="https://github.com/SK-2019/php-sql-wprowadzenie-GaikMarcin"> GitHub </a>

<span onclick="openNav()">&#9776</span>
<div class="sidebar" id="mySidenav">
    <a class="nav_link" href="https://github.com/SK-2019/php-sql-wprowadzenie-GaikMarcin"> GitHub </a>
    <a class="nav_link" href="pracownicy/pracownicy.php">Pracownicy - wstęp</a>
    <a class="nav_link" href="pracownicy/funkcjeagregujace.php">Funkcje Agregujące</a>
    <a class="nav_link" href="pracownicy/pracownicy_organizacja.php">Pracownicy i Organizacja</a>
    <a class="nav_link" href="pracownicy/data_czas.php">Data i Czas</a>
    <a class="nav_link" href="pracownicy/danedobazy.php">DaneDoBazy</a>
    <a class="nav_link" href="pracownicy/function.php">Function</a>
    <a class="nav_link" href="ksiazki/biblioteka.php">Biblioteka</a>
</div>
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

function robot($sql){
    require_once("../conn.php");
    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<h3>SQL: $sql");
        echo("<th>id</th>");
        echo("<th>imię</th>");
        echo("<th>dział</th>");
        echo("<th>zarobki</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
        }
robot('SELECT * FROM pracownicy');
?>