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
            <a class="navbar-brand" style="color:white">Cliente</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                        <a class="nav-link" href="informazionicliente.php">
                            <i class="fas fa-info"></i>
                            <span class="nav-link-text">Informazioni</span>

                        </a>
                    </li>


                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
                        <a  class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard"></a>
                        <a class="nav-link" href="aggiungiterzaparte.php">
                            <i class="fas fa-plus"></i>
                            <spam class="nav-link-text">Aggiungi Terza Parte</spam>
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
            <div class="container-fluid">
                <!-- Breadcrumbs-->

                Dashboard
                <br><br>

                <!-- Area Chart Example-->
                <div class="card mb-3">
                    <div class="card-header">
                        <select name="slnomeimpianto" class="form-control" id="sel1">
                            <option value="nomeimpianto1">Impiantisctica andria</option>
                            <option value="nomeimpianto2">Pianeta impianto</option>
                        </select>
                        <div class="card-body">
                            
                                <canvas id="myLineChart" width="600" height="600"></canvas> 

                                <script> 
                                    // Definisco i dati da mostrare nel grafico 
                                    var data = { 

                                        labels: ["Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto"], 
                                        datasets: [ 
                                            { 
                                                label: "Temperature 2013", 
                                                fillColor: "rgba(99,240,220,0.2)", 
                                                strokeColor: "rgba(99,240,220,1)", 
                                                pointColor: "rgba(99,240,220,1)", 
                                                pointStrokeColor: "#fff", 
                                                pointHighlightFill: "#fff", 
                                                pointHighlightStroke: "rgba(220,220,220,1)", 
                                                data: [8, 11, 18, 22, 24, 26, 34, 39] 
                                            }, 
                                            { 
                                                label: "Temperature 2014", 
                                                fillColor: "rgba(205,99,151,0.2)", 
                                                strokeColor: "rgba(205,99,151,1)", 
                                                pointColor: "rgba(205,99,151,1)", 
                                                pointStrokeColor: "#fff", 
                                                pointHighlightFill: "#fff", 
                                                pointHighlightStroke: "rgba(151,187,205,1)", 
                                                data: [16, 18, 22, 24, 26, 28, 32, 36] 
                                            } 
                                        ] 
                                    }; 

                                    // Ottengo il contesto 2D del Canvas in cui mostrare il grafico 
                                    var ctx = document.getElementById("myLineChart").getContext("2d"); 

                                    // Crea il grafico e visualizza i dati 
                                    var myLineChart = new Chart(ctx).Line(data); 
                                </script> 
                            
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
            
            </body>

        </html>
