<div class="nav">
    <div class="navsinistra">
        <?php
            if(basename($_SERVER["PHP_SELF"]) == "index.php"){
                echo <<<EOD
                    <div class='logo'>
                        <img src='media/immagini/logo.png' alt=''>
                    </div>
                EOD;
            } else{
                echo <<<EOD
                    <div class='logo'>
                        <img src='../media/immagini/logo.png' alt=''>
                    </div>
                EOD;
            }
        ?>
        <ul class="navlinks">
            <?php
                if(basename($_SERVER["PHP_SELF"]) == "index.php"){
                    echo "<li><a id='active'>Home</a></li>";
                    echo "<li><a href='pagine/pianeti.php'>Prenota</a></li>";
                    echo "<li><a href='pagine/chi siamo.php'>Chi siamo</a></li>";
                    echo "<li><a href='pagine/contatti.php'>Contatti</a></li>";
                    echo "<li><a href='pagine/login.php'>Login</a></li>";
                    echo "<li><a href='pagine/registrazione.php'>Registrazione</a></li>";
                    echo "<li><a href='pagine/logout.php'>Logout</a></li>";
                    echo "<li><a href='pagine/riconsegna.php'>Riconsegna</a></li>";
                } elseif(basename($_SERVER["PHP_SELF"]) == "giove.php" or basename($_SERVER["PHP_SELF"]) == "marte.php" or basename($_SERVER["PHP_SELF"]) == "mercurio.php" or basename($_SERVER["PHP_SELF"]) == "nettuno.php" or basename($_SERVER["PHP_SELF"]) == "saturno.php" or basename($_SERVER["PHP_SELF"]) == "sole.php" or basename($_SERVER["PHP_SELF"]) == "terra.php" or basename($_SERVER["PHP_SELF"]) == "urano.php" or basename($_SERVER["PHP_SELF"]) == "venere.php"){
                    echo "<li><a href='../index.php'>Home</a></li>";
                    echo "<li><a href='pianeti.php'>Prenota</a></li>";
                    echo "<li><a href='chi siamo.php'>Chi siamo</a></li>";
                    echo "<li><a href='contatti.php'>Contatti</a></li>";
                    echo "<li><a href='login.php'>Login</a></li>";
                    echo "<li><a href='registrazione.php'>Registrazione</a></li>";
                    echo "<li><a href='logout.php'>Logout</a></li>";
                    echo "<li><a href='pagine/riconsegna.php'>Riconsegna</a></li>";

                } else{
                    echo "<li><a href='../index.php'>Home</a></li>";
                    if(basename($_SERVER["PHP_SELF"]) == "pianeti.php"){
                        echo "<li><a id='active'>Prenota</a></li>";
                    } else{
                        echo "<li><a href='pianeti.php'>Prenota</a></li>";
                    }
                    if(basename($_SERVER["PHP_SELF"]) == "chisiamo.php"){
                        echo "<li><a id='active'>Chi siamo</a></li>";
                    } else{
                        echo "<li><a href='chi siamo.php'>Chi siamo</a></li>";
                    }
                    if(basename($_SERVER["PHP_SELF"]) == "contatti.php"){
                        echo "<li><a id='active'>Contatti</a></li>";
                    } else{
                        echo "<li><a href='contatti.php'>Contatti</a></li>";
                    }
                    if(basename($_SERVER["PHP_SELF"]) == "login.php"){
                        echo "<li><a id='active'>Login</a></li>";
                    } else{
                        echo "<li><a href='login.php'>Login</a></li>";
                    }
                    if(basename($_SERVER["PHP_SELF"]) == "registrazione.php"){
                        echo "<li><a id='active'>Registrazione</a></li>";
                    } else{
                        echo "<li><a href='registrazione.php'>Registrazione</a></li>";
                    }
                    if(basename($_SERVER["PHP_SELF"]) == "logout.php"){
                        echo "<li><a id='active'>Logout</a></li>";
                    } else{
                        echo "<li><a href='logout.php'>Logout</a></li>";
                    }
                    if(basename($_SERVER["PHP_SELF"]) == "riconsegna.php"){
                        echo "<li><a id='active'>Riconsegna</a></li>";
                    } else{
                        echo "<li><a href='riconsegna.php'>Riconsegna</a></li>";
                    }
                }
            ?>
        </ul>
    </div>
</div>
