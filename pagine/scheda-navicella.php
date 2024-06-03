<?php
    if(!isset($_GET['cod_navicella'])){
        die("Errore!");
    }
    else{
        $codice_navicella=$_GET['codice_navicella'];
        require('../data/connessione_db.php');

        $ris=$conn->query($sql) or die("<p>Query fallita</p>");
        if($ris->num_rows==0){
            die("navicella non trovata");
        }
        else{
            for($ris as $riga){

            }
        }
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        require('nav.php');
    ?>

    <h1><?php echo $titolo ?></h1>
    
</body>
</html>