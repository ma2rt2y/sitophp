<?php
    if(isset($_POST['username'])) $username=$_POST['username']; else $username='';
    if(isset($_POST['password'])) $password=$_POST['password']; else $password='';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

    <div class="contenuto-background">
        <div class="contenuto">
            <h1 class="cw">Login</h1>
            <p class="cw">Non hai ancorra un account? <a href="registrazione.php" class="cw a1">registrati.</a></p>
            <form action="" method="post">
                <table>
                    <tr>
                        <td><label for="username" class="normal-text cw">Username: </label></td>
                        <td><input type="text" name="username" id="username" value= "<?php echo $username ?>" required style=" background-color: #ffffff77;"></td>
                    </tr>
                    <tr>
                        <td><label for="password" class="normal-text cw">Password: </label></td>
                        <td><input type="password" name="password" id="password" required style=" background-color: #ffffff77;"></td>
                    </tr>
                </table>
                <div class="button-container">
                    <input type="submit" class="button1 cw small-text" value="Accedi">
                </div>
            </form>

            <?php
                if(isset($_POST['password']) and isset($_POST['username'])){
                    require("../data/connessione_db.php");
                    $sql="SELECT username, password 
                        FROM utenti
                        WHERE username='$username' and password='$password'";
                    $ris=$conn->query($sql) or die("<p>Query fallita</p>");
                    if($ris->num_rows==0){
                        echo "<p class='c.text cw normal-text'>username o password non trovati</p>";
                    }
                    else{
                        session_start();
                        $_SESSION['username']=$username;
                        $conn->close();
                        header("location: pianeti.php");
                    }
                }    
            ?>
        </div>
    </div>

    <?php
        require('footer1.php');
    ?>
    
</body>
</html>