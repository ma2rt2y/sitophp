<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urano</title>
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
            <img src="../media/immagini/urano1.png" alt="">
        </div>
        <div class="heropianeti__content reveal">
            <h1 class="cw">URANO</h1>
            <P class="small-text1 cww">Urano, il settimo pianeta del sistema solare, è un mondo unico con caratteristiche distintive. Scoperto nel 1781 da William Herschel, è stato inizialmente scambiato per una stella a causa della sua debole luminosità. Il suo simbolo astronomico, ♅, deriva dalla lettera H di Herschel. Urano è classificato come un "gigante ghiacciato" insieme a Nettuno, con una composizione atmosferica ricca di idrogeno, elio e "ghiacci" come acqua e ammoniaca. La sua atmosfera, estremamente fredda, presenta una struttura complessa di nubi.</P>
        </div>
    </div>

    <div class="pianetiv">
        <div class="pianetiv__content">
            <p class="small-text1 cw">Una caratteristica unica di Urano è l'orientamento del suo asse di rotazione, quasi parallelo al piano dell'orbita. Ciò causa estreme variazioni stagionali, poiché un polo del pianeta è esposto al Sole per metà del suo periodo di rivoluzione. Con un'inclinazione dell'asse di 98°, Urano ha una rotazione tecnicamente retrograda. Il pianeta possiede anelli planetari, una magnetosfera e diversi satelliti, e le osservazioni mostrano cambiamenti stagionali e attività climatica variabile. Urano continua a essere un oggetto di grande interesse scientifico, offrendo un'opportunità unica per comprendere i pianeti ghiacciati del sistema solare.</p>
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