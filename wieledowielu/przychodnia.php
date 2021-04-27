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
    <h1>Przychodnia</h1>
</body>
</html>
<?php

require_once("../assets/conn.php");
$sql=('SELECT * from pacjenci');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>pacjenci</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_pacjenta']."</td><td>".$row['pacjent']."</td>");
                echo("</tr>");
            }
        echo("</table>");
        
        $sql=('SELECT * from lekarze');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>lekarze</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_lekarza']."</td><td>".$row['lekarz']."</td>");
                echo("</tr>");
            }
        echo("</table>");

        
        $sql=('SELECT * from lekarze,pacjenci,pacjent_lekarz where id_lekarza=id__lekarza and id_pacjenta=id__pacjenta');
        $result=$conn->query($sql);
            echo("<hr />");
            echo("<li>SQL: $sql");
            echo("<table border=1>");
            echo("<th>pacjent</th>");
            echo("<th>lekarz</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['pacjent']."</td><td>".$row['lekarz']."</td>");
                    echo("</tr>");
                }
            echo("</table>");

        
?>