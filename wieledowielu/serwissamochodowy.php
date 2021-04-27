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
    <h1>Serwis Samochodowy</h1>
</body>
</html>
<?php

require_once("../assets/conn.php");
$sql=('SELECT * from samochody');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>rejestracja</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_samochodu']."</td><td>".$row['rejestracja']."</td>");
                echo("</tr>");
            }
        echo("</table>");

        $sql=('SELECT * from mechanicy');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>mechanik</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_mechanika']."</td><td>".$row['mechanik']."</td>");
                echo("</tr>");
            }
        echo("</table>");

        $sql=('SELECT * from mechanicy,samochody,mechanik_auto where id_mechanika=id__mechanika and id_samochodu=id__samochodu');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>mechanik</th>");
        echo("<th>rejestracja</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['mechanik']."</td><td>".$row['rejestracja']."</td>");
                echo("</tr>");
            }
        echo("</table>");
?>