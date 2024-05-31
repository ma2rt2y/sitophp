<div class="nav">
    <ul class="navlinks">
        <?php
            if(basename($_SERVER["PHP_SELF"]) == "index.php"){
                echo "<li><a id='active'>Home</a></li>";
                echo "<li><a href='pagine/pianeti.php'>Pianeti</a></li>";
                echo "<li><a href='pagine/chisiamo.php'>Chi siamo</a></li>";
                echo "<li><a href='pagine/contatti.php'>Contatti</a></li>";
                echo "<li><a href='pagine/login.php'>Login</a></li>";
                echo "<li><a href='pagine/registrazione.php'>Registrazione</a></li>";
            } else{
                echo "<li><a href='../index.php'>Home</a></li>";
            }
            if(basename($_SERVER["PHP_SELF"]) == "pianeti.php"){
                echo "<li><a id='active'>Pianeti</a></li>";
            } else{
                echo "<li><a href='pianeti.php'>Pianeti</a></li>";
            }
            if(basename($_SERVER["PHP_SELF"]) == "chisiamo.php"){
                echo "<li><a id='active'>Chi siamo</a></li>";
            } else{
                echo "<li><a href='chisiamo.php'>Chi siamo</a></li>";
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
        ?>
    </ul>
</div>