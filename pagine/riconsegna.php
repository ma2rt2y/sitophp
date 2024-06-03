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
            $sql="SELECT navicella.nome_navicella, pianeta.nome_pianeta
                  FROM navicella JOIN viaggia ON navicella.cod_navicella = viaggia.cod_navicella
                                 JOIN pianeta ON viaggia.cod_pianeta = pianeta.cod_pianeta
                  WHERE nome_navicella LIKE '%$nome_navicella%'
                  AND nome_pianeta LIKE '%$nome_pianeta%'";

        $ris=$conn->query($sql) or die("<p>errore</p>");
        if( $ris->num_rows == 0){
            echo "<p>Non ci sono navicelle da riconsegnare</p>";
        }else{
            echo "<form action='' method ='post'>";
            foreach($ris as $riga){
                $nome_navicella=$riga['nome_navicella'];
                $nome_pianeta=$riga['nome_pianeta'];

                echo <<<EOD
                        <div class="elenco_navicelle">
                            <div class="card">
                                <div class="card_image">
                                    <img src="../immagini/$nome_navicella" alt="$nome_navicella">
                                </div>
                                <div class="card__copy p">
                                    <div class="card-libro__testo__centrato">
                                        <p>Titolo: $nome_navicella</p>
                                        <p><input type='checkbox' name='nome_navicella[]' value='$nome_navicella'/> Spunta per riconsegnare la navicella</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    EOD;
            }
            echo "<p style='text-align: center; padding-top: 10px'><input type='submit' value='Conferma'/></p>";
            echo "</form>";
        }
      ?>
    </div>


    <?php
        require('footer1.php');
    ?>
    
</body>
</html>