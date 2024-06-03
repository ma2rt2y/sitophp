<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giove</title>
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
            <img src="../media/immagini/giove.jpg" alt="">
        </div>
        <div class="heropianeti__content reveal">
            <h1 class="cw">GIOVE</h1>
            <P class="small-text1 cww">Giove è il quinto pianeta del sistema solare in ordine di distanza dal Sole e il più grande, con una massa pari a due volte e mezzo quella di tutti gli altri pianeti combinati. È un gigante gassoso simile a Saturno, Urano e Nettuno. La sua composizione è principalmente di idrogeno ed elio, con tracce di ammoniaca, metano e acqua. Si crede che abbia un nucleo roccioso, circondato da uno strato di idrogeno metallico e un'atmosfera densa.
                La sua atmosfera presenta bande e zone di colore variabile, con la famosa Grande Macchia Rossa. La sua rapida rotazione lo rende schiacciato ai poli, generando un forte campo magnetico e un'ampia magnetosfera. </P>
        </div>
    </div>

    <div class="pianetiv">
        <div class="pianetiv__content">
            <p class="small-text1 cw">Nonostante sia stato considerato una "stella fallita", avrebbe dovuto aumentare la sua massa considerevolmente per innescare la fusione dell'idrogeno in elio. Il suo intenso campo gravitazionale influenza il sistema solare, mantenendo stabili le orbite dei pianeti interni e pulendo detriti spaziali. Giove ha numerosi satelliti e un sistema di anelli, oltre a due gruppi di asteroidi troiani.
                Culturalmente, Giove ha avuto un ruolo importante nelle credenze religiose di varie civiltà antiche, identificato come il re degli dei. Il suo simbolo astronomico è rappresentato da un fulmine stilizzato (♃).</p>
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