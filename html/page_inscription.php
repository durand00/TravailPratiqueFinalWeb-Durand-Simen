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
            
            <form name="formulaire" action="../app/controle_inscription.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom</b></label>
                <input type="text" placeholder="Entrer votre nom" name="nom" >

                <label><b>Prenom</b></label>
                <input type="text" placeholder="Entrer votre prenom" name="prenom" >


                <label><b>Adresse Email</b></label>
                <input type="email" placeholder="Entrer votre adresse email" name="email" >

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" >

                <label><b>Confirmer le mot de pass</b></label>
                <input type="password" placeholder="Confirmer mot de pass" name="confirmpassword" >

                <input type="submit" id='submit' value='LOGIN' >
                <a href="../session/page_login.php" style="text-decoration: none; margin-left:200px; font-style: italic;"> Déjà inscrit? ?</a>
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Votre mot de passe n'est pas assez robuste. Utilisez les chiffres et caractères spéciaux !</p>";
                    elseif($err==3)
                        echo "<p style='color:red'>Vos deux mots de passe ne sont pas compatibles ! .</p>";
                    elseif($err==4)
                        echo "<p style='color:red'> Remplissez tous les champs  !</p>";
                    elseif($err==5)
                        echo "<p style='color:red'> Un utilisateur est déjà inscrit avec cette adresse mail !  </p>";
                }
                ?>
            </form>


        </div>


    </body>
</html>