<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    
</head>
<body>
<?php
require_once("conn.php");
$result=$conn->query('SELECT id_krzyz as id,tytul,imie,nazwisko FROM `BiblKrzyz`,BiblTytul,BiblAutor where BiblAutor.id_autor=BiblKrzyz.id_autor and BiblTytul.id_tytul=BiblKrzyz.id_tytul');
echo("<table border=1>");
echo("<th>id</th>");
echo("<th>tytul</th>");
echo("<th>imie</th>");
echo("<th>nazwisko</th>");
echo("<th>Usuń</th>");    
    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['id']."</td><td>".$row['tytul']."</td><td>".$row['imie']."</td><td>".$row['nazwisko']."</td>");
        echo("<td><form action=delete1.php method=POST>");
            echo("<input type='hidden' name='id' value=".$row['id_krzyz'].">");
            echo("<input type=submit value=X>");
            echo("</form></td>");
        echo("</tr>");
    }
echo("</table>");
?>    
</body>
</html>