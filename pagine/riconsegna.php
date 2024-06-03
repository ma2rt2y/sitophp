<?php
    session_start();

    require('../data/connessione_db.php');

    if(!isset($_SESSION['username'])){
        header ('location: login.php');
    }
    $username = $_SESSION["username"];

    if(isset($_POST['cod_navicelle'])){
        $navicelle = $_POST['cod_navicelle'];
        foreach($navicelle as $navicella){
            $sql = "UPDATE navicella
                    SET username_utente ='$username'
                    WHERE cod_navicella = '$cod_navicella'";
            $conn->query($sql) or die("<p>Query fallita!</p>");
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stile.css">
    <title>Riconsegna</title>
</head>
<body>
    <?php
        require("nav.php");
    ?>
    <div class="contenuto">
        <h1 style="text-align: center; margin-top: 0px;">Riconsegna la tua navicella</h1>
        <p>Devi riconsegnare una navicella? Sei nel posto giusto</p>
        <?php
            $sql="SELECT navicella.cod_navicella, navicella.nome_navicella, navicella.descrizione_txt pianeta.cod_pianeta, pianeta.nome_pianeta, pianeta.diametro
                    FROM navicella JOIN pianeta ON navicella.cod_navicella=pianeta.cod_navicella
                    WHERE cod_navicella=$cod_navicella "
      $ris=$conn->query($sql) or die("<p>errore</p>");
      if( $ris->num_rows == 0){
        echo "<p>Non ci sono navicelle da riconsegnare</p>";
      }else{
        echo "<form action='' method ='post'>";
        foreach($ris as $riga){
            $cod_navicella=$riga['cod_navicella'];
            $nome_navicella=$riga['nome_navicella'];
            $descrizione_txt=$riga['descrizione_txt'];
            $cod_pianeta=$riga['cod_pianeta'];
            $nome_pianeta=$riga['nome_pianeta'];
            $diametro=$riga['diamentro'];

   
        }
      }
      ?>
    </div>


    <?php
        require('footer1.php');
    ?>
    
</body>
</html>