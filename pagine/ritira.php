<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header('location: ../index.php');
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stile.css">
    <title>Prenota</title>
</head>
<body>
    <?php
        require("nav.php");
    ?>
    <div class="contenuto">
        <h1 style="text-align: center; margin-top: 0px;">Prenota la tua navicella</h1>
        <p>Cerca un pianea che vuoi visitare o il nome di una navicella</p>
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
</body>
</html>