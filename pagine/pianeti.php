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
    <?php
        require("nav.php");
    ?>
    <div class="navbar">
        
        <span class = "icon-bar"></span>
        <span class = "icon-bar"></span>
        <span class = "icon-bar"></span>
    </div>

    <div class="hero" >
        <div class="hero__content" style = "width: 100%">
           <h1 class="big-text">Prenota un viaggio <br> sul tuo pianeta preferito</h1>
           <a href="ritira.php" class="button cw big2-text">Clicca qui!</a>
        </div>
    </div>


    <div class="poster2p" data-flickity='{ "cellAlign": "left", "contain": true }'>
        <div class="poster2p-cell"><a href="mercurio.php" class="medium-text cw">Mercurio</a></div>
        <div class="poster2p-cell__1"><a href="venere.php" class="medium-text cw">Venere</a></div>
        <div class="poster2p-cell__2"><a href="terra.php" class="medium-text cw">Terra</a></div>
        <div class="poster2p-cell__3"><a href="marte.php" class="medium-text cw">Marte</a></div>
        <div class="poster2p-cell__4"><a href="giove.php" class="medium-text cw">Giove</a></div>
        <div class="poster2p-cell__5"><a href="saturno.php" class="medium-text cw">Saturno</a></div>
        <div class="poster2p-cell__6"><a href="urano.php" class="medium-text cw">Urano</a></div>
        <div class="poster2p-cell__7"><a href="nettuno.php" class="medium-text cw">Nettuno</a></div>
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