<?php
session_start();
if (!empty($_SESSION['user'])){
    require '../php/db.php';   
    $db=getDb();
    $query="SELECT sensore.Id as Sensore, sensore.Tipo as TipoS, rilevazione.Ora, rilevazione.Caratteri, rilevazione.CifreDecimali FROM (((sensore INNER JOIN rilevazione on sensore.Id=rilevazione.SensoreId) INNER JOIN impianto on sensore.ImpiantoId=impianto.Id) INNER JOIN cliente ON impianto.ClienteId=cliente.Id) INNER JOIN persona on cliente.Id=persona.ClienteId WHERE persona.User= :user ";

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
        <title>System_ava</title>
        <!-- Bootstrap core CSS-->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
                        <a class="nav-link" href="informazioniterzaparte.php">
                            <i class="fas fa-info"></i>
                            <span class="nav-link-text">Informazioni</span>

                        </a>
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
                    <li class="nav-item">
                        <a href="../login.php" class="nav-link" >
                            <i class="fa fa-sign-out-alt"></i>Logout</a>
                </ul>
            </div>
        </nav>


        <div class="content-wrapper">
            <div class="container-fluid"><b> Dashboard Rilevazioni</b><br>
                <!-- Area Chart Example-->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <br>
                                        <th>Sensore</th>
                                        <th>Tipo sensore</th>
                                        <th>Ora</th>
                                        <th> Caratteri</th>
                                        <th>Cifre decimali</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
                                    foreach($rows as $row)
                                    {
                                    ?>

                                    <tr>
                                        <td><?php echo $row['Sensore'];?></td>
                                        <td><?php echo $row['TipoS'];?></td>
                                        <td><?php echo $row['Ora'];?></td>
                                        <td><?php echo $row['Caratteri'];?></td>
                                        <td><?php echo $row['CifreDecimali'];?></td>


                                    </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>



                        <div class="row">
                            <div class="col-lg-8">



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
                                <script src="../vendor/chart.js/Chart.min.js"></script>
                                <!-- Custom scripts for all pages-->
                                <script src="../js/sb-admin.min.js"></script>
                                <!-- Custom scripts for this page-->
                                <script src="../js/sb-admin-charts.min.js"></script>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
                </body>

            </html>