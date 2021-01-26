<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style1.css">
<a href="https://github.com/SK-2019/php-sql-wprowadzenie-GaikMarcin"> GitHub </a>
<span onclick="openNav()">&#9776</span>
<div class="sidebar" id="mySidenav">
    <a class="nav_link" href="https://github.com/SK-2019/php-sql-wprowadzenie-GaikMarcin"> GitHub </a>
    <a class="nav_link" href="pracownicy/pracownicy.php">Pracownicy - wstęp</a>
    <a class="nav_link" href="pracownicy/funkcjeagregujace.php">Funkcje Agregujące</a>
    <a class="nav_link" href="pracownicy/pracownicy_organizacja.php">Pracownicy i Organizacja</a>
    <a class="nav_link" href="pracownicy/data_czas.php">Data i Czas</a>
    <a class="nav_link" href="pracownicy/danedobazy.php">DaneDoBazy</a>
    <a class="nav_link" href="pracownicy/function.php">Function</a>
    <a class="nav_link" href="ksiazki/biblioteka.php">Biblioteka</a>
</div>
</head>
<body>
<h1>Marcin Gaik 2Ti</h1>
<h2>Tabela Pracowników</h2>
<?php
            echo("<hr />");
            echo("<h3>Pracownicy tylko z działu 2</h3>");
            require_once('../conn.php');
    $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org and dzial=2 group by nazwa_dzial');
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

                echo("<h3>Pracownicy tylko z działu 2 i z działu 3</h3>");
        $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org and dzial=2 or dzial=3 group by nazwa_dzial');
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

                echo("<h3>Pracownicy tylko z zarobkami mniejszymi niż 30</h3>");
        $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org and zarobki<30 group by nazwa_dzial');
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
<script>
function openNav() {
    if(document.getElementById("mySidenav").style.left=="-250px"){
        document.getElementById("mySidenav").style.left = "0px"; 
    }
    else{
        document.getElementById("mySidenav").style.left = "-250px"; 
    }
    
}

</script>