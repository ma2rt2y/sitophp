<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marte</title>
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

    <div class="heropianeti">
        <div class="heropianeti__img">
            <img src="../media/immagini/marte1.jpg" alt="">
        </div>
        <div class="heropianeti__content reveal">
            <h1 class="cw">MARTE</h1>
            <P class="small-text1 cww">Marte, il quarto pianeta del sistema solare, si distingue per la sua posizione a circa 1,52 unità astronomiche dal Sole. È visibile ad occhio nudo e rappresenta l'ultimo dei pianeti di tipo terrestre, preceduto da Mercurio, Venere e la Terra. La sua caratteristica colorazione rossastra deriva dall'abbondante presenza di ossido di ferro sulla superficie, motivo per cui è comunemente noto come il "pianeta rosso". Questo nome lo collega alla divinità della mitologia romana Marte, associata al dio della guerra, da cui prende il nome.
                Nonostante le temperature superficiali medie piuttosto basse, che oscillano tra -120 e -14 gradi Celsius, e la sua atmosfera estremamente rarefatta, Marte presenta caratteristiche che lo rendono il pianeta più simile alla Terra all'interno del sistema solare.</P>
        </div>
    </div>

    <div class="pianetiv">
        <div class="pianetiv__content">
            <p class="small-text1 cw">Le sue dimensioni, intermedie tra quelle terrestri e quelle della Luna, e la sua inclinazione dell'asse di rotazione e durata del giorno simili a quelle terrestri, lo rendono oggetto di grande interesse scientifico.
                La superficie di Marte è un paesaggio affascinante e variegato, caratterizzato da vulcani, valli, calotte polari e deserti sabbiosi. Sebbene ci siano indizi di un passato con la presenza di acqua, la superficie marziana è fortemente craterizzata, principalmente a causa dell'assenza di attività tettonica delle placche. Inoltre, l'atmosfera estremamente sottile del pianeta non è in grado di erodere efficacemente le formazioni geologiche, contribuendo alla loro conservazione nel tempo.</p>
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
        $(".mcell").on('click', function() {
            $(".menu").toggleClass("menu--open");
        });

    });

    ScrollReveal().reveal('.reveal', { distance: '100px',  duration: 1500, easing: 'cubic-bezier(.215, .61, .355, 1)', interval: 600});

</script>

</body>
</html>