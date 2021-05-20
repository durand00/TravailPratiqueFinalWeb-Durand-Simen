<?php
 

   class Login{

       var $email;
       var $mdp;


        public function getEmail($email){
            $this->email = $email;
        }

        public function getMdp($mdp){
            $this->mdp = $mdp;
        }

        public function __construct(){

            $this->email = $email;
            $this->mdp = $mdp;
        }
        public function getLogin($email, $mdp){
            $this->email = $email;
            $this->mdp = $mdp;
        }

        // VerifieEmail() Verifie si l'email entré par l'utilisateur existe dans la base de données
        public function verifieEmail($email){

            try{
               
                require_once 'config.inc.php';
                $connexion=new PDO(DNS,USAGER,MDP);
                $connexion-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $requete1 = $connexion -> prepare("SELECT * FROM user WHERE email = :login");
                $requete1->bindParam(':login', $email, PDO::PARAM_STR);
                $requete1->execute();
                $reponse = $requete1->fetch();
                $vare = $reponse['email'];
                    if(empty($reponse['email'])){      
                        return 0;
                    
                    }
                    else{
                        return 1;
                    }
                }
                catch(PDOException $e){
                    echo $e->getMessage();
                }
        }


        // Authentifier Permet de faire la comparaison des mots de passe
     
     
        public function Authentifier($user){

            if($this->verifieEmail($user->email)==0)
            {
               return 0;
            }
            else
            {
                try{

                   
                    $email=$user->email;
                    require_once 'config.inc.php';
                    $connexion=new PDO(DNS, USAGER, MDP);
                 
                    $connexion-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    $requete1 = $connexion -> prepare("SELECT mdp FROM user WHERE email = :login");
                    $requete1->bindParam(':login', $email, PDO::PARAM_STR);
                    $requete1->execute();
                    $reponse = $requete1->fetch();
                    $vare = $reponse['mdp'];

                            if(password_verify($user->mdp, $reponse['mdp']))
                                {
                                    
                                    return 1;
                                }
                            else
                                {
                                   
                                    return 0;


                                }
                

                }
                catch (PDOException $e){
                    echo $e->getMessage();
                    }

    }
   }
}
    
  /*$user= new Login;
   $user->email = "cyrilngueloh34@gmail.com";
   $user->mdp = "123456";
   $var = $user->Authentifier($user);
 $var2 = $user->verifieEmail($user->email);
 echo " La reponse : ".$var."<br>";
 echo " La reponse2 : ".$var2."<br>";*/


    

?>