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
        <title>System_AVA </title>
        <!-- Bootstrap core CSS-->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin.css" rel="stylesheet">
    </head>

    <body class="bg-dark">
        <div class="container">

            <div class="card card-login mx-auto mt-5">
                <div class="card-header">Login</div>
                <div class="card-body">

                    <form method="post">
                        <div class="form-group">
                            <label for="sel1">Accedi come:</label>
                            <select name="sltipoaccount" class="form-control" id="sel1">
                                <option value="amministratore">Amministratore</option>
                                <option value="cliente">Cliente</option>
                                <option value="persona">Persona</option>

                            </select>
                        </div> 

                        <div class="form-group">
                            <label for="exampleInputUser">Inserisci Username</label>
                            <input class="form-control" name="inputuser" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Inserisci Username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Inserisci Password</label>
                            <input class="form-control" name="inputpassword" id="exampleInputPassword1" type="password" 
                                   placeholder="Inserisci Password">
                        </div>
                        <input name="btnlogin" type="submit" class="btn btn-primary btn-block" value="Login">



                    </form>

                    <div class="text-center">
                        <br><br>
                        <?php
                        if (!empty($_POST['btnlogin'])){
                            $user=$_POST['inputuser'];
                            $password=$_POST['inputpassword'];
                            $tipoaccount=$_POST['sltipoaccount'];
                            $db=getDb();

                            $query= 'select * from '.$tipoaccount.' where User=:user and Password=:password';
                            $sql=$db->prepare($query);
                            $sql->bindParam(':user',$user); 
                            $sql->bindParam(':password',$password);
                            $sql->execute();

                            if ($sql->rowCount()===1){

                                session_start();
                                $_SESSION['user']=$user;


                                if($tipoaccount==='amministratore') header ('location: Amministratore/dashboard.php');
                                if($tipoaccount==='cliente') header('location: Cliente/dashboardcliente.php ');
                                if($tipoaccount==='persona') header ('location: Terzaparte/dashboardterzaparte.php');



                            }else {
                                echo 'Attenzione il tuo account non esiste';
                            }
                        }
                        ?>
                        <br><br>
                        <a class="d-block small" href="forgot-password.php">Hai dimenticato la password?</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    </body>

</html>
