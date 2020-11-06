<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style1.css">
    <a href="https://github.com/SK-2019/php-sql-wprowadzenie-GaikMarcin"> GitHub </a>
<div class="nav">
    <a class="nav_link" href="index.php">Strona Główna</a>
    <a class="nav_link" href="funkcjeagregujace.php">Funkcje Agregujące</a>
    <a class="nav_link" href="pracownicy.php">Pracownicy - wstęp</a>
</div>
</head>
<body>
    <h1>Marcin Gaik 2Ti</h1>
    <h2>Pracownicy i Organizacja</h2>
<?php
                echo("<hr />");
                echo("<h3>Pracownicy z nazwą działów</h3>");
                require_once('conn.php');
        $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org group by nazwa_dzial');
            $result=$conn->query($sql);//mysql
                echo("<table border=1>");
                echo("<li>SQL: $sql");
                echo("<th>id</th>");
                echo("<th>imie</th>");
                echo("<th>dzial</th>");
                echo("<th>zarobki</th>");
                echo("<th>nazwa_dzial</th>");
                echo("<th>data_urodzenia</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                            echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                        echo("</tr>");
                    }
                echo("</table>");
                echo("<hr />");
                
                echo("<h3>Pracownicy tylko z działu 1 i 4</h3>");
        $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org and (dzial=1 or dzial=4)');
            $result=$conn->query($sql);//mysql
                echo("<table border=1>");
                echo("<li>SQL: $sql");
                echo("<th>id</th>");
                echo("<th>imie</th>");
                echo("<th>dzial</th>");
                echo("<th>zarobki</th>");
                echo("<th>nazwa_dzial</th>");
                echo("<th>data_urodzenia</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                            echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                        echo("</tr>");
                    }
                echo("</table>");
                echo("<hr />");
                
                echo("<h3>Lista kobiet z nazwami działów</h3>");
        $sql=('SELECT * FROM pracownicy,organizacja where imie like "%a" and dzial=id_org group by nazwa_dzial');
            $result=$conn->query($sql);//mysql
                echo("<table border=1>");
                echo("<li>SQL: $sql");
                echo("<th>id</th>");
                echo("<th>imie</th>");
                echo("<th>dzial</th>");
                echo("<th>zarobki</th>");
                echo("<th>nazwa_dzial</th>");
                echo("<th>data_urodzenia</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                            echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                        echo("</tr>");
                    }
                echo("</table>");
                echo("<hr />");
               
                echo("<h3>Lista mężczyzn z nazwami działów</h3>");
        $sql=('SELECT * FROM pracownicy,organizacja where imie  not like "%a" and dzial=id_org group by nazwa_dzial');
            $result=$conn->query($sql);//mysql
                echo("<table border=1>");
                echo("<li>SQL: $sql");
                echo("<th>id</th>");
                echo("<th>imie</th>");
                echo("<th>dzial</th>");
                echo("<th>zarobki</th>");
                echo("<th>nazwa_dzial</th>");
                echo("<th>data_urodzenia</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                            echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                        echo("</tr>");
                    }
                echo("</table>");
                echo("<hr />");

                echo("<h2>Sortowanie</h2>");
                echo("<hr />");

                echo("<h3>Pracownicy posortowani malejąco wg imienia</h3>");
        $sql=('SELECT * FROM pracownicy,organizacja where  dzial=id_org group by nazwa_dzial order by imie desc');
            $result=$conn->query($sql);//mysql
                echo("<table border=1>");
                echo("<li>SQL: $sql");
                echo("<th>id</th>");
                echo("<th>imie</th>");
                echo("<th>dzial</th>");
                echo("<th>zarobki</th>");
                echo("<th>nazwa_dzial</th>");
                echo("<th>data_urodzenia</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                            echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                        echo("</tr>");
                    }
                echo("</table>");
                echo("<hr />");

                echo("<h3>Pracownicy z działu 3 posortowani rosnąco po imieniu</h3>");
        $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org and dzial=3 group by nazwa_dzial order by imie asc');
            $result=$conn->query($sql);//mysql
                echo("<table border=1>");
                echo("<li>SQL: $sql");
                echo("<th>id</th>");
                echo("<th>imie</th>");
                echo("<th>dzial</th>");
                echo("<th>zarobki</th>");
                echo("<th>nazwa_dzial</th>");
                echo("<th>data_urodzenia</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                            echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                        echo("</tr>");
                    }
                echo("</table>");
                echo("<hr />");

                echo("<h3>Kobiety posortowane rosnąco po imieniu</h3>");
        $sql=('SELECT * FROM pracownicy,organizacja where imie like "%a" and dzial=id_org group by nazwa_dzial order by imie asc');
            $result=$conn->query($sql);//mysql
                echo("<table border=1>");
                echo("<li>SQL: $sql");
                echo("<th>id</th>");
                echo("<th>imie</th>");
                echo("<th>dzial</th>");
                echo("<th>zarobki</th>");
                echo("<th>nazwa_dzial</th>");
                echo("<th>data_urodzenia</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                            echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                        echo("</tr>");
                    }
                echo("</table>");
                echo("<hr />");

                echo("<h3>Kobiety z działu 1 i 3 posortowane rosnąco po zarobkach</h3>");
        $sql=('SELECT * FROM pracownicy,organizacja where imie like "%a" and dzial=id_org and (dzial=1 or dzial=3) group by nazwa_dzial order by zarobki asc');
            $result=$conn->query($sql);//mysql
                echo("<table border=1>");
                echo("<li>SQL: $sql");
                echo("<th>id</th>");
                echo("<th>imie</th>");
                echo("<th>dzial</th>");
                echo("<th>zarobki</th>");
                echo("<th>nazwa_dzial</th>");
                echo("<th>data_urodzenia</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                            echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                        echo("</tr>");
                    }
                echo("</table>");
                echo("<hr />");

                echo("<h3>Mężczyźni posortowani rosnąco: po nazwie działu a następnie po wysokości zarobków</h3>");
        $sql=('SELECT * FROM pracownicy,organizacja where imie not like "%a" and dzial=id_org group by nazwa_dzial order by imie asc,zarobki');
            $result=$conn->query($sql);//mysql
                echo("<table border=1>");
                echo("<li>SQL: $sql");
                echo("<th>id</th>");
                echo("<th>imie</th>");
                echo("<th>dzial</th>");
                echo("<th>zarobki</th>");
                echo("<th>nazwa_dzial</th>");
                echo("<th>data_urodzenia</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                            echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                        echo("</tr>");
                    }
                echo("</table>");
                echo("<hr />");

                echo("<h2>Limit</h2>");
                echo("<hr />");

                cho("<h3>Dwóch najlepiej zarabiających pracowników z działu 4</h3>");
        $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org and dzial=4 group by nazwa_dzial order by zarobki asc LIMIT 2 LIMIT 2');
            $result=$conn->query($sql);//mysql
                echo("<table border=1>");
                echo("<li>SQL: $sql");
                echo("<th>id</th>");
                echo("<th>imie</th>");
                echo("<th>dzial</th>");
                echo("<th>zarobki</th>");
                echo("<th>nazwa_dzial</th>");
                echo("<th>data_urodzenia</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                            echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                        echo("</tr>");
                    }
                echo("</table>");
                echo("<hr />");

                cho("<h3>Trzy najlepiej zarabiające kobiety z działu 4 i 2</h3>");
        $sql=('SELECT * FROM pracownicy,organizacja WHERE dzial = id_org and and dzial= 4 LIMIT 2');
            $result=$conn->query($sql);//mysql
                echo("<table border=1>");
                echo("<li>SQL: $sql");
                echo("<th>id</th>");
                echo("<th>imie</th>");
                echo("<th>dzial</th>");
                echo("<th>zarobki</th>");
                echo("<th>nazwa_dzial</th>");
                echo("<th>data_urodzenia</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                            echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                        echo("</tr>");
                    }
                echo("</table>");
                echo("<hr />");

?>
