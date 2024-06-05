<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatti</title>
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

    <div class="hero pd">
        <div class="hero__content reveal">
            <h2 class="normal-text cw">Hai altre informazioni da condividere? Allora non perdere tempo!</h2>
            <p class="small-text cw">contattaci al numero <a href="https://wa.me/393288874222/?text=Ciao, chatta con noi se hai biogno di informazioni. Saremo felici di rispondere a tutti i tuoi dubbi." class="wa-link a1"> +39 328 887 4222 </a></p>
            <p class="small-text cw">oppure scrivi un'email all'indirizzo francesco.tormene@liceobanfi.eu</p>
            <p class="small-text cw">preferisci vederci di persona? allora recati qui: Via Euclide 4, Vimercate</p>
        </div> 

        <video autoplay muted loop id="video">
            <source src="../media/video/contatti.mp4" type="video/mp4">
        </video>
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