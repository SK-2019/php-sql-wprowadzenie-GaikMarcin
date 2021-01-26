<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style1.css">
    <div class="nav">
    <a class="nav_link" href="../index.php">Strona Główna</a> 
    <form action="insert.php" method="POST">
    <h3>Dodaj :</h3>
   <br><input type="text" name="tytul"placeholder="tytul">
   <br><input type="text" name="imie" placeholder="imie">
   <br><input type="text" name="nazwisko" placeholder="nazwisko"><br>
   <input type="submit" value="Dodaj">
   </form> 
</head>
<body>
<?php
require_once("../conn.php");
$result=$conn->query('SELECT id_krzyz as id,tytul,imie,nazwisko FROM `BiblKrzyz`,BiblTytul,BiblAutor where BiblAutor.id_autor=BiblKrzyz.id_autor and BiblTytul.id_tytul=BiblKrzyz.id_tytul');
echo("<table border=1>");
echo("<th>id</th>");
echo("<th>tytul</th>");
echo("<th>imie</th>");
echo("<th>nazwisko</th>");   
    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['id']."</td><td>".$row['tytul']."</td><td>".$row['imie']."</td><td>".$row['nazwisko']."</td>");
        echo("</tr>");
    }
echo("</table>");
?>    
</body>
</html>