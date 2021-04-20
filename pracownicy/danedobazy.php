<!DOCTYPE html>
<link rel="stylesheet" href="../assets/style1.css">
<link rel="icon" href="https://www.streamscheme.com/wp-content/uploads/2020/04/pepega.png" type="image/icon type">
<title>Marcin Gaik</title>
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
    <form action="strona.php" method="POST">
    <h3>Dodaj :</h3>
   <input type="text" name="imie" placeholder="Imie"><br>
   <select name="dzial" class="field-style field-split align-right">
        <option value="1">Dział 1 - Serwis</option>
        <option value="2">Dział 2 - Handel</option>
		<option value="3">Dział 3 - Marketing</option>
		<option value="4">Dział 4 - IT</option>
    </select>
   <br><input type="text" name="zarobki" placeholder="Zarobki">
   <br><input type="date" name="data_"><br>
   <input type="submit" value="Dodaj">
   </form> 

</html>

<h3>Usuń :</h3>
       
<form action="delete.php" method="POST">
       <input type="text" name="id" placeholder="ID"></br>
   <input type="submit" value="usun">
</form>
<?php
require_once("../assets/conn.php");

echo("<h3>Wszyscy Pracownicy</h3>");
$result=$conn->query("Select * from pracownicy");
echo("<table border=1>");
    echo("<th>Id</th>");
    echo("<th>Imie</th>");
    echo("<th>Dzial</th>");
    echo("<th>Zarobki</th>");
    echo("<th>Data_urodzenia</th>");
    echo("<th class=usuń>Usuń</th>");
        while($row=$result->fetch_assoc()){
            echo("<tr>");
            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
            echo("<td><form action=delete.php method=POST>");
            echo("<input type='hidden' name='id' value=".$row['id_pracownicy'].">");
            echo("<input type=submit value=X>");
            echo("</form></td>");
            echo("</tr>");}
echo("</table>");
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
