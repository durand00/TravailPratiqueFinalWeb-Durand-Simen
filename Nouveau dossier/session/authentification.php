<?php

        include 'login.class.php';

            // On vérifie si tous les champs ont ete remplis
        if(!isset($_POST['email']) || empty($_POST['email']) || empty($_POST['password'])){
            header("location: page_login.php?erreur=3");
            exit();
        }


        $username = filter_input(INPUT_POST, "email", FILTER_DEFAULT);
        $mdp = filter_input(INPUT_POST, "password", FILTER_DEFAULT); 

        $user = new Login;
        $user->email = $username;
        $user->mdp = $mdp;
        // On verifie si le user existe et on compare les mots de passe
        $estvalide = $user->Authentifier($user);

        // Si l'utilisateur est authentifié, on ouvre une session pour lui
       if($estvalide==1)
        {
            session_start();
            $_SESSION['username'] = $username;
            header("location: ../html/page_accueil.php");
        }
        // Si les informations ne sont pas vérifiés, on le renvoie à la page de login avec un rapport d'erreur
        else
        {
            header("location: page_login.php?erreur=1");
        }
        
?>