<!DOCTYPE html>
<html lang="en">
<head>
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcin Gaik</title>
</head>
<body>
    
</body>
</html>
<?php

function petla(){
    echo("<li>test");
    for($i=1;$i<10;$i++){
        echo("<li>to jest w petli: ".$i);
    }
}
petla();

function robot($sql){
    require_once("../assets/conn.php");
    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<h3>SQL: $sql");
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
        }
robot('SELECT * FROM pracownicy');
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