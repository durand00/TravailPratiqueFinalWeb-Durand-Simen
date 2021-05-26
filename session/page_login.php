<!--Configuration des messages d'erreur-->
<?php

    if(isset($_COOKIE['erreur'])){
        $message = $_COOKIE['erreur'];
        setcookie("erreur"," ",time()-600);
    }

?>



<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Page de connexion
        </title>
        <!--Definir le type d'encodage -->
        <meta charset="Utf-8">
        <!--importer le fichier de style -->
        <link rel="stylesheet" href="..\styles\style_connexion.css" media="screen" type="text/css">
    </head>
    <body>

        <?php
            if(isset($message)){
                echo "<p>".$message."<p>";
            }

        ?>

        <div id="container">
            <!-- zone de connexion -->
            
            <form name="formulaire" action="authentification.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Adresse Email</b></label>
                <input type="email" placeholder="Entrer votre adresse email" name="email" >

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" >

                <input type="submit" id='submit' value='LOGIN' >
                <a href="..\html\page_inscription.php" style="text-decoration: none; margin-left:200px; font-style: italic;"> Pas encore inscrit ?</a>
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                    elseif($err==3)
                        echo "<p style='color:red'>Vous devez inscrire une adresse mail et un mot de passe.</p>";
                    elseif($err==4)
                        echo "<p style='color:green'> Vous etes déconnecté !  </p>";
                    elseif($err==5)
                        echo "<p style='color:green'> Vous venez de créer votre compte avec succès. connectez-vous en utilisant vos identifiants !  </p>";
                }
                ?>
            </form>


        </div>


    </body>
</html>