<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style1.css">
<a href="https://github.com/SK-2019/php-sql-wprowadzenie-GaikMarcin"> GitHub </a>
<div class="nav">
    <a class="nav_link" href="index.php">Strona Główna</a>    
    <a class="nav_link" href="pracownicy.php">Pracownicy - wstęp</a>
</div>
</head>
<body>
<h1>Marcin Gaik 2Ti</h1>  
<h3>Funkcje Agregujące</h3>  
<?php
             require_once('conn.php');
            $sql=('SELECT sum(zarobki) as suma from pracownicy');
            $result=$conn->query($sql); //mysql
                echo("<h3>ZAD 1</h3>");//nazwa nad tabelą
                echo("<table border=1>");
                echo("<li>SQL: $sql");
                echo("<th>suma</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                            echo("<td>".$row['suma']."</td>");
                        echo("</tr>");
                    }
                echo("</table>");
        echo("<hr />");
        $sql=('SELECT nazwa_dzial,sum(zarobki) as suma from pracownicy,organizacja where imie like "%a" and dzial=id_org group by nazwa_dzial');
        $result=$conn->query($sql); //mysql
            echo("<h3>ZAD 2</h3>");//nazwa nad tabelą
            echo("<table border=1>");
            echo("<li>SQL: $sql");
            echo("<th>suma</th>");
            echo("<th>nazwa działu</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
                    echo("</tr>");
                }
            echo("</table>");
    echo("<hr />");
    $sql=('SELECT nazwa_dzial,sum(zarobki) as suma from pracownicy,organizacja where imie not like "%a" and dzial=id_org and dzial=2 or dzial=3 group by nazwa_dzial');
    $result=$conn->query($sql); //mysql
        echo("<h3>ZAD 3</h3>");//nazwa nad tabelą
        echo("<table border=1>");
        echo("<li>SQL: $sql");
        echo("<th>suma</th>");
        echo("<th>nazwa działu</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");

            
            
            
            robot_avg(4,'SELECT dzial,avg(zarobki) as srednia from pracownicy where dzial=4 group by dzial');
            robot_avg(5,'SELECT dzial,avg(zarobki) as srednia from pracownicy where imie not like "%a" and dzial between 1 and 2');
            $sql=('SELECT count(imie) as ilosc from pracownicy');
    $result=$conn->query($sql); //mysql
        echo("<h3>ZAD 6</h3>");//nazwa nad tabelą
        echo("<table border=1>");
        echo("<li>SQL: $sql");
        echo("<th>ilosc</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['ilosc']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
$sql=('SELECT count(imie)as ilosc from pracownicy where imie like "%a" and dzial=1 or dzial=3');
    $result=$conn->query($sql); //mysql
        echo("<h3>ZAD 7</h3>");//nazwa nad tabelą
        echo("<table border=1>");
        echo("<li>SQL: $sql");
        echo("<th>ilosc</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['ilosc']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
            robot_sum(8,'SELECT dzial,sum(zarobki)as suma from pracownicy group by dzial');
            robot_count(9,'SELECT dzial,count(imie) as ilosc from pracownicy group by dzial');
            robot_avg(10,'SELECT dzial,avg(zarobki) as srednia from pracownicy group by dzial');
?>
