<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi siamo</title>
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

    <div class="gaiaemarty">
        <div class="col1 reveal">
            <h1 class="cw">La nostra storia</h1>
        </div>
        <div class="col2 mg2 reveal">
            <h3 class="normal-text cw">Gaia Fedeli</h3>
            <p class="small-text cw">Gaia ha solamente diciassette anni ed è già un'imprenditrice di successo. Ha creato recentemente questo sito per un compito scolastico, nel quale ha preso 10 poiché è naturalmente piaciuto molto al prof. Ha i capelli castani e mossi, alta 172cm, frequentatrice del Liceo A. Banfi di Vimercate dove ha conosciuto il professore Francesco Tormene (il migliore che potesse mai avere).</p>
            <h3 class="normal-text cw">Martina Villa</h3>
            <p class="small-text cw">Martina ha appena compiuto i diciotto anni ed ha già conseguito due lauree in medicina. Ha creato recentemente questo sito per un compito scolastico, nel quale ha preso 10 poiché è naturalmente piaciuto molto al prof. Ha i capelli di color castano scuro e ricci, alta 160cm, frequentatrice del Liceo A. Banfi di Vimercate dove ha conosciuto il professore Francesco Tormene (il migliore che potesse mai avere).</p>            
            <h3 class="normal-text cw">Carolina Prosperi</h3>
            <p class="small-text cw">Carolina ormai diciottenne ha aperto ben 3 studi veterinari. Ha creato recentemente questo sito per un compito scolastico, nel quale ha preso 10 poiché è naturalmente piaciuto molto al prof. Ha i capelli di color castano e ricci, alta 170cm, frequentatrice del Liceo A. Banfi di Vimercate dove ha conosciuto il professore Francesco Tormene (il migliore che potesse mai avere).</p>
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

    ScrollReveal().reveal('.reveal', {distance: '100px', duration: 1500, easing: 'cubic-bezier(.215, .61, .355, 1)', interval: 600})

</script>

</body>
</html>