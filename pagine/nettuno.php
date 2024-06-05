<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nettuno</title>
    <link rel="stylesheet" href="../stile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css" integrity="sha512-fJcFDOQo2+/Ke365m0NMCZt5uGYEWSxth3wg2i0dXu7A1jQfz9T4hdzz6nkzwmJdOdkcS8jmy2lWGaRXl+nFMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

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

    <div class="heropianeti">
        <div class="heropianeti__img">
            <img src="../media/immagini/nettuno1.jpg" alt="">
        </div>
        <div class="heropianeti__content reveal">
            <h1 class="cw">NETTUNO</h1>
            <P class="small-text1 cww">Nettuno, l'ottavo pianeta del Sistema solare, è un mondo affascinante con diverse caratteristiche distintive. Scoperto nel 1846 da Johann Gottfried Galle e Heinrich Louis d'Arrest, Nettuno fu il primo pianeta ad essere individuato tramite calcoli matematici, a seguito di perturbazioni osservate nell'orbita di Urano. Il suo simbolo astronomico, ♆, rappresenta il tridente di Nettuno, dio romano del mare.</P>
        </div>
    </div>

    <div class="pianetiv">
        <div class="pianetiv__content">
            <p class="small-text1 cw">Con una massa 17 volte quella della Terra, Nettuno è leggermente più massiccio di Urano, ma meno denso. Come il suo quasi-gemello, è classificato come un "gigante ghiacciato", con un'atmosfera composta principalmente da idrogeno ed elio, arricchita da "ghiacci" come acqua, ammoniaca e metano. Questa composizione contribuisce al caratteristico colore verde acqua del pianeta. Nettuno ha un'intensa attività atmosferica, con venti che raggiungono velocità superiori ai 2100 km/h e una Grande Macchia Scura simile a quella di Giove.
                Il pianeta possiede un sistema di anelli e una serie di satelliti, tra cui Tritone, scoperto poco dopo Nettuno stesso. Visitato solo una volta dalla sonda Voyager 2 nel 1989, Nettuno continua a essere oggetto di studio e interesse scientifico, offrendo un'opportunità unica per comprendere i pianeti esterni del Sistema solare.</p>
        </div>
        <div class="pianetiv__img">
            <video autoplay muted loop id="videoz">
                <source src="../media/video/videoz.mp4" type="video/mp4">
            </video>
        </div>
        
    </div>

    <?php
        require('footer1.php');
    ?>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.pkgd.min.js" integrity="sha512-achKCfKcYJg0u0J7UDJZbtrffUwtTLQMFSn28bDJ1Xl9DWkl/6VDT3LMfVTo09V51hmnjrrOTbtg4rEgg0QArA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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