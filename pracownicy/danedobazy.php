<!DOCTYPE html>
<link rel="stylesheet" href="../style1.css">
<a href="https://github.com/SK-2019/php-sql-wprowadzenie-GaikMarcin"> GitHub </a>

   <div class="nav">
    <a class="nav_link" href="/index.php">Strona Główna</a> 
    <form action="strona.php" method="POST">
    <h3>Dodaj :</h3>
   <input type="text" name="imie" placeholder="Imie">
   <br><input type="text" name="dzial" placeholder="Dzial">
   <br><input type="text" name="zarobki" placeholder="Zarobki">
   <br><input type="date" name="data_">
   <input type="submit" value="Dodaj">
   </form> 
</div>
</html>

<h3>Usuń :</h3>
       
<form action="delete.php" method="POST">
       <input type="text" name="id" placeholder="ID"></br>
   <input type="submit" value="usun">
</form>
<?php
require_once("../conn.php");

echo("<h3>Wszyscy Pracownicy</h3>");
$result=$conn->query("Select * from pracownicy");
echo("<table border=1>");
    echo("<th>Id</th>");
    echo("<th>Imie</th>");
    echo("<th>Dzial</th>");
    echo("<th>Zarobki</th>");
    echo("<th>Data_urodzenia</th>");
    echo("<th class=usuń>Usuń</th>");
        while($row=$result->fetch_assoc()){
            echo("<tr>");
            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
            echo("<td><form action=delete.php method=POST>");
            echo("<input type='hidden' name='id' value=".$row['id_pracownicy'].">");
            echo("<input type=submit value=X>");
            echo("</form></td>");
            echo("</tr>");}
echo("</table>");
?>

