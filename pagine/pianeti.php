<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I pianeti</title>
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

    <div class="hero">
        <div class="hero__content reveal transition">
            <h1 class="big-text">I pianeti</h1>
        </div>

        <video autoplay muted loop id="videopianeti">
            <source src="../media/video/pianeti2.mp4" type="video/mp4">
        </video>
    </div>


    <div class="poster2p" data-flickity='{ "cellAlign": "left", "contain": true }'>
        <div class="poster2p-cell"><a href="mercurio.php" class="small-text cw">Mercurio</a></div>
        <div class="poster2p-cell__1"><a href="venere.php" class="small-text cw">Venere</a></div>
        <div class="poster2p-cell__2"><a href="terra.php" class="small-text cw">Terra</a></div>
        <div class="poster2p-cell__3"><a href="marte.php" class="small-text cw">Marte</a></div>
        <div class="poster2p-cell__4"><a href="giove.php" class="small-text cw">Giove</a></div>
        <div class="poster2p-cell__5"><a href="saturno.php" class="small-text cw">Saturno</a></div>
        <div class="poster2p-cell__6"><a href="urano.php" class="small-text cw">Urano</a></div>
        <div class="poster2p-cell__7"><a href="nettuno.php" class="small-text cw">Nettuno</a></div>
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