<?php
    if(isset($_POST["username"])) $username = $_POST["username"]; else $username = "";
    if(isset($_POST["password"])) $password = $_POST["password"]; else $password = "";
    if(isset($_POST["conferma"])) $conferma = $_POST["conferma"]; else $conferma = "";
    if(isset($_POST["nome"])) $nome = $_POST["nome"]; else $nome = "";
    if(isset($_POST["cognome"])) $cognome = $_POST["cognome"]; else $cognome = "";
    if(isset($_POST["telefono"])) $telefono = $_POST["telefono"]; else $telefono = "";
    if(isset($_POST["email"])) $email = $_POST["email"]; else $email = "";
    if(isset($_POST["comune"])) $comune = $_POST["comune"]; else $comune = "";
    if(isset($_POST["indirizzo"])) $indirizzo = $_POST["indirizzo"]; else $indirizzo = "";
?>

<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione</title>
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

    <div class="contenuto-background">
        <div class="contenuto">
            <h1 style="padding-bottom: 0px; margin-top: 70px" class="cw">Registrati</h1>
            <p style="padding-bottom: 3px" class="cw">Hai già un account? <a href="login.php" class="cw a1">accedi.</a></p>
            <form action="" method="post">
                <table class="tabella">
                    <tr>
                        <td><label for="username" class="normal-text cw">Username: </label></td>
                        <td><input type="text" name="username" id="username" value="<?php echo $username?>" required style=" background-color: #ffffff77;"></td>
                    </tr>
                    <tr>
                        <td><label for="password" class="normal-text cw">Password: </label></td>
                        <td><input type="password" name="password" id="password" required style=" background-color: #ffffff77;"></td>
                    </tr>
                    <tr>
                        <td><label for="conferma" class="normal-text cw">Conferma: </label></td>
                        <td><input type="password" name="conferma" id="conferma" required style=" background-color: #ffffff77;"></td>
                    </tr>
                    <tr>
                        <td><label for="nome" class="normal-text cw">Nome: </label></td>
                        <td><input type="text" name="nome" id="nome" value="<?php echo $nome?>" style=" background-color: #ffffff77;"></td>
                    </tr>
                    <tr>
                        <td><label for="cognome" class="normal-text cw">Cognome: </label></td>
                        <td><input type="text" name="cognome" id="cognome" value="<?php echo $cognome?>" style=" background-color: #ffffff77;"></td>
                    </tr>
                    <tr>
                        <td><label for="email" class="normal-text cw">Email: </label></td>
                        <td><input type="text" name="email" id="email" value="<?php echo $email?>" style=" background-color: #ffffff77;"></td>
                    </tr>
                    <tr>
                        <td><label for="telefono" class="normal-text cw">Telefono: </label></td>
                        <td><input type="text" name="telefono" id="telefono" value="<?php echo $telefono?>" style=" background-color: #ffffff77;"></td>
                    </tr>
                    <tr>
                        <td><label for="comune" class="normal-text cw">Comune: </label></td>
                        <td><input type="text" name="comune" id="comune" value="<?php echo $comune?>" style=" background-color: #ffffff77;"></td>
                    </tr>
                    <tr>
                        <td><label for="indirizzo" class="normal-text cw">Indirizzo: </label></td>
                        <td><input type="text" name="indirizzo" id="indirizzo" value="<?php echo $indirizzo?>" style=" background-color: #ffffff77;"></td>
                    </tr>
                </table>
                <div class="button-container" style="margin-top: 5px">
                    <input type="submit" class="button1 cw small-text" value="Invia">
                </div>
            </form>

            <?php
                if(isset($_POST["username"]) and isset($_POST["password"])){
                    if($_POST["username"] == "" or $_POST["password"] == ""){
                        echo "<p class='c.text cw normal-text'>Username e password non possono essere vuoti</p>";
                    } elseif($_POST["password"] != $_POST["conferma"]){
                        echo "<p class='c.text cw normal-text'>Le due password non corrispondono!</p>";
                    } else{
                        require("../data/connessione_db.php");

                        $myquery = "SELECT username, password
                                    FROM utenti
                                    WHERE username = '$username'";

                        $ris = $conn -> query($myquery) or die("<p>Query fallita!".$conn->error."</p>");
                        if($ris->num_rows > 0){
                            echo "<p class='c.text cw normal-text'>Username già esistente</p>";
                        } else{
                            $sql = "INSERT INTO utenti(username, password, nome_utente, cognome, email, telefono, comune, indirizzo)
                                    VALUES ('$username', '$password', '$nome', '$cognome', '$email', '$telefono', '$comune', '$indirizzo')";
                            
                            if($conn->query($sql) == true){
                                session_start();
                                $_SESSION["username"] = $username;

                                $conn->close();
                                echo "<p class='c.text cw normal-text'>Utente registrato con successo! Verrai mandato alla pagina tra 5 secondi</p>";
                                header("Refresh: 5, URL=pianeti.php");
                            } else{
                                echo "<p class='c.text cw normal-text'>Non è stato possibile registrare l'utente.</p>";
                                
                            }
                        }
                    }
                }
            ?>
        </div>
    </div>

    <?php
        require('footer1.php');
    ?>

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
