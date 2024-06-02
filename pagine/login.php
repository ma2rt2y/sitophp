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
    <link rel="stylesheet" href="../stile.css">
    <title>Login</title>
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
                        FROM utente
                        WHERE username='$username' and password='$password'";
                    $ris=$conn->query($sql) or die("<p>Query fallita</p>");
                    if($ris->num_rows==0){
                        echo "<p class='c.text cw normal-text'>username o password non trovati</p>";
                    }
                    else{
                        session_start();
                        $_SESSION['username']=$username;
                        $conn->close();
                        header("pianeti.php");
                    }
                }    
            ?>
        </div>
    </div>
    
</body>
</html>