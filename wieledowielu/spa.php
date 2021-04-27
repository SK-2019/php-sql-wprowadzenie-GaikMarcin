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
    <h1>SPA</h1>
</body>
</html>
<?php

require_once("../assets/conn.php");
$sql=('SELECT * from klienci');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>klienci</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_klienta']."</td><td>".$row['klient']."</td>");
                echo("</tr>");
            }
        echo("</table>");$sql=('SELECT * from fryzjerzy');
        $result=$conn->query($sql);
            echo("<hr />");
            echo("<li>SQL: $sql");
            echo("<table border=1>");
            echo("<th>id</th>");
            echo("<th>fryzjer</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['id_fryzjera']."</td><td>".$row['fryzjer']."</td>");
                    echo("</tr>");
                }
            echo("</table>");

            $sql=('SELECT * from fryzjerzy,klienci,fryzjer_klient where id_klienta=id__klienta and id_fryzjera=id__fryzjera');
            $result=$conn->query($sql);
                echo("<hr />");
                echo("<li>SQL: $sql");
                echo("<table border=1>");
                echo("<th>klient</th>");
                echo("<th>fryzjer</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                            echo("<td>".$row['klient']."</td><td>".$row['fryzjer']."</td>");
                        echo("</tr>");
                    }
                echo("</table>");
?>