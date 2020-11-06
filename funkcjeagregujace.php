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
<?php
            echo("<hr />");
            function robot_pracownicy($nr_zad, $f_sql){
                $conn = new mysqli("mysql-marcin-gaik.alwaysdata.net", "217182", "Marcin123", "marcin-gaik_php");
                $sql=$f_sql;
                $result=$conn->query($sql);
                echo("<h3>Funkcje Agregujące</h3>");
                    echo("<table border=1>");
                    echo("<h3>ZAD $nr_zad</h3>");
                    echo("<li>SQL: $sql");
                    echo("<th>id</th>");
                    echo("<th>imię</th>");
                    echo("<th>dział</th>");
                    echo("<th>zarobki</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                                echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
                            echo("</tr>");
                        }
                    echo("</table>");
                    echo("<hr />");
                    }
    robot_pracownicy(1,'SELECT * FROM pracownicy');

            function robot_avg($nr_zad, $f_sql){
                $conn = new mysqli("mysql-marcin-gaik.alwaysdata.net", "217182", "Marcin123", "marcin-gaik_php");
                $sql=$f_sql;
                $result=$conn->query($sql);
                    echo("<table border=1>");
                    echo("<h3>ZAD $nr_zad</h3>");
                    echo("<li>SQL: $sql");
                    echo("<th>dział</th>");
                    echo("<th>średnia</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                                echo("<td>".$row["dzial"]."</td><td>".$row["srednia"]."</td>");
                            echo("</tr>");
                            }
                    echo("</table>");
                    echo("<hr />");
                }
    robot_avg(2,'SELECT dzial,avg(zarobki) as srednia from pracownicy group by dzial');

            function robot_count($nr_zad, $f_sql){
                $conn = new mysqli("mysql-marcin-gaik.alwaysdata.net", "217182", "Marcin123", "marcin-gaik_php");
                $sql=$f_sql;
                $result=$conn->query($sql);
                    echo("<table border=1>");
                    echo("<h3>ZAD $nr_zad</h3>");
                    echo("<li>SQL: $sql");
                    echo("<th>dział</th>");
                    echo("<th>ilość</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                                echo("<td>".$row["dzial"]."</td><td>".$row["ilosc"]."</td>");
                            echo("</tr>");
                        }
                    echo("</table>");
                    echo("<hr />");
                    }
    robot_count(3,'SELECT dzial,count(imie) as ilosc from pracownicy group by dzial');

            function robot_sum($nr_zad, $f_sql){
                $conn = new mysqli("mysql-marcin-gaik.alwaysdata.net", "217182", "Marcin123", "marcin-gaik_php");
                $sql=$f_sql;
                $result=$conn->query($sql);
                    echo("<table border=1>");
                    echo("<h3>ZAD $nr_zad</h3>");
                    echo("<li>SQL: $sql");
                    echo("<th>dział</th>");
                    echo("<th>suma</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                                echo("<td>".$row["dzial"]."</td><td>".$row["suma"]."</td>");
                            echo("</tr>");
                            }
                    echo("</table>");
                    echo("<hr />");
                    }
    robot_sum(4,'SELECT dzial,sum(zarobki) as suma from pracownicy group by dzial');

            function robot_min($nr_zad, $f_sql){
                    $conn = new mysqli("mysql-marcin-gaik.alwaysdata.net", "217182", "Marcin123", "marcin-gaik_php");
                    $sql=$f_sql;
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<h3>ZAD $nr_zad</h3>");
                        echo("<li>SQL: $sql");
                        echo("<th>dział</th>");
                        echo("<th>minimalne</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row["dzial"]."</td><td>".$row["minimalne"]."</td>");
                                echo("</tr>");
                                }
                        echo("</table>");
                        echo("<hr />");
                        }
    robot_min(5,'SELECT dzial,min(zarobki) as minimalne from pracownicy group by dzial');
?>
