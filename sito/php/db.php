<?php
function getDb(){
/*
  blocco dei parametri di connessione
*/
// nome di host
$host = "localhost";
// nome del database
$db = "system_ava";
// username dell'utente in connessione
$user = "root";
// password dell'utente
$password = "";

/*
  blocco try/catch di gestione delle eccezioni
*/
try {
  // stringa di connessione al DBMS
  $connessione = new PDO("mysql:host=$host;dbname=$db", $user, $password);
  /*
  Avremmo potuto anche omettere dbname in questo modo:
  $connessione = new PDO("mysql:host=$host", $user, $password);
  */
  // notifica in caso di connessione effettuata
  
}
catch(PDOException $e)
{
  // notifica in caso di errore nel tentativo di connessione
 echo 'ok';
}
return $connessione;
}
?>