<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Solare</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="stile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css" integrity="sha512-fJcFDOQo2+/Ke365m0NMCZt5uGYEWSxth3wg2i0dXu7A1jQfz9T4hdzz6nkzwmJdOdkcS8jmy2lWGaRXl+nFMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <?php
        require("pagine/nav.php");
    ?>

    <div class="hero">
        <div class="hero__content reveal">
            <h1 class="big-text">Il sistema solare</h1>
        </div>

        <video autoplay muted loop id="video">
            <source src="media/video/video.mp4" type="video/mp4">
        </video>
    </div>

    <div class="poster">
        <div class="grid">
            <div class="col poster__text">
                <h3 class="big-text">Informazioni generali</h3>
                <p class="normal-text">Il Sistema Solare è un sistema planetario costituito da corpi celesti mantenuti in orbita dalla forza gravitazionale del Sole. È situato nel braccio di Orione della Via Lattea e orbita attorno al centro galattico a una distanza di circa 26700 anni luce e una velocità di 230 km/s. Il sistema solare è costituito dal Sole, che occupa il 99,86% del sistema, da otto pianeti (Mercurio, Venere, Terra, Marte, Giove, Saturno, Urano e Nettuno), da cinque pianeti nani, dai rispettivi satelliti naturali, e da moltissimi altri corpi minori.</p>
            </div>

            <div class="col poster__dots">
                <div class="dot__img">
                </div>
            </div>
        </div>
    </div>

    <div class="poster1 mg1">
        <div class="poster1__img">
            <img src="media/immagini/big bang.png" alt="">
        </div>
        <div class="poster1__content">
            <h3 class="big-text">Storia Sistema Solare</h3>
            <h4 class="normal-text b">Come si è creato il sole</h4>
            <p class="small-text">Il Sole, una sfera di idrogeno ed elio, si è formato 4,5 miliardi di anni fa dal collasso di una nube di gas e polvere. Questo ha concentrato la massa al centro della nuvola, formando il nucleo solare. Intorno al nucleo si sono create diverse regioni, tra cui la zona radiativa, quella di convenzione, la fotosfera, la cromosfera e la corona.</p>
            <h4 class="normal-text b">Come si sono creati i pianeti</h4>
            <p class="small-text">I pianeti si formano da enormi nubi di gas e polvere chiamate nebulose, attraverso il collasso gravitazionale di questa. Le particelle di polvere nel disco si aggregano per formare protopianeti o planetesimi, che crescono gradualmente fino a diventare pianeti completi.</p>
            <h4 class="normal-text b">Cosa potrebbe accadere in futuro</h4>
            <p class="small-text">Dopo l'esaurimento dell'idrogeno nel nucleo solare, la gravità causerà il collasso e la temperatura salirà a 100 milioni di gradi Celsius. È probabile che il Sole inghiottirà i pianeti interni come Mercurio, Venere e forse anche la Terra, mentre i pianeti esterni potrebbero sopravvivere, offrendo speranza per la conservazione di alcuni corpi celesti solari.</p>
        </div>
    </div>

    <div class="cards clearfix">
        <div class="card">
            <img class="card__image" src="media/immagini/struttura.png" alt="">
            <div class="card__copy">
                <h3 class="normal-text">Struttura</h3>
                <p class="small-text">Il sistema solare è dominato dal Sole, con Giove e Saturno che costituiscono la gran parte della massa planetaria. Gli oggetti orbitano  seguendo le leggi di Keplero. Le orbite variano da quasi circolari a eccentriche, con perielio e afelio come punti estremi. Al suo interno, esso include pianeti rocciosi, cintura di asteroidi, e pianeti con satelliti e anelli.</p> 
            </div>
        </div>
        <div class="card">
            <img class="card__image" src="media/immagini/composizione.png" alt="">
            <div class="card__copy">
                <h3 class="normal-text">Composizione</h3>
                <p class="small-text">Nel sistema solare, l'idrogeno e l'elio predominano, concentrati per lo più nel Sole e nei giganti gassosi. Gli altri elementi sono presenti in minor quantità. Gran parte dei corpi orbita nella stessa direzione intorno al centro di massa. Il Sole contribuisce solo allo 0,5% del momento angolare totale del sistema, essendo molto vicino al baricentro.</p>

            </div>
        </div>
        <div class="card">
            <img class="card__image" src="media/immagini/corpi minori.png" alt="">
            <div class="card__copy">
                <h3 class="normal-text">Corpi minori</h3>
                <p class="small-text">La fascia principale degli asteroidi, situata tra Marte e Giove, contiene milioni di oggetti rocciosi con orbite variabili. Cerere è l'unico pianeta nano riconosciuto nella fascia principale, grazie alla sua forma sferoidale. Oltre Nettuno si estende la fascia di Kuiper, dove si trovano Plutone ed Eris, anch'essi pianeti nani. Esistono altri pianeti nani, come Makemake e Haumea.</p>
            </div>
        </div>
    </div>

    <div class="poster4 mg1">
        <div class="poster4__img">
            <video autoplay muted loop id="videosole">
                <source src="media/video/sole.mp4" type="video/mp4">
            </video>
        </div>
        <div class="poster4__content">
            <h3 class="big-text">Il Sole</h3>
            <p class="small-text">Il Sole (dal latino: Sol) è la stella madre del sistema solare, attorno alla quale orbitano gli otto pianeti principali (tra cui la Terra), i pianeti nani, i loro satelliti, innumerevoli altri corpi minori e la polvere diffusa per lo spazio, che forma il mezzo interplanetario.</p>
            <a href="pagine/sole.php" class="button cw">Discover more</a>
        </div>
    </div>

    <?php
        require('pagine/footer.php')
    ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.pkgd.min.js" integrity="sha512-Nx/M3T/fWprNarYOrnl+gfWZ25YlZtSNmhjHeC0+2gCtyAdDFXqaORJBj1dC427zt3z/HwkUpPX+cxzonjUgrA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
    $( document ).ready(function() {

        /* Open Panel */
        $(".mcell").on('click', function() {
            $(".menu").toggleClass("menu--open");
        });

    });

    ScrollReveal().reveal('.reveal', {distance: '100px', duration: 1500, easing: 'cubic-bezier(.215, .61, .355, 1)', interval: 600})
    ScrollReveal().reveal('.zoom', {duration: 1500, easing: 'cubic-bezier(.215, .61, .355, 1)', interval: 200,  scale: 0.65, mobile: false});

</script>

</body>
</html>