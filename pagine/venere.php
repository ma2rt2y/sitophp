<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venere</title>
    <link rel="stylesheet" href="../stile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css" integrity="sha512-fJcFDOQo2+/Ke365m0NMCZt5uGYEWSxth3wg2i0dXu7A1jQfz9T4hdzz6nkzwmJdOdkcS8jmy2lWGaRXl+nFMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

</head>

<body>
    <div class="header">
        <div class="logo">
            <img src="../media/immagini/logo.png" alt="">
        </div>
        <ul class="menu">
            <li><a href="../index.php">Home</a></li>
            <li><a href="pianeti.php">Pianeti</a></li>
            <li><a href="chi siamo.php">Chi siamo</a></li>
            <li><a href="contatti.php">Contatti</a></li>
        </ul>

        <div class="mcell">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>


    <div class="heropianeti">
        <div class="heropianeti__img">
            <img src="../media/immagini/venere1.jpg" alt="">
        </div>
        <div class="heropianeti__content reveal">
            <h1 class="cw">VENERE</h1>
            <P class="small-text1 cww">Venere è il secondo pianeta del sistema solare in ordine di distanza dal Sole con una rivoluzione in 225 giorni. Prende il nome dalla dea romana dell'amore e della bellezza e il suo simbolo astronomico è la rappresentazione stilizzata della mano di Venere che sorregge uno specchio (Unicode: ♀). Con una magnitudine massima di −4,6, è l'oggetto naturale più luminoso nel cielo notturno dopo la Luna. Venere è visibile soltanto poco dopo il tramonto e poco prima dell'alba. Per questo gli antichi Greci e i Romani l'hanno chiamata stella della sera o del mattino. La scoperta che si tratta dello stesso oggetto sarebbe stata introdotta in occidente da Pitagora, ma sarebbe dovuta agli astronomi della Mesopotamia. Infatti nella Tavoletta di Venere di Ammi-Saduqa sono riportate osservazioni risalenti al 1550 a.C. o antecedenti, in cui non si fa distinzione fra l'astro del mattino e quello della sera.</P>
        </div>
    </div>
    
    <div class="pianetiv">
        <div class="pianetiv__content">
            <p class="small-text1 cw">Classificato come un pianeta terrestre, a volte è definito il "pianeta gemello" della Terra, cui è molto simile per dimensioni e massa. Tuttavia per altri aspetti è piuttosto differente dal nostro pianeta. L'atmosfera di Venere è costituita principalmente da anidride carbonica ed è molto più densa dell'atmosfera terrestre, con una pressione al livello del suolo pari a 92 atm. La densità e la composizione dell'atmosfera creano un impressionante effetto serra che rende Venere il pianeta più caldo del sistema solare.

                Venere è avvolto da uno spesso strato di nubi altamente riflettenti, composte principalmente di acido solforico, che impediscono la visione nello spettro visibile della superficie dallo spazio. Il pianeta non è dotato di satelliti o anelli e ha un campo magnetico più debole di quello terrestre.</p>
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