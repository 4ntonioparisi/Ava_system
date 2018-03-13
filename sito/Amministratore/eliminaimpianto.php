<?php
session_start();
if (!empty($_SESSION['user'])){
require '../php/db.php'; 
$Id=$_POST['txtid'];
$db=getDb();
$query1="DELETE FROM impianto_terzaparte where impianto_terzaparte.ImpiantoId=:id";
$query2="DELETE FROM sensore where sensore.ImpiantoId=:id ";
$query3="DELETE FROM amministratore_impianto where amministratore_impianto.ImpiantoId=:id";
$query4="DELETE FROM impianto where impianto.Id=:id";
$sql=$db->prepare($query1);
$sql->execute();
$sql=$db->prepare($query2);
$sql->execute();
$sql=$db->prepare($query3);
$sql->execute();
$sql=$db->prepare($query4);
$sql->execute();
$sql->bindParam(':id',$Id); 
}
else
{
    header('location: dashboard.php');
}
    
    


?>

