<?php
    if(!isset($_GET['cod_navicella'])){
        die("Errore!");
    }
    else{
        $cod_navicella=$_GET['cod_navicella'];
        require('../data/connessione_db.php');
        $sql="SELECT navicella.cod_navicella, navicella.nome_navicella, navicella.img, pianeta.cod_pianeta, pianeta.nome_pianeta, pianeta.diametro
              FROM navicella JOIN pianeta ON navicella.cod_pianeta=pianeta.cod_pianeta
              WHERE cod_navicella=$cod_navicella ";
        $ris=$conn->query($sql) or die("<p>errore</p>");
        if($ris->num_rows==0){
            die("navicella non trovata");
        }
        else{
            foreach($ris as $riga){
                $cod_navicella=$riga['cod_navicella'];
                $nome_navicella=$riga['nome_navicella'];
                $img=$riga['img'];
                // $descrizione_txt=$riga['descrizione_txt'];
                $cod_pianeta=$riga['cod_pianeta'];
                $nome_pianeta=$riga['nome_pianeta'];
                $diametro=$riga['diametro'];
            }
        }
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informazioni</title>
    <link rel="stylesheet" href="../stile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css" integrity="sha512-fJcFDOQo2+/Ke365m0NMCZt5uGYEWSxth3wg2i0dXu7A1jQfz9T4hdzz6nkzwmJdOdkcS8jmy2lWGaRXl+nFMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

</head>
<body>

    <?php
        require('nav.php');
    ?>
    <div class="navbar">
        
        <span class = "icon-bar"></span>
        <span class = "icon-bar"></span>
        <span class = "icon-bar"></span>
    </div>

    <div class="scheda">
        <h1><?php echo $nome_navicella?></h1>
        <div class="navicella">
            <?php
                echo "<img src='../media/immagini/navicelle/$img' alt='$img'>"
            ?>
            <!-- <div class="descrizione">
                <?php
                    $paragrafi=explode("\n", $descrizione_txt);
                    foreach($paragrafi as $paragrafo){
                        echo "<p>$paragrafo</p>";
                    }
                ?>
            </div> -->
        </div>
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