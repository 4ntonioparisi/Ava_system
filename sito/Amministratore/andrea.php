
<?php
session_start();
include "db.php";

if (isset($_POST['register_btn'])){
    $name = $_POST['name'];
    $city = $_POST['city'];
    $username = $_POST['username'];
    $password =  $_POST['password'];



    $read ="SELECT Count( * ) AS Conta FROM utenti  WHERE username = '$username'";
    //$raw = mysql_query($read);
    $raw = mysqli_query($conn, $read);
    $row = mysqli_fetch_array($raw);
    $raw =close;


    if ($row[Conta]>0){
        print ("Username già esistente");

    }

    else{
        //mysql_query ("INSERT INTO utenti (username, password, email,attivo) VALUES ( '$username', '$password', '$email','no')");
        $sql = "INSERT INTO cliente (username, password, email,attivo) VALUES ('$name', '$city', '$username', '$password')";
        $result = mysqli_query($conn, $sql);
        $messaggio="Email inviata";
        mysqli_close($conn);

        $username=$_POST['username'];
        $header .= "Content-Type: text/html; charset=\"iso-8859-1\"n"; 
        $header .= "From: MY Bid One <ambrogioLosito@gmail.com>\n"; 
        $header .="Content-Transfer-Encoding: 7bit\n\n";
        $subject="Conferma registrazione";




        $_SESSION['username'] ="$username";
        header("location: registrazione.php");



    }


}

//mysql_close($db);  
mysqli_close($conn);







?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <script src="script.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Registrazione</title>
    </head>

    <body class="body">
        <div class="mainHeader">
            <img src="immagini/mybidone.png" alt="logo losdamico" />
            <form method="post" action="registrazione.php">
                <center><table>
                    <h1><b>Registrati</b></h1>
                    <b>Riceverai una e-mail di conferma per confermare la tua registrazioe</b>
                    <tr>
                        <td><b>Username</b></td>
                        <td><input type="text" name="username" class="textInput"></td>
                        <p><span id="errorUsername" ><?php echo  $errore ?></span></p>
                    </tr>
                    <tr>
                        <td><b>Email</b></td>
                        <td><input type="email" name="email" class="textInput"></td>
                    </tr>
                    <tr>
                        <td><b>Password</b></td>
                        <td><input type="password" name="password" class="textInput"></td>
                    </tr>
                    <p>
                        <span style="color:#F00"><?php echo"$messaggio"?> </span>
                    </p>
                    <tr>
                        <td>&nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="register_btn" value="Registrati"></td>  

                    </tr>


                    </table></center>
            </form>

        </div>
        <br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <footer>
            <ul class="menu">
                <li><a href="pagamento.php" title="pagina pagamento">Metodo di pagamento</a></li>
                <li><a href="privacy.php"title="pagina privacy">Informativa sulla privacy</a></li>

                &#169; Copyright 2016 My Bid One
            </ul>






        </footer>
    </body>
</html>