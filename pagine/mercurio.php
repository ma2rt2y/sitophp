<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercurio</title>
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
            <img src="../media/immagini/mercurio.png" alt="">
        </div>
        <div class="heropianeti__content reveal">
            <h1 class="cw">MERCURIO</h1>
            <P class="small-text1 cww">Mercurio è il pianeta più interno del sistema solare e il più vicino al Sole. È il più piccolo e la sua orbita è anche la più eccentrica, ovvero la meno circolare, degli otto pianeti. Mercurio orbita in senso diretto (in senso antiorario, come tutti gli altri pianeti del sistema solare) a una distanza media di 0,3871 au dal Sole con un periodo siderale di 87,969 giorni terrestri. Mercurio è anche in risonanza orbitale-rotazionale: completa tre rotazioni intorno al proprio asse ogni due orbite attorno al Sole.
                L'eccentricità orbitale è abbastanza elevata e vale 0,205, ben 15 volte quella della Terra. Dalla superficie di Mercurio, il Sole ha un diametro apparente medio di 1,4°, circa 2,8 volte quello visibile dalla Terra, e arriva a 1,8° durante il passaggio al perielio.</P>
        </div>
    </div>

    <div class="pianetiv">
        <div class="pianetiv__content">
            <p class="small-text1 cw"> Il rapporto fra la radiazione solare al perielio e quella all'afelio è 2,3. Per la Terra questo rapporto vale 1,07. La superficie di Mercurio sperimenta la maggiore escursione termica tra tutti i pianeti, con temperature che nelle regioni equatoriali vanno da 100 K (−173 °C) della notte a 700 K (427 °C) del dì; le regioni polari invece sono costantemente inferiori a 180 K (−93 °C). Ciò è dovuto all'assenza dell'atmosfera che, se presente, svolgerebbe un ruolo nella ridistribuzione del calore. La superficie fortemente craterizzata indica che Mercurio è geologicamente inattivo da miliardi di anni.
                Conosciuto sin dal tempo dei Sumeri, il suo nome è tratto dalla mitologia romana. Il pianeta è stato associato a Mercurio, messaggero degli dèi, probabilmente a causa della rapidità del suo movimento nel cielo. Il suo simbolo astronomico è una versione stilizzata del caduceo del dio.</p>
        </div>
        <div class="pianetiv__img">
            <video autoplay muted loop id="videoz">
                <source src="../media/video/videoz.mp4" type="video/mp4">
            </video>
        </div>
    </div>

    <footer class="footer">
        <div class="grid">
            <div class="col">
                <h4 class="normal-text cw">Indirizzo</h4>
                <p class="cw">Via Euclide 4, Vimercate</p>
            </div>
            <div class="col">
                <h4 class="normal-text cw">Contatti</h4>
                <p class="cw">Numero di telefono: <br> <a href="https://wa.me/393288874222/?text=Ciao, chatta con noi se hai biogno di informazioni. Saremo felici di rispondere a tutti i tuoi dubbi." class="wa-link a1"> +39 328 887 4222 </a><br>
                Indirizzo mail: <br> francesco.tormene@liceobanfi.eu <br></p>
            </div>
            <div class="col">
                <h4 class="normal-text cw">Segiuci su</h4>
                <div class="social">
                    <p><a href="https://www.instagram.com/"><img src="../media/immagini/instagram.png" alt=""></a></p>
                    <p><a href="https://www.twitter.com/"><img src="../media/immagini/twitter.png" alt=""></a></p>
                    <p><a href="https://www.facebook.com/"><img src="../media/immagini/facebook.png" alt=""></a></p>
                    <p><a href="https://www.youtube.com/"><img src="../media/immagini/youtube.png" alt=""></a></p>
                </div>
            </div> 
        </div>
        <div class="footer__text2">
            <p class="cw small-text">Copyright 2024 © Tutti i diritti sono riservati  |  Partita Iva : 34183009845</p>
        </div>
    </footer>

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