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

        $sql=('SELECT * from mechanicy,samochody where id_mechanika=id_samochodu');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>mechanik</th>");
        echo("<th>rejestracja</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_mechanika']."</td><td>".$row['mechanik']."</td><td>".$row['rejestracja']."</td>");
                echo("</tr>");
            }
        echo("</table>");
?>