<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terra</title>
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
            <img src="../media/immagini/terra1.png" alt="">
        </div>
        <div class="heropianeti__content reveal">
            <h1 class="cw">TERRA</h1>
            <P class="small-text1 cww">La Terra, il terzo pianeta del sistema solare, si distingue per la sua posizione privilegiata e le sue caratteristiche uniche (come per esempio un ambiente vitale per una vasta gamma di forme di vita). La sua superficie è ricca di acqua in tutti e tre gli stati di aggregazione, con un'atmosfera dominata da azoto e ossigeno che contribuisce a proteggere la biosfera dai pericoli cosmici e solari. Questo rende la Terra l'unico pianeta conosciuto in grado di sostenere la vita come la conosciamo.
                La Terra è conosciuta anche come il "pianeta azzurro", un epiteto reso celebre dalle parole di Jurij Gagarin, il primo uomo nello spazio, che osservando la Terra dalla capsula spaziale, rimarcò la sua bellezza e predominanza di blu. La sua formazione risale a circa 4,54 miliardi di anni fa, e ha un satellite naturale, la Luna, la cui età si stima sia compresa tra 4,29 e 4,56 miliardi di anni.</P>
        </div>
    </div>

    <div class="pianetiv">
        <div class="pianetiv__content">
            <p class="small-text1 cw">La Terra è caratterizzata da un'attività geologica dinamica, con placche tettoniche che si muovono sulla sua superficie e influenzano la formazione delle montagne e degli oceani. Al suo interno, presenta un mantello relativamente solido e un nucleo diviso in esterno e interno, responsabile della generazione del campo magnetico che protegge il pianeta dalle radiazioni solari dannose. 
                Le influenze esterne, come quelle della Luna sulle maree e sulla stabilità dell'asse, hanno giocato un ruolo significativo nella storia del pianeta. Anche l'impatto di comete e asteroidi ha plasmato la sua superficie e alterato il corso della sua vita nel corso dei millenni. Il simbolo astronomico della Terra, con un cerchio e una croce, riflette la sua posizione nell'universo e la sua importanza cosmica.</p>
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