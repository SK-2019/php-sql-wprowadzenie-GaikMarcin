<?php
require_once('conn.php');
$imie=$_POST['imie'];
$nazwisko=$_POST['nazwisko'];
$tytul=$_POST['tytul'];
$sql_autor="INSERT INTO `BiblAutor`(`id_autor`, `imie`, `nazwisko`) VALUES (null,'$imie','$nazwisko')";
$dodaj1=mysqli_query($conn,$sql_autor);
$sql_tytul="INSERT INTO `BiblTytul`(`id_tytul`, `tytul`) VALUES (null,'$tytul')";
$dodaj2=mysqli_query($conn,$sql_tytul);
header("location=http://php-marcin-gaik.herokuapp.com/biblioteka.php");
?>