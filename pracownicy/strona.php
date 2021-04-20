<!DOCTYPE html>
<html>
<title>Marcin Gaik</title>
<link rel="stylesheet" href="../assets/style1.css">
<link rel="icon" href="https://www.streamscheme.com/wp-content/uploads/2020/04/pepega.png" type="image/icon type">
<!-- <span onclick="openNav()">&#9776</span> -->
<div class="sidebar" id="mySidenav">
<?php
        include("../assets/menu.php")
    ?>
</div>
<?php


echo("<li>imię:".$_POST["imie"]);
echo("<li>dział:".$_POST["dzial"]);
echo("<li>zarobki:".$_POST["zarobki"]);
echo("<li>data urodzenia:".$_POST["data_"]);

   require_once('../assets/conn.php');
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