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
                <div class="card-header">Recupera Password</div>
                <div class="card-body">
                    <div class="text-center mt-4 mb-5">
                        <h4>Hai dimenticato la password?</h4>
                        <p>Inserisci il tuo username per ricevere nuove credenziali</p>
                    </div>
                    <form>
                        <div class="form-group">
                            <input  class="form-control" name="inputuser" id="exampleInputEmail1" type="user" aria-describedby="emailHelp" placeholder="Inserisci Username">
                        </div>
                        <br>
                        <a name="btnrecuperapassword" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-block" href="login.php">Recupera Password</a>
                    </form>
                    <br><br>
                    <div class="text-center">
                        <?php
                        if (!empty($_POST['btnrecuperapassword'])){
                            $user=$_POST['inputuser'];
                            $db=getDb();

                            $query= 'select * from amministratore a,cliente c,persona p where a.User=:user OR c.User=:user OR p.User=:user';
                            $sql=$db->prepare($query);
                            $sql->bindParam(':user',$user); 
                            $sql->execute();

                            if ($sql->rowCount()===1){
                                echo '<h5>Abbiamo inviato le nuove credenziali</h5>';
                            }else {

                                echo 'Username non esistente';
                            }
                        }

                        ?>                            

                    </div>


                    <div class="text-center">
                        <br><br>
                        <a class="d-block small" href="login.php">Login</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Revovery modal-->
    <div class="modal" fade id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ti abbiamo inviato una nuova password</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">x</span>
                            </button>
                        </div>
                        <div class="modal-footer">
                            
                           <a class="btn btn-primary" href="login.php">Ok</a>
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
