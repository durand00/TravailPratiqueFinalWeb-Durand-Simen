<?php

    include_once '../session/config.inc.php';

    // gestion des inscriptions
   
    Class Inscription {    
        var $nom;
        var $prenom;
        var $email;
        var $mdp;



        public  function getNom($name){
                $this->nom = $name;
            }
        public function getPrenom($prenom){
                $this->prenom = $prenom;
        }
        public function getEmail($email){
                $this->email = $email;
        }
        public function getMdp($mdp){
            $this->mdp = $mdp;
        }
        // public function __construct(){
        //     $this->nom = $nom;
        //     $this->prenom = $prenom;
        //     $this->email = $email;
        //     $this->mdp = $mdp;
        // }


        // Enregistrer une inscription dans la base de données
        public function getInscription($Inscription){

            $hash = password_hash($this->mdp, PASSWORD_DEFAULT);

            try{


                $email = $this->email;
                // require "../session/config.inc.php"
                $connexion=new PDO(DNS, USAGER, MDP);
                $connexion-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                $requete1 = $connexion -> prepare("SELECT * FROM user WHERE email = :login");
                $requete1->bindParam(':login', $email, PDO::PARAM_STR);
                $requete1->execute();
                $reponse = $requete1->fetch();
			 
                    //Si le resultat de la requete est vide, alors il n'est pas inscrit. on l'enregistre
                    if(empty($reponse['email'])){
                        $requete2 = $connexion -> prepare("INSERT INTO user (nom, prenom, email, mdp) VALUES(:nom1, :prenom1, :email1, :hash1)");
                        $requete2->bindParam(':nom1', $this->nom, PDO::PARAM_STR);
                        $requete2->bindParam(':prenom1', $this->prenom, PDO::PARAM_STR);
                        $requete2->bindPAram(':email1', $this->email, PDO::PARAM_STR);
                        $requete2->bindPAram(':hash1', $hash, PDO::PARAM_STR);
                        $requete2->execute();
                        return 1;
                    }
                    else{
                        return 0;
                    }
             }
             catch(PDOException $e){
                echo $e->getMessage();
             }

            

        }

        // tester la robustesse du mot de passe

        public function testpassword($mdp){

            $longueur = strlen($mdp);
            $point = 0;
            for($i=0; $i<$longueur; $i++)
            {
                $lettre = $mdp[$i];

                if($lettre>='a' && $lettre<='z')
                {
                    $point = $point + 1;
                    $point_min = 1;
                }
                elseif($lettre>='A' && $lettre <='Z')
                {
                    $point = $point + 2;
                    $point_maj = 2;
                   
                }
                elseif($lettre>=0 && $lettre<=9)
                {
                    $point = $point + 3;
                    $point_chiffre = 3;
                  
                }
                else{
                    $point = $point + 5;
                    $point_caractere = 5;

                }

            }
            return $point;

        }
    
    }

   /* $user = new Inscription;
    $user->mdp = "12365poiutAZETTY1457";
    $user->prenom = "JOJO";
    $user->nom = "jojo";
    $user->email = "jojrito@gmail.com";
    $mo = $user->mdp;
    $var2 = $user->getInscription($user); 
    $var = $user->testpassword($user->mdp);
    echo " inscription : ".$var2."<br>";
    echo " La robustesse de mon mot depass est de : ".$var."<br>";*/

?>
