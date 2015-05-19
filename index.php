<?php
    include 'modele/utilisateur.php';
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Se connecter </title>
    </head>
    <body>
        
        <h2>Bienvenue 
            <?php
                if (isset($_SESSION['user'])==true) {
                    if ($_SESSION['user'].getPseudo()!= NULL) {
                        echo $_SESSION['user'].getPseudo();
                    }
                }
                
            ?>
        </h2>
       
        <a href ="connexion.php"> se connecter </a> <br/>
        <a href ="register.php"> Pas encore inscrit ? </a>
        
    </body>
</html>
