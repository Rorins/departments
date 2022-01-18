<?php
//START CONNECTION TO DATABASE
require_once __DIR__ . '/database.php';

//RUN SQL QUERY
//stringa salvata in variabile che verrà utilizzata successivamente come parametro di QUERY
$sql = "SELECT *
        FROM `departments`";

//prendo istanza CONN e chiamo il metodo QUERY che deriva dalla classe, e uso come parametro SQL
$results=$conn->query($sql);

$departments = [];

//if results truthie and proprietà NUM_ROWS di oggettone RESULTS > 0
//Con il primo check controlliamo che il nostro $sql = "SELECT *FROM `departments`";
//non sia sintatticamente sbagliato (es.typo di select)
//col secondo check controlliamo di avere dei record
if($results && $results->num_rows > 0){
//Come prendo i record ritornati dalla query
//il metodo socket ci permette di accedere a entità PRIVATE della tabella
//devo LOOPPARE i vari record
//Le tabelle diventano array associativi che vengono salvate in ROW
//While row è true ll fetch_assoc percorre gli array associativi e una volta arrivato
// alla fine degli array restituisce NULL e la condizione diventa falsa
    while($row = $results->fetch_assoc()){

        $departments[] = $row;
    }
}else{
    echo 'Query error';
}

//CLOSE DB CONNECTION
$conn->close();
?>

