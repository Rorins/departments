<?php
//DATABASE

//1. SETUP COSTANTI è come db_Host = 'localhost', ma su PHP si usano funzioni per fare costanti, vanno in MAIUSC
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','root');
define('DB_NAME','db-university');

//2. OPEN DB CONNETECTION, CONN E' UN ISTANZA/OGGETTO, setting è nome database,pw per accedere, username per accedere
$conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

//3. CHECK CONNESSIONE, se è andata a buon fine inizio interazioni col DB
if($conn->connect_error){
    die('connection failed');
}
?>