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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stile.css">
    <title>Registrazione</title>
</head>
<body>
    <?php
        require("nav.php");
    ?>

    <div class="contenuto-background">
        <div class="contenuto">
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
                <div class="button-container">
                    <input type="submit" class="button1 cw small-text" value="Invia">
                </div>
            </form>
        </div>
    </div>

    
    <?php
        if(isset($_POST["username"]) and isset($_POST["password"])){
            if($_POST["username"] == "" or $_POST["password"] == ""){
                echo "<p>Username e password non possono essere vuoti</p>";
            } elseif($_POST["password"] != $_POST["conferma"]){
                echo "<p>Le due password non corrispondono!</p>";
            } else{
                require("../data/connessione_db.php");

                $myquery = "SELECT username, password
                            FROM utenti
                            WHERE username = '$username'
                                AND password = '$password'";

                $ris = $conn -> query($myquery) or die("<p>Query fallita!".$conn->error."</p>");
                if($ris->num_rows > 0){
                    echo "<p>Utente già esistente</p>";
                } else{
                    $sql = "INSERT INTO utenti(username, password, nome_utente, cognome, email, telefono, comune, indirizzo)
                            VALUES ('$username', '$password', '$nome', '$cognome', '$email', '$telefono', '$comune', '$indirizzo')";
                    
                    if($conn->query($sql) == true){
                        session_start();
                        $_SESSION["username"] = $username;

                        $conn->close();
                        echo "<p>Utente registrato con successo! Sarai mandato alla pagina tra 5 secondi</p>";
                        header("Refresh: 5, URL=home.php");
                    } else{
                        echo "<p>Non è stato possibile registrare l'utente.</p>";
                        $conn->close();
                    }
                }
            }
        } else{echo "CIAO";}
    ?>

    <?php
        require('footer1.php');
    ?>
    
</body>
</html>
