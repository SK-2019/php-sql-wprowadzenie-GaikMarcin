<?php
require_once("conn.php");
$sql =  "DELETE FROM biblkrzyz where id_krzyz='".$_POST['id']."'";
echo($sql);
mysqli_query($conn,$sql);
mysqli_close($conn);
header("location:http://php-marcin-gaik.herokuapp.com/biblioteka.php");

?>