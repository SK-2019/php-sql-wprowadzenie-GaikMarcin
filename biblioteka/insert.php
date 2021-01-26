<?php
require_once('../assets/conn.php');
$imie=$_POST['imie'];
$nazwisko=$_POST['nazwisko'];
$tytul=$_POST['tytul'];
$sql_autor="INSERT INTO `BiblAutor`(`id_autor`, `imie`, `nazwisko`) VALUES (null,'$imie','$nazwisko')";
$dodaj1=mysqli_query($conn,$sql_autor);
$sql_tytul="INSERT INTO `BiblTytul`(`id_tytul`, `tytul`) VALUES (null,'$tytul')";
$dodaj2=mysqli_query($conn,$sql_tytul);
if($dodaj1 && $dodaj2){
$sql_autor2="SELECT id_autor from BiblAutor where nazwisko='$nazwisko'";
$result1=$conn->query($sql_autor2);
echo($sql_autor2);
while($row1=$result1->fetch_assoc()){
    $autor_id=$row1['id_autor'];
}
$sql_tytul2="SELECT id_tytul from BiblTytul where tytul='$tytul'";
$result2=$conn->query($sql_tytul2);
while($row2=$result2->fetch_assoc()){
    $tytul_id=$row2['id_tytul'];
}
$sql_krzyz="INSERT INTO `BiblKrzyz`(`id_krzyz`, `id_tytul`, `id_autor`) VALUES (null,'$tytul_id','$autor_id')";
mysqli_query($conn,$sql_krzyz);
}
header("location:https://php-marcin-gaik.herokuapp.com/ksiazki/biblioteka.php");
?>