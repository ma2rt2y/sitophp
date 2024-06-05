<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sole</title>
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
            <img src="../media/immagini/sole.jpg" alt="">
        </div>
        <div class="heropianeti__content reveal">
            <h1 class="cw">SOLE</h1>
            <P class="small-text1 cww">Il Sole è una delle circa 300 miliardi di stelle nella nostra galassia, la Via Lattea. È un astro tutto sommato abbastanza comune: né troppo grande né troppo piccolo, né troppo freddo né troppo caldo.
                Ha una temperatura superficiale di 5500 °C, abbastanza per fondere qualunque materiale conosciuto, naturale o artificiale. Ha un diametro di quasi 1.400.000 km, che è circa 110 volte il diametro terrestre. La sua massa è di 2000 miliardi di miliardi di miliardi di tonnellate: circa 330.000 volte la massa del nostro pianeta. 
                Il Sole è una stella abbastanza periferica nella Via Lattea. Se il disco della nostra galassia ha un raggio di circa 50.000 anni luce, il Sole si trova più o meno a metà, a circa 27.000 anni luce dal centro galattico. Come tutte le altre stelle della Via Lattea, il Sole partecipa alla rotazione della galassia. Per compiere un giro completo impiega circa 230 milioni di anni, tempo che gli astronomi chiamano anno galattico. 
                </P>
        </div>
    </div>

    <div class="pianetiv">
        <div class="pianetiv__content">
            <p class="small-text1 cw"> Ogni secondo, nella parte centrale del Sole 600 milioni di tonnellate di nuclei di idrogeno (cioè protoni) si fondono per formare 596 milioni di tonnellate di nuclei di elio. Dove finiscono le 4 milioni di tonnellate che mancano all’appello? Vengono trasformate in energia, grazie all’equazione più famosa di tutta la fisica: E = mc². Ogni secondo il Sole produce una quantità di energia equivalente a quella di 6000 miliardi di bombe Hiroshima. Questa energia viene liberata sotto forma di fotoni, cioè luce. Quando i fotoni vengono prodotti sono altamente energetici, ma a furia di “rimbalzare” all’interno del Sole (il processo può durare anche più di 100.000 anni) perdono energia fino a rientrare nello spettro della luce visibile, cioè quella che i nostri occhi possono vedere. Insomma, l’energia che il Sole ci manda era prima contenuta nei suoi protoni.</p>
        </div>
        <div class="pianetiv__img">
            <video autoplay muted loop id="videoz">
                <source src="../media/video/videoz.mp4" type="video/mp4">
            </video>
        </div>
    </div>

    <div class="strutturadelsole">
        <img src="../media/immagini/struttura del sole.jpg" alt="">
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