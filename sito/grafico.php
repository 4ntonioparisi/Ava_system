<?php
require 'php/db.php'; ?>

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
    
    <body> 
        
        
        
        
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
    </body>
</html>