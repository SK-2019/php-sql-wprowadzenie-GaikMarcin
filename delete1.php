<?php
require_once("conn.php");
$id=$_POST['id'];
$sql="DELETE FROM BiblKrzyz where id_krzyz='$id'";
echo($sql);
mysqli_query($conn,$sql);
mysqli_close($conn);
header("location:http://php-marcin-gaik.herokuapp.com/biblioteka.php");

?>