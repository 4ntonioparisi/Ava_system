<?php
session_start();
if (!empty($_SESSION['user'])){
require '../php/db.php'; 

$impianto=$_POST['txtimpianto'];
$id=$_POST['txtid'];
echo $id;
$db=getDb();
$query="DELETE FROM sensore where sensore.Id=:id";
$sql=$db->prepare($query);
$sql->bindParam(':id', $id);
$sql->execute();
}
else
{
    header('location: modificaimpianto.php?txtid='.$impianto);
}
    


?>

