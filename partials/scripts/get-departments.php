<?php
//START CONNECTION TO DATABASE
require_once __DIR__ . '/database.php';

//RUN SQL QUERY
$sql = "SELECT *
        FROM `departments`";

$results=$conn->query($sql);

$departments = [];

if($results && $results->num_rows > 0){
    while($row = $results->fetch_assoc()){
        $departments[] = $row;
    }
}else{
    echo 'Query error';
}

//CLOSE DB CONNECTION
$conn->close();
?>

