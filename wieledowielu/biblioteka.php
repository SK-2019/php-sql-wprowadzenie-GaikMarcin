<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcin Gaik</title>
    <link rel="stylesheet" href="../assets/style1.css">
    <link rel="icon" href="https://www.streamscheme.com/wp-content/uploads/2020/04/pepega.png" type="image/icon type">
</head>
<body>
<div class="sidebar" id="mySidenav">
   <?php
    include("../assets/menu.php");
    ?>
</div>
<div class="nav">
       <?php
       include("../assets/header.php");
       ?>
</div>
    <h1>Biblioteka</h1>
</body>
</html>
<?php

require_once("../assets/conn.php");
$sql=('SELECT * from autor');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<li>SQL: $sql");
        echo("<table border=1>");
       echo("<th>id</th>");
       echo("<th>nazwisko</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id']."</td><td>".$row['nazwisko']."</td>");
                echo("</tr>");
            }
        echo("</table>");

        $sql=('SELECT * from tytul');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<li>SQL: $sql");
        echo("<table border=1>");
       echo("<th>id</th>");
       echo("<th>tytul</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id']."</td><td>".$row['tytul']."</td>");
                echo("</tr>");
            }
        echo("</table>");

$sql=('SELECT * from autor, tytul, autor_tytul where autor.id=autor_id and tytul.id=tytul_id');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>nazwisko</th>");
        echo("<th>tytul</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['nazwisko']."</td><td>".$row['tytul']."</td>");
                echo("</tr>");
            }
        echo("</table>");



?>