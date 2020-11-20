<!DOCTYPE html>
<html>
<?php

echo("jesteś na stronie.php");
echo("<li>imię:".$_POST["imie"]);
echo("<li>dział:".$_POST["dzial"]);
echo("<li>zarobki:".$_POST["zarobki"]);
echo("<li>data urodzenia:".$_POST["data_"]);

   require_once('conn.php');
   $sql = "INSERT INTO pracownicy(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES(NULL,'".$_POST['imie']."', '".$_POST['dzial']."', '".$_POST['zarobki']."', '".$_POST['data_']."')";
   if ($conn->query($sql) === TRUE) {
    echo("<br>"); 
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();

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
?>