<?php
session_start();

if (!empty($_SESSION['user'])){
    require '../php/db.php'; 

    $impianto=$_POST['txtimpianto'];
    $Id=$_POST['txtidimpianto'];
    echo $impianto;

    $db=getDb();

    var_dump($Id, $impianto);
    
    $query1="DELETE FROM impianto_terzaparte where impianto_terzaparte.ImpiantoId=':id'";
    $query2="DELETE FROM sensore where sensore.ImpiantoId=':id'";
    $query3="DELETE FROM amministratore_impianto where amministratore_impianto.ImpiantoId=':id'";
    $query4="DELETE FROM impianto where impianto.Id=':id'";


    $sql=$db->prepare($query1);
    // $sql->bindParam(':id',$id);
    // $sql->execute();
    $sql=$db->prepare($query2);
    // $sql->bindParam(':id',$id);
    // $sql->execute();
    $sql=$db->prepare($query3);
    //$sql->bindParam(':id',$id);
    //$sql->execute();
    $sql=$db->prepare($query4);
    //$sql->bindParam(':id',$id);
    // $sql->execute();

    echo $query1;
    echo $query2;
    echo $query3;
    echo $query4;
}
else
{ 
    header('location: dashboard.php?txtid='.$impianto);
}
?>


