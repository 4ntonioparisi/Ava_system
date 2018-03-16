<?php
session_start();
if (!empty($_SESSION['user'])){
    require '../php/db.php';
}
else
{
    header('location: ../login.php');
} 
?>
<?php
$name = "";
$city = "";
$usr = "";
$pwd = "";
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
            <a class="navbar-brand" href="index.php">Amministatore</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                        <a class="nav-link" href="dashboard.php">
                            <i class="fas fa-tachometer-alt"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                        <a class="nav-link" href="creaimpianto.php">
                            <i class="fas fa-industry"></i>
                            <span class="nav-link-text">Crea impianto</span>
                        </a>
                    </li>
                    <br>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                        <a class="nav-link" href="addcliente.php">
                            <i class="fas fa-user-plus"></i>
                            <span class="nav-link-text">Aggiungi cliente</span>
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
                            <i class="fas fa-sign-out-alt"></i>Logout</a>

                    </li>
                </ul>
            </div>
        </nav>
        <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Example DataTables Card-->
                <div class="card mb-3">
                    <div class="card-header"> 
                        <table  id="menu-item-432618" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home selected menu-item-432618">
                            <th>Aggiungi cliente</th>
                        </table>
                    </div>
                    <div class="card-body">

                        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" >
                            <div class="form-group">
                                <label for="name">Nome cliente:</label>
                                <input type="text" class="form-control" name="name" value="<?php echo $name;?>">
                            </div>

                            <div class="form-group">
                                <label for="city">Città</label>
                                <input type="text" class="form-control" name="city" value="<?php echo $city;?>">
                            </div> 
                            <div class="form-group">
                                <label for="usr">User:</label>
                                <input type="text" class="form-control" name="usr" value="<?php echo $usr;?>">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="text" class="form-control" name="pwd" value="<?php echo $pwd;?>">
                            </div>
                            <div class=" text-center">
                                <button type="reset" class="btn btn-success" >Annulla</button>
                                <!--<a data-toggle="modal" data-target="#exampleModal"><button type="submit" class="btn btn-success" name="btnaggiungi">Aggiungi </button></a>  -->

                                <button type="submit" class="btn btn-success" name="btnaggiungi">Aggiungi</button>

                            </div>

                        </form>
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            if (!empty($_POST["name"]))
                                $name = $_POST["name"];
                            if (!empty($_POST["city"])) 
                                $city = $_POST["city"];
                            if (!empty($_POST["usr"])) 
                                $usr = $_POST["usr"];
                            if (!empty($_POST["pwd"])) 
                                $pwd = $_POST["pwd"];
                            echo $name;
                            echo $city;
                            echo $usr;
                            echo $pwd;
                            $db=getDb();

                            $query="INSERT INTO cliente (Nome, Città, User, Password) VALUES ('$name', '$city', '$usr', '$pwd')";
                            $sql = $db->prepare($query);

                            
                            $sql->execute();
                            echo $query;

                            // $sql="INSERT INTO cliente (Nome, Città, User, Password) VALUES (':name', ':city', ':usr', ':pwd')";
                            //    $stmt = $db->prepare($sql);
                            // $stmt->bindParam(':name', $name, PDO::PARAM_STR);
                            //    $stmt->bindParam(':city', $city, PDO::PARAM_STR);
                            //  $stmt->bindParam(':usr', $usr, PDO::PARAM_STR);
                            //    $stmt->bindParam(':pwd', $pwd, PDO::PARAM_STR);
                            //  $stmt->execute();
                        }?>



                        <!-- Add Modal-->
                        <!-- <div class="modal" fade id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Aggiungi cliente.</h5>
<button class="close" type="button" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">x</span>
</button>
</div>
<div class="modal-body">Il cliente è stato aggiunto.</div>
<div class="modal-footer">
<button class="btn btn-secondary" type="button" data-dismiss="modal">Annulla</button>
<form method="post" action="dashboard.php">
<button class="btn btn-primary" type='submit'>ok</button>
</form>
</div>
</div>
</div>
</div> -->

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
    </body>

</html>
