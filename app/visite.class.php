<?php

    include_once '../session/config.inc.php';
    
    class Visite {

        var $email;
        var $lieu_visite;
        var $numero_civique;
        var $rue;
        var $ville;
        var $province;
        var $date_arrive;
        var $date_depart;
        var $pathologie;

        public function __construct()
        {
            // $this->lieu_visite =" lieu_visite";
            // $this->email= "email";
            $this->numero_civique = 123;
            // $this->rue =" rue";
            // $this->ville ="ville";
            // $this->province = "default";
            // $this->date_arrive = "date_arrive";
            // $this->date_depart = "date_depart";
            if(isset($_POST['email']) && !empty($_POST['email']))
            {
            $this->email = htmlspecialchars($_POST['email']);
            }
            if(isset($_POST['numero_civique']) && !empty($_POST['numero_civique']))
            {
            $this->numero_civique = htmlspecialchars($_POST['numero_civique']);
            }
            if(isset($_POST['pathologie']) && !empty($_POST['pathologie']))
            {
            $this->pathologie = htmlspecialchars($_POST['pathologie']);
            }
            if(isset($_POST['rue']) && !empty($_POST['rue']))
            {
            $this->rue = htmlspecialchars($_POST['rue']);
            }
            if(isset($_POST['lieu_v']) && !empty($_POST['lieu_v']))
            {
            $this->lieu_visite = htmlspecialchars($_POST['lieu_v']);
            }
            if(isset($_POST['default']) && !empty($_POST['default']))
            {
            $this->province = htmlspecialchars($_POST['default']);
            }
            if(isset($_POST['ville']) && !empty($_POST['ville']))
            {
            $this->ville = htmlspecialchars($_POST['ville']);
            }
            if(isset($_POST['date_arrive']) && !empty($_POST['date_arrive']))
            {
            $this->date_arrive = htmlspecialchars($_POST['date_arrive']);
            }
            if(isset($_POST['date_depart']) && !empty($_POST['date_depart']))
            {
            $this->date_depart = htmlspecialchars($_POST['date_depart']);
            }


            // if(is_numeric($_POST['numero']) && !empty($_POST['numero']))
            // {
            //     $this->numero_civique = htmlspecialchars($_POST['numero']);
            // }
           
        }
        
        public function getVisite()
        {
            try{
                // if(isset($_POST['pathologie']) && !empty($_POST['pathologie']))
                // {
                    // $pathologie = htmlspecialchars($_POST['pathologie']);
                    $connexion=new PDO(DNS, USAGER, MDP);
                    $connexion-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
                    $requete = $connexion -> exec("INSERT INTO visite (email, lieu_visite, numero_civique, rue, ville, province, date_arrive, date_depart,pathologie) VALUES('$this->email', '$this->lieu_visite', '$this->numero_civique','$this->rue','$this->ville','$this->province','$this->date_arrive', '$this->date_depart','$this->pathologie') ");
                    return 1;
                // }
               
             }
             catch(PDOException $e){
                echo $e->getMessage();
             }
        }

        public function setVisite($email)
        {
            try{
                $i=0;
                $connexion=new PDO(DNS, USAGER, MDP);
                $connexion-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                $requete = $connexion -> prepare("SELECT * FROM visite WHERE email=:login ");
                $requete->bindParam(':login', $email, PDO::PARAM_STR);
                $requete->execute();
                while($res = $requete->fetch()){ 
                    echo "<tr>";
                    echo "<td> ".$res['province']."</td>";
                    echo "<td> ".$res['lieu_visite']."</td>";
                    echo "<td> ".$res['ville']."</td>";
                    echo "<td> ".$res['rue']."</td>";
                    echo "<td> ".$res['numero_civique']."</td>";
                    echo "<td> ".$res['date_arrive']."</td>";
                    echo "<td> ".$res['date_depart']."</td>";
                    echo "<td> ".$res['pathologie']."</td>";
                    echo "</tr>";

                }
            
 
             }
             catch(PDOException $e){
                echo $e->getMessage();
             }
        }



    }

   /* $visite = new Visite;
    $visite->email = "email";
    $visite->lieu_visite = "alberta";
    $visite->numero_civique = 125;
    $visite->rue = "cornier";
    $visite->ville = "Montreal";
    $visite->province = "province";
    $visite->date_arrive = "2021-05-12 15:21:56";
    $visite->date_depart = "2021-05-12 15:21:56";
    $visite->setVisite();
    $var = $visite->getVisite($visite);

    echo " Lieu : ".$visite->lieu_visite."<br>";*/


?>