<?php
session_start();
if (!empty($_SESSION['user'])){
require '../php/db.php'; 

$sensore=$_POST['txtsensore'];
$id=$_POST['txtid'];
$db=getDb();
$query="DELETE FROM sensore where sensore.Id=:id";
$sql=$db->prepare($query);
$sql->bindParam(':id', $id);
$sql->execute();
   header('location: modificaimpianto.php?txtid='.$sensore);
}

?>

