<?php
    include 'modele/utilisateur.php';
    session_start();
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Se connecter </title>
    </head>
    <body>
    
    
        <form method="post" action="register.php">
            <fieldset>
            <legend>Inscription</legend>
            <p>
                <label for="nom">Nom :</label><input value="uihhiu" name="nom" type="text" id="pseudo" /><br />
		<label for="pseudo">Pseudo :</label><input name="pseudo" type="text" id="pseudo" /><br />
		<label for="password">Mot de Passe :</label><input type="password" name="password" id="password" />
            </p>
            </fieldset>
            <p><input type="submit" name="action" value="Inscription" /></p>
        </form>

        <?php
            if (isset($_POST['action'])==true) {
                if($_POST['nom']==NULL || $_POST['pseudo']==NULL || $_POST['password']==NULL) {
                    echo "vous n'avez pas rempli les champs de façon correcte";
                }
                else {
                    $user = new Utilisateur($_POST['nom'], $_POST['pseudo'], $_POST['password']);
                    $_SESSION['user'] = $user;
                    header('Location:index.php');
                }
            }
        ?>
       
        
		
    </body>
</html>


