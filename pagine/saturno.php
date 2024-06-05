<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saturno</title>
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
            <img src="../media/immagini/saturno.jpg" alt="">
        </div>
        <div class="heropianeti__content reveal">
            <h1 class="cw">SATURNO</h1>
            <P class="small-text1 cww">Saturno è il sesto pianeta del sistema solare in ordine di distanza dal Sole e il secondo pianeta più massiccio. Rispetto alla Terra, ha un raggio medio 9,48 volte maggiore e una massa 95 volte superiore. Saturno è classificato come gigante gassoso, insieme a Giove, Urano e Nettuno, ed è composto per il 95% da idrogeno e per il 3% da elio, a cui seguono gli altri elementi; il nucleo, consistente in silicati e ghiacci, è circondato da uno spesso strato di idrogeno metallico e quindi da uno strato esterno gassoso.</P>
        </div>
    </div>
    
    <div class="pianetiv">
        <div class="pianetiv__content">
            <p class="small-text1 cw">Il pianeta ha un esteso e vistoso sistema di anelli esterni, che consistono principalmente in particelle di ghiaccio e polveri di silicati. Insieme agli anelli, orbitano 146 lune conosciute, e per questo Saturno detiene il primato per il maggior numero di satelliti nel sistema solare. Tra queste lune, Titano è la più grande (più grande di Mercurio e Plutone) ed anche l'unica del sistema solare ad avere un'atmosfera di grandissimo interesse. I venti, nell'atmosfera di Saturno, possono raggiungere i 1800 km/h, risultando significativamente più veloci di quelli su Giove e leggermente meno veloci di quelli che spirano nell'atmosfera di Nettuno.
                Il nome deriva dall'omonimo dio della mitologia romana, omologo del titano greco Crono. Il suo simbolo astronomico (♄) è, una rappresentazione stilizzata della falce del dio dell'agricoltura. </p>
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