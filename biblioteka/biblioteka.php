<!DOCTYPE html>
<html lang="en">
<head>
<title>Marcin Gaik</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../assets/style1.css">
    <link rel="icon" href="https://www.streamscheme.com/wp-content/uploads/2020/04/pepega.png" type="image/icon type">
    <span onclick="openNav()">&#9776</span>
<div class="sidebar" id="mySidenav">
    <?php
        include("../assets/menu.php")
    ?>

</div>
    <form action="insert.php" method="POST">
    <h3>Dodaj :</h3>
   <br><input type="text" name="tytul"placeholder="tytul">
   <br><input type="text" name="imie" placeholder="imie">
   <br><input type="text" name="nazwisko" placeholder="nazwisko"><br>
   <input type="submit" value="Dodaj">
   </form> 
</head>
<body>
<?php
require_once("../assets/conn.php");
$result=$conn->query('SELECT id_krzyz as id,tytul,imie,nazwisko FROM `BiblKrzyz`,BiblTytul,BiblAutor where BiblAutor.id_autor=BiblKrzyz.id_autor and BiblTytul.id_tytul=BiblKrzyz.id_tytul');
echo("<table border=1>");
echo("<th>id</th>");
echo("<th>tytul</th>");
echo("<th>imie</th>");
echo("<th>nazwisko</th>");   
    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['id']."</td><td>".$row['tytul']."</td><td>".$row['imie']."</td><td>".$row['nazwisko']."</td>");
        echo("</tr>");
    }
echo("</table>");
?>    
</body>
</html>
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