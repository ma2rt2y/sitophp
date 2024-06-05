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
                    SET username_utente = NULL
<<<<<<< HEAD
                    WHERE cod_navicella = '$navicella'";
=======
                    WHERE cod_navicella = '".$navicella."'";
>>>>>>> 615255a146059733b07f620110ca7b5b981d7771
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css" integrity="sha512-fJcFDOQo2+/Ke365m0NMCZt5uGYEWSxth3wg2i0dXu7A1jQfz9T4hdzz6nkzwmJdOdkcS8jmy2lWGaRXl+nFMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <title>Riconsegna</title>
</head>
<body>
    <?php
        require("nav.php");
    ?>
    <div class="navbar">
        
        <span class = "icon-bar"></span>
        <span class = "icon-bar"></span>
        <span class = "icon-bar"></span>
    </div>
    <div class="contenuto">
        <h1 style="text-align: center; margin-top: 0px; padding-top: 120px;" class="cn">Riconsegna la tua navicella</h1>
        <p class="cn">Devi riconsegnare una navicella? Sei nel posto giusto</p>
        <?php
            $sql = "SELECT navicella.cod_navicella, navicella.nome_navicella, navicella.cod_pianeta, pianeta.nome_pianeta, navicella.prezzo, navicella.img, navicella.username_utente
                    FROM pianeta JOIN navicella ON pianeta.cod_pianeta = navicella.cod_pianeta
                                LEFT JOIN utenti ON navicella.username_utente = utenti.username
                    WHERE username LIKE '%$username%'";

            $ris=$conn->query($sql) or die("<p>Query fallita".$conn->error."</p>");
            if( $ris->num_rows == 0){
                echo "<p>Non ci sono navicelle da riconsegnare</p>";
            }else{
                echo "<form action='' method ='post'>";
                foreach($ris as $riga){
                    $cod_navicella = $riga["cod_navicella"];
                    $nome_navicella = $riga["nome_navicella"];
                    $img = $riga["img"];
                    $prezzo = $riga["prezzo"];
                    $nome_pianeta = $riga["nome_pianeta"];

                    echo <<<EOD
                    <div class="elenco_navicelle">
                        <div class="card-navicelle">
                            <div class="card-navicelle__img">
                                <img src="../media/immagini/navicelle/$img" alt="$img">
                            </div>
                            <div class="card-navicelle__testo">
                                    <div class="card-navicelle__testo__sinistra">
                                        <p>Nome navicella: $nome_navicella</p>
                                        <p>Prezzo: $prezzo £</p>
                                        <p>Nome pianeta: $nome_pianeta</p>
                                        <p class="link-scheda"><a href="scheda-navicella.php?cod_navicella=$cod_navicella">Scheda navicella</a></p>
                                        <p><input type='checkbox' name='cod_navicelle[]' value='$cod_navicella'/> Spunta riconsegnare</p>
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

<script>
    $( document ).ready(function() {

        /* Open Panel */
        $(".navbar").on('click', function() {
            $(".nav").toggleClass("menu--open");
        });

    });

    ScrollReveal().reveal('.reveal', { distance: '100px',  duration: 1500, easing: 'cubic-bezier(.215, .61, .355, 1)', interval: 600});

</script>
    
</body>
</html>           