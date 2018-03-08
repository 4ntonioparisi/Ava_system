<?php
require '../php/db.php'; 
$db='';
$sql='';
$db=getDb();
$id=$_POST['txtid'];
echo $id;
$query="SELECT sensore.Id, sensore.Tipo, sensore.Marca, sensore.Stato from sensore where sensore.ImpiantoId=:Id ; ";
$sql=$db->prepare($query);
$sql->bindParam(':Id',$id);
$sql->execute();
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
            <a class="navbar-brand" href="index.html">Amministatore</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                        <a class="nav-link" href="dashboard.php">
                            <i class="fa fa-fw fa-area-chart"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                        <a class="nav-link" href="creaimpianto.html">
                            <i class="fa fa-fw fa-area-chart"></i>
                            <span class="nav-link-text">Crea impianto</span>
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
                        <a class="nav-link" href="../login.php" >
                            <i class="fa fa-fw fa-sign-out" ></i>Logout</a>
                </ul>
            </div>
        </nav>
        <div class="content-wrapper">
            <div class="container-fluid">


                <!-- Example DataTables Card-->
                <div class="card mb-3">
                    <div class="card-header"> 
                        <table  id="menu-item-432618" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home selected menu-item-432618">
                            <th>Modifica impianto</th>
                        </table>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID sensore</th>
                                        <th>Tipo sensore</th>
                                        <th>Marca</th>
                                        <th>Stato</th> 
                                        <th>  </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
                                    foreach($rows as $row)
                                    {
                                    ?>
                                    <tr>

                                        <td><?php echo $row['Id'];?></td>
                                        <td><?php echo $row['Tipo']; ?></td>
                                        <td><?php echo $row['Marca'];  ?></td>
                                        <td>
                                            <?php 
                                            if($row['Stato']==='0'){
                                               ?> 
                                            <i class="fal fa-circle" style="color:Red"></i>
                                          <?php  }
                                        else
                                    { ?>
                                             <i class="fal fa-circle" style="color:Green"></i>
                                       <?php } ?>
                                           
                                        </td>  
                                        <td> 
                                            <a data-toggle="modal" data-target="#exampleModal"><button type="button"><i class="far fa-trash" ></i></button></a> </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <div class=" text-center">
                                <a href="creasensore.php"> <button type="button" class="btn btn-success" >Aggiungi sensore</button></a>
                                <a data-toggle="modal" data-target="#exampleModal" href="dashboard.php"> <button type="button" class="btn btn-success"> Elimina impianto</button></a>
                            </div>

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
            <!-- Delete Modal-->
            <div class="modal" fade id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Eliminare sensore?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">x</span>
                            </button>
                        </div>
                        <div class="modal-body">Seleziona elimina per eliminare</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Annulla</button>
                            <a class="btn btn-primary" href="dashboard.php">Elimina</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- elimina impianto Modal -->
            <div>
                <div class="modal" fade id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Eliminare Impianto?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">x</span>
                                </button>
                            </div>
                            <div class="modal-body">Seleziona elimina per eliminare</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Annulla</button>
                                <a class="btn btn-primary" href="dashboard.php">Elimina</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bootstrap core JavaScript-->
            <script src="../vendor/jquery/jquery.min.js"></script>
            <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- Core plugin JavaScript-->
            <script src="./vendor/jquery-easing/jquery.easing.min.js"></script>
            <!-- Page level plugin JavaScript-->
            <script src="../vendor/datatables/jquery.dataTables.js"></script>
            <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
            <!-- Custom scripts for all pages-->
            <script src="../js/sb-admin.min.js"></script>
            <!-- Custom scripts for this page-->
            <script src="../js/sb-admin-datatables.min.js"></script>
        </div>
    </body>

</html>
