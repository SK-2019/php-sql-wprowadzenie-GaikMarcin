<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<a href="https://github.com/SK-2019/php-sql-wprowadzenie-GaikMarcin"> GitHub </a>
<div class="nav">
    <a class="nav_link" href="pracownicy.php">Pracownicy - wstęp</a>
    <a class="nav_link" href="funkcjeagregujace.php">Funkcje Agregujące</a>
    <a class="nav_link" href="pracownicy_organizacja.php">Pracownicy i Organizacja</a>
    <a class="nav_link" href="data_czas.php">Data i Czas</a>
    <a class="nav_link" href="danedobazy.php">DaneDoBazy</a>
    <a class="nav_link" href="function.php">Function</a>
    <a class="nav_link" href="/ksiazki/biblioteka.php">Biblioteka</a>
</div>
</head>
<body>
   <h1>Marcin Gaik 2Ti</h1>
<?php
   require_once('conn.php');
  
    $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<h3>Tabela Pracowników</h3>");
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imię</th>");
        echo("<th>dział</th>");
        echo("<th>zarobki</th>");
        echo("<th>nazwa działu</th>");
        echo("<th>data urodzenia</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                echo("</tr>");
            }
        echo("</table>");
    echo("<hr />");
    $sql=('SELECT * from pracownicy,organizacja where dzial=id_org and imie like "%a"');
    $result=$conn->query($sql);
        echo("<h3>Tabela Kobiet</h3>");//nazwa nad tabelą
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imię</th>");
        echo("<th>dział</th>");
        echo("<th>zarobki</th>");
        echo("<th>nazwa działu</th>");
        echo("<th>data urodzenia</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
    $sql=('SELECT * from pracownicy,organizacja where dzial=id_org  order by imie asc');
    $result=$conn->query($sql); //mysql
        echo("<h3>Tabela Pracowników Posortowana Alfabetycznie</h3>");//nazwa nad tabelą
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imię</th>");
        echo("<th>dział</th>");
        echo("<th>zarobki</th>");
        echo("<th>nazwa działu</th>");
        echo("<th>data urodzenia</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
    $sql=('SELECT * from pracownicy,organizacja where dzial=id_org  order by zarobki asc');
    $result=$conn->query($sql); //mysql
        echo("<h3>Tabela Pracowników Posortowana Zarobkami Rosnąco</h3>");//nazwa nad tabelą
        echo("<table border=1>");
        echo("<li>SQL: $sql");
        echo("<th>id</th>");
        echo("<th>imię</th>");
        echo("<th>dział</th>");
        echo("<th>zarobki</th>");
        echo("<th>nazwa działu</th>");
        echo("<th>data urodzenia</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
function robot_sum($nr_zad, $f_sql){
    require_once('conn.php');
    $conn = new mysqli("mysql-marcin-gaik.alwaysdata.net", "217182", "Marcin123", "marcin-gaik_php");
    $sql=$f_sql;
    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<h3>ZAD $nr_zad</h3>");
        echo("<li>SQL: $sql");
        echo("<th>nazwa działu</th>");
        echo("<th>suma</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["suma"]."</td>");
                echo("</tr>");
                }
        echo("</table>");
        }
        robot_sum(1,'SELECT nazwa_dzial,sum(zarobki) as suma from pracownicy, organizacja where dzial=id_org group by dzial');
echo("<hr />");
?>
