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
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="username">Username: </label></td>
                <td><input type="text" nome="username" id="username" value="<?php echo $username?>" required></td>
            </tr>
            <tr>
                <td><label for="password">Password: </label></td>
                <td><input type="password" nome="password" id="password" required></td>
            </tr>
            <tr>
                <td><label for="conferma">Conferma: </label></td>
                <td><input type="password" nome="password" id="password" required></td>
            </tr>
            <tr>
                <td><label for="nome">Nome: </label></td>
                <td><input type="text" nome="nome" id="nome" value="<?php echo $nome?>"></td>
            </tr>
            <tr>
                <td><label for="cognome">Cognome: </label></td>
                <td><input type="text" nome="cognome" id="cognome" value="<?php echo $cognome?>"></td>
            </tr>
            <tr>
                <td><label for="email">Email: </label></td>
                <td><input type="text" nome="email" id="email" value="<?php echo $email?>"></td>
            </tr>
            <tr>
                <td><label for="telefono">Telefono: </label></td>
                <td><input type="text" nome="telefono" id="telefono" value="<?php echo $telefono?>"></td>
            </tr>
            <tr>
                <td><label for="comune">Comune: </label></td>
                <td><input type="text" nome="comune" id="comune" value="<?php echo $comune?>"></td>
            </tr>
            <tr>
                <td><label for="indirizzo">Indirizzo: </label></td>
                <td><input type="text" nome="indirizzo" id="indirizzo" value="<?php echo $indirizzo?>"></td>
            </tr>
        </table>
        <input type="submit" value="Invia">
    </form>

    <p>
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

                    $ris = $conn -> query($myquery) or die("<p>Query fallita!"$conn->error"</p>");
                    if($ris->num_rows > 0){
                        echo "<p>Utente già esistente</p>";
                    } else{
                        $sql = "INSERT INTO utenti(username, password, nome, cognome, email, telefono, comune, inidirizzo)
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
            }
        ?>
    </p>
</body>
</html>
