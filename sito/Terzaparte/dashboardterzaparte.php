<?php
require '../php/db.php'; ?>

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
            <a class="navbar-brand" href="index.html">Terza Parte</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">


                <ul class="navbar-nav ml-auto">



                    <li class="nav-item">
                        <a class="nav-link" href="../login.php">
                            <i class="fas fa-sign-out-alt"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        
            <div class="container-fluid">
                    
               
                <!-- Area Chart Example-->
                 <br><br>
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-area-chart"></i> Nome impianto</div>
                    <div class="card-body">
                        <canvas id="myAreaChart" width="100%" height="30"></canvas>
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
        
    </body>

</html>
