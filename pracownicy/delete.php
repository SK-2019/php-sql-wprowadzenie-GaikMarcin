<?php
require_once("../assets/conn.php");
$sql =  "DELETE FROM pracownicy where id_pracownicy='".$_POST['id']."'";
echo($sql);
mysqli_query($conn,$sql);
mysqli_close($conn);
header("location:http://php-marcin-gaik.herokuapp.com/pracownicy/danedobazy.php");

?>