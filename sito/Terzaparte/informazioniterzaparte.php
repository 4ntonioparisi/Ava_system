<?php
session_start();
if (!empty($_SESSION['user'])){
require '../php/db.php';   
$db=getDb();
$query="SELECT Nome, Cognome, User, Password from persona where User=:user";
$sql=$db->prepare($query);
$sql->bindParam(':user', $_SESSION['user']); 
$sql->execute();
}
else
{
    header('location: ../login.php');
}
?>

<!DOCTYPE html>
<html lang="it">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>System_Ava</title>
        <!-- Bootstrap core CSS-->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Page level plugin CSS-->
        <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="../css/sb-admin.css" rel="stylesheet">
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    </head>

    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
             <a class="navbar-brand" style="color:white">Terza parte</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                        
                            <a class="nav-link" href="dashboardterzaparte.php">
                                <i class="fas fa-tachometer-alt"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                       
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                    </li>
                </ul>
                <ul class="navbar-nav sidenav-toggler">
                    <li class="nav-item">
                        <a class="nav-link text-center" id="sidenavToggler">
                            <i class="fa fa-fw fa-angle-left"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">




                    <a  href="../login.php" class="nav-link" >
                        <i class="fa fa-sign-out-alt"></i>Logout</a>
                </ul>
            </div>
        </nav>
        <div class="content-wrapper">
            <div class="container-fluid">


                <!-- Example DataTables Card-->
                <div class="card mb-3">
                    <div class="card-header"> 
                        <table  id="menu-item-432618" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home selected menu-item-432618">
                            <th>Informazioni personali</th>
                        </table>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <?php
                            $row = $sql->fetch(PDO::FETCH_ASSOC);
                            ?>
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control" name="nome" value="<?php echo $row['Nome']?>">
                            </div> 
                            <div class="form-group">
                                <label for="cognome">Cognome:</label>
                                <input type="text" class="form-control" name="cognome" value="<?php echo $row['Cognome']?>">
                            </div>
                            <div class="form-group">
                                <label for="user">User:</label>
                                <input type="text" class="form-control" name="user" value="<?php echo $row['User']?>">
                            </div> 
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="text" class="form-control" name="password" value="<?php echo $row['Password']?>">
                            </div>
                            <div class=" text-center">

                                <a href="dashboardterzaparte.php"><button type="button" class="btn btn-success" >
                                    Indietro</button></a>

                                <a href="registrazionepersona.php"><button type="button" class="btn btn-success" >
                                    Modifica</button></a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.container-fluid-->
                <!-- /.content-wrapper-->
                <footer class="sticky-footer">
                    <div class="container">
                        <div class="text-center">
                            <small>Copyright © Powerade by AVA_Group 2018</small>
                        </div>
                    </div>
                </footer>
                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fa fa-angle-up"></i>
                </a>
                <!-- Bootstrap core JavaScript-->
                <script src="../vendor/jquery/jquery.min.js"></script>
                <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                <!-- Core plugin JavaScript-->
                <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
                <!-- Page level plugin JavaScript-->
                <script src="../vendor/datatables/jquery.dataTables.js"></script>
                <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
                <!-- Custom scripts for all pages-->
                <script src="../js/sb-admin.min.js"></script>
                <!-- Custom scripts for this page-->
                <script src="../js/sb-admin-datatables.min.js"></script>
            </div>
        </div>

    </body>

</html>
