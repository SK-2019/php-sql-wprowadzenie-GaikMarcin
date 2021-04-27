<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcin Gaik</title>
    <link rel="stylesheet" href="../assets/style1.css">
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
    <h1>Szkoła</h1>
</body>
</html>
<?php

require_once("../assets/conn.php");
$sql=('SELECT * from klasy');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>Klasa</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_klasy']."</td><td>".$row['klasa']."</td>");
                echo("</tr>");
            }
        echo("</table>");

        $sql=('SELECT * from nauczyciele');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>Nauczyciel</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_nauczyciela']."</td><td>".$row['nauczyciel']."</td>");
                echo("</tr>");
            }
        echo("</table>");
        
        $sql=('SELECT * from klasy,nauczyciele,klasa_nauczyciel where id_klasy=id__klasy and id_nauczyciela=id__nauczyciela');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>Klasa</th>");
        echo("<th>Nauczyciel</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['klasa']."</td><td>".$row['nauczyciel']."</td>");
                echo("</tr>");
            }
        echo("</table>");
?>