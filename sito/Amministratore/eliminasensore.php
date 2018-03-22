<?php
session_start();
if (!empty($_SESSION['user'])){
    require '../php/db.php'; 

    $sensore=$_POST['txtsensore'];
    $id=$_POST['txtid'];

    $db=getDb();
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    $query='DELETE FROM sensore where sensore.Id=:id';
    $sql=$db->prepare($query);
    $sql->bindParam(':id', $id);
    print_r($db->errorInfo());
    $sql->execute();

    header('location: dashboard.php');
    //header('location: modificaimpianto.php?txtid='.$sensore);
}

?>

