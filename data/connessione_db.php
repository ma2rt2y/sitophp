<?php
    $conn = new mysqli("localhost", "root", "", "database_php");
    if($conn->connest_error){
        die("<p>Connessione database fallita per il seguente motivo: ".$conn->connect_error."</p>");
    }
?>