<!DOCTYPE html>
<html>
<head>
<title>Marcin Gaik</title>
<link rel="stylesheet" href="../assets/style1.css">
<link rel="icon" href="https://www.streamscheme.com/wp-content/uploads/2020/04/pepega.png" type="image/icon type">
    <!-- <span onclick="openNav()">&#9776</span> -->
<div class="sidebar" id="mySidenav">
<?php
        include("../assets/menu.php")
    ?>
</div>
<div class="nav">
       <?php
       include("../assets/header.php");
       ?>
</head>
<body>
   
    <h2>Pracownicy i Organizacja</h2>
<?php
                echo("<hr />");
                echo("<h3>Pracownicy z nazwą działów</h3>");
                require_once('../assets/conn.php');
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

                echo("<h3>Dwóch najlepiej zarabiających pracowników z działu 4</h3>");
        $sql=('SELECT * From pracownicy, organizacja where dzial=id_org and dzial=4 order by zarobki desc limit 2');
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

                echo("<h3>Trzy najlepiej zarabiające kobiety z działu 4 i 2</h3>");
        $sql=('SELECT * From pracownicy, organizacja where dzial=id_org and (dzial=4 or dzial=2) order by zarobki desc limit 3');
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
                
                echo("<h3>Najstarszy pracownik</h3>");
                $sql=('SELECT * From pracownicy, organizacja where dzial=id_org order by data_urodzenia asc limit 1');
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