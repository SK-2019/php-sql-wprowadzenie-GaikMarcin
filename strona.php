<!DOCTYPE html>
<html>
<?php

echo("jesteś na stronie.php");
echo("<li>imię:".$_POST["imie"]);
echo("<li>nazwisko:".$_POST["nazwisko"]);

   require_once('conn.php');
   "INSERT INTO `pracownicy`(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES ([null],[John],[2],[60],[12-12-1980])"
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
?>