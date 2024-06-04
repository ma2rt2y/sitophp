<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header('location: login.php');
    }

    $username = $_SESSION["username"];

    require("../data/connessione_db.php");

    if(isset($_POST['cod_navicelle'])){
        foreach($_POST['cod_navicelle'] as $cod_navicella){
            $sql = "UPDATE navicella
                    SET username_utente ='$username'
                    WHERE cod_navicella = '$cod_navicella'";
            $conn->query($sql) or die("<p>Query fallita!</p>");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prenota</title>
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
    <div class="contenuto">
        <h1 style="text-align: center; margin-top: 0px;">Prenota la tua navicella</h1>
        <p>Cerca un pianeta che vuoi visitare o il nome di una navicella</p>
        <form action="" method="post">
            <table id="tab">
                <tr>
                    <td><label for="nome_navicella">Nome navicella:</label></td>
                    <td><input class="input_ricerca" type="text" name="nome_navicella" id="nome_navicella" value="<?php echo isset($_POST['nome_navicella']) ? $_POST['nome_navicella'] : ''; ?>"></td>
                </tr>
                <tr>
                    <td><label for="nome_pianeta">Nome pianeta:</label></td>
                    <td><input class="input_ricerca" type="text" name="nome_pianeta" id="nome_pianeta" value="<?php echo isset($_POST['nome_pianeta']) ? $_POST['nome_pianeta'] : ''; ?>"></td>
                </tr>
            </table>
        </form>
    </div>

    <form action="" method = "post">
        <?php
            if(isset($_POST["nome_navicella"]) and isset($_POST["nome_pianeta"]) and isset($_POST["prezzo"])){
                $nome_navicella = $_POST["nome_navicella"];
                $nome_pianeta = $_POST["nome_pianeta"];
                $prezzo = $_POST["prezzo"];

                $sql = "SELECT navicella.nome_navicella, pianeta.nome_pianeta, navicella.prezzo
                        FROM pianeta JOIN navicella ON pianeta.cod_navicella = navicella.cod_navicella
                                        JOIN utenti ON navicella.username_utente = utenti.username
                        WHERE nome_navicella LIKE '%$nome_navicella%'
                            AND nome_pianeta LIKE '%$nome_pianeta%'
                            AND prezzo LIKE '%$prezzo%'";
                
                $ris = $conn->query($sql) or die("<p>Query fallita!</p>");
                if ($ris->num_rows > 0) {
                    echo "<p>Scegli tra le soluzioni trovate la navicela che preferisci.</p>";
                    
                    foreach($ris as $riga){
                        $cod_navicella = $riga["cod_navicella"];
                        $nome_navicella = $riga["nome_navicella"];
                        $img = $riga["img_navicella"];
                        $prezzo = $riga["prezzo"];
                        $nome_pianeta = $riga["nome_pianeta"];

                        echo <<<EOD
                        <div class="elenco_navicelle">
                            <div class="card-navicelle">
                                <div class="card-navicelle__img">
                                    <img src="../media/immagini/navicelle/$img" alt="$img">
                                </div>
                                <div class="card-navicelle__testo">
                                        <div class="card-navicelle__testo__centrato">
                                            <p>Nome navicella: $nome_navicella</p>
                                            <p>Prezzo: $prezzo</p>
                                            <p>Nome pianeta: $nome_pianeta</p>
                                            <p class="link-scheda"><a href="scheda-navicella.php?cod_navicella=$cod_navicella">Scheda navicella</a></p>
                        EOD; 
                        if ($riga["username_utente"]){
                            echo "          <p>Disponibile: No</p>";
                        }
                        else {
                            echo "          <p>Disponibile: Sì</p>";
                            echo "          <p><input type='checkbox' name='cod_navicelle[]' value='$cod_navicella'/> Spunta per prendere il libro</p>";
                        }
                        echo <<<EOD
                                        </div>
                                    </div>
                                </div>
                            </div>
                        EOD;
                    }
                    echo <<<EOD
                        "<div class="button-container">
                            <input type="submit" class="button1 cw small-text" value="Conferma">
                        </div>"
                    EOD;                }
                else {
                    echo "<p>Non ho trovato alcuna navicella che rispetti le sue richieste</p>";
                }
                echo "</table>";
            }


                            /*echo <<<EOD 
                                <div class="elenco_navicelle">
                                <div class="card-navicelle">
                                    <div class="card-navicelle__img">
                                        <img src="../media/immagini/navicelle/$img" alt="$img">
                                    </div>
                                    <div class="card-navicelle__testo">
                                        <div class="card-navicelle__testo__centrato">
                                            <p>Nome navicella: $nome_navicella</p>
                                            <p>Prezzo: $prezzo</p>
                                            <p>Nome pianeta: $nome_pianeta</p>
                                            <p class="link-scheda"><a href="scheda-navicella.php?cod_navicella=$cod_navicella">Scheda navicella</a></p>
                        EOD; 
                        if ($riga["username_utente"]){
                            echo "          <p>Disponibile: No</p>";
                        }
                        else {
                            echo "          <p>Disponibile: Sì</p>";
                            echo "          <p><input type='checkbox' name='cod_navicelle[]' value='$cod_navicella'/> Spunta per prendere il libro</p>";
                        }
                        echo <<<EOD
                                        </div>
                                    </div>
                                </div>
                            </div>
                        EOD;
                    }
                    echo <<<EOD
                        "<div class="button-container">
                            <input type="submit" class="button1 cw small-text" value="Conferma">
                        </div>"
                    EOD;
                }
                else {
                    echo "<p>Non ho trovato alcuna navicella che rispetti le sue richieste</p>";
                }
                echo "</table>";
            }*/

        ?>
    </form>
    <?php
        require('footer1.php');
    ?>
    
</body>
</html>
<?php
    $conn->close();
?>