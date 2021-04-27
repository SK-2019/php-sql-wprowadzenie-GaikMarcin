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
        echo("<th>pacjenci</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_lekarza']."</td><td>".$row['lekarz']."</td>");
                echo("</tr>");
            }
        echo("</table>");
?>