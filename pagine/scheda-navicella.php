<?php
    if(!isset($_GET['cod_navicella'])){
        die("Errore!");
    }
    else{
        $cod_navicella=$_GET['cod_navicella'];
        require('../data/connessione_db.php');
        $sql="SELECT navicella.cod_navicella, navicella.nome_navicella, navicella.descrizione_txt pianeta.cod_pianeta, pianeta.nome_pianeta, pianeta.diametro
              FROM navicella JOIN pianeta ON navicella.cod_navicella=pianeta.cod_navicella
              WHERE cod_navicella=$cod_navicella "
        $ris=$conn->query($sql) or die("<p>Query fallita</p>");
        if($ris->num_rows==0){
            die("navicella non trovata");
        }
        else{
            for($ris as $riga){
                $cod_navicella=$riga['cod_navicella'];
                $nome_navicella=$riga['nome_navicella'];
                $descrizione_txt=$riga['descrizione_txt']
                $cod_pianeta=$riga['cod_pianeta'];
                $nome_pianeta=$riga['nome_pianeta']
                $diametro=$riga['diamentro']
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

    <div class="scheda">
        <h1><?php echo $nome_navicella?></h1>
        <div>
            <?php
                echo "<img src='../media/immagini/$navicella_nome' alt='$navicella_nome'>"
            ?>
            <div class="descrizione">
                <?php
                    $paragrafi=explode("\n", $descrizione_txt);
                    foreach($paragrafi as $paragrafo){
                        echo "<p>$paragrafo</p>";
                    }
                ?>
            </div>
        </div>
    </div>

    <?php
        require('footer1.php');
    ?>
    
</body>
</html>