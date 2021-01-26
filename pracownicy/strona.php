<!DOCTYPE html>
<html>
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
<?php


echo("<li>imię:".$_POST["imie"]);
echo("<li>dział:".$_POST["dzial"]);
echo("<li>zarobki:".$_POST["zarobki"]);
echo("<li>data urodzenia:".$_POST["data_"]);

   require_once('../conn.php');
   $sql = "INSERT INTO pracownicy(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES(NULL,'".$_POST['imie']."', '".$_POST['dzial']."', '".$_POST['zarobki']."', '".$_POST['data_']."')";
   if ($conn->query($sql) === TRUE) {
    echo("<br>"); 
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
 
 
 $sql=('SELECT * FROM pracownicy');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imię</th>");
        echo("<th>dział</th>");
        echo("<th>zarobki</th>");
        echo("<th>data urodzenia</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td>");
                echo("</tr>");
            }
        echo("</table>");
$conn->close(); 
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