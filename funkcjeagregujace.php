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
        $sql=('SELECT sum(zarobki) as suma from pracownicy where imie like "%a"');
        $result=$conn->query($sql); //mysql
            echo("<h3>ZAD 2</h3>");//nazwa nad tabelą
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
            function robot_pracownicy($nr_zad, $f_sql){
                $conn = new mysqli("mysql-marcin-gaik.alwaysdata.net", "217182", "Marcin123", "marcin-gaik_php");
                $sql=$f_sql;
                $result=$conn->query($sql);
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
    
        function robot_max($nr_zad, $f_sql){
            $conn = new mysqli("mysql-marcin-gaik.alwaysdata.net", "217182", "Marcin123", "marcin-gaik_php");
            $sql=$f_sql;
            $result=$conn->query($sql);
                echo("<table border=1>");
                echo("<h3>ZAD $nr_zad</h3>");
                echo("<li>SQL: $sql");
                echo("<th>dział</th>");
                echo("<th>maksymalne</th>");
                    while($row=$result->fetch_assoc()){
                     echo("<tr>");
                        echo("<td>".$row["dzial"]."</td><td>".$row["maksymalne"]."</td>");
                     echo("</tr>");
                    }
                echo("</table>");
                echo("<hr />");
            }
            
            robot_sum(2,'SELECT dzial,sum(zarobki) as suma from pracownicy where imie like "%a"');
            robot_sum(3,'SELECT dzial,sum(zarobki) as suma from pracownicy where imie not like "%a" and dzial=2 or dzial=3 group by dzial');
            robot_avg(4,'SELECT dzial,avg(zarobki) as srednia from pracownicy where dzial=4 group by dzial');
            robot_avg(5,'SELECT dzial,avg(zarobki) as srednia from pracownicy where imie not like "%a" and dzial between 1 and 2');
            robot_count(6,'SELECT count(imie) as ilosc from pracownicy');
            robot_count(7,'SELECT count(imie) as ilosc from pracownicy where dzial=1 or dzial=3');
            robot_sum(8,'SELECT dzial,sum(zarobki)as suma from pracownicy group by dzial');
            robot_count(9,'SELECT count(imie) as ilosc from pracownicy group by dzial');
            robot_avg(10,'SELECT dzial,avg(zarobki) as srednia from pracownicy group by dzial');
?>
