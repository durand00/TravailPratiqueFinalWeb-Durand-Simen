<?php

      session_start();  

        if(!isset($_POST['email']) || empty($_POST['email']) || empty($_POST['password'])||empty($_POST['confirmpassword'])){
            header("location: ../html/page_inscription.php?erreur=4");
            exit();
        }

        if(!isset($_POST['email']) || empty($_POST['nom']) || empty($_POST['prenom']) ){ 
            header("location: ../html/page_inscription.php?erreur=4");
            exit();
        }


        include 'inscription.class.php';
        $prenom = filter_input(INPUT_POST, "prenom", FILTER_DEFAULT);
        $nom = filter_input(INPUT_POST, "nom", FILTER_DEFAULT);
        $username = filter_input(INPUT_POST, "email", FILTER_DEFAULT);
        $mdp = filter_input(INPUT_POST, "password", FILTER_DEFAULT); 
        $confirm_mdp = filter_input(INPUT_POST, "confirmpassword", FILTER_DEFAULT); 

        $user = new Inscription;
        $user->email = $username;
        $user->mdp = $mdp;
        $user->prenom = $prenom;
        $user->nom = $nom;
        $test= $user->testpassword($mdp);

        if($mdp!=$confirm_mdp){
            header("location: ../html/page_inscription.php?erreur=3");
        }
        else{

            if(strlen($mdp)>=8 && $test>=35)
                {

            
                    $estinscrit = $user->getInscription($user);

                    if($estinscrit==1)
                    {
                        session_start();
                        $_SESSION['username'] = $username;
                        header("location: ../session/page_login.php?erreur=5");
                    }
                    else
                    {
                        
                        header("location: ../html/page_inscription.php?erreur=5");
                    }
                }
            else
                {
                    header("location: ../html/page_inscription.php?erreur=1");
                }
                
        }

        




?>