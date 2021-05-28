<?php

    // ini_set('display_errors', 'on');
    include_once '../session/config.inc.php';
    include 'envoie_mail.php';
    include 'comparaison_date.php';
    
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
        var $sypmtome;
        var $duree;

        // Constructeur de l'objet
        public function __construct()
        {
            $this->lieu_visite =" lieu_visite";
            $this->email= "email";
            $this->numero_civique =456;
            $this->rue =" rue";
            $this->ville ="ville";
            $this->province = "default";
            $this->date_arrive = "date_arrive";
            $this->date_depart = "date_depart";
            $this->pathologie = " ";
            $this->symptome = " ";
            $this->duree = " "; 
        }
        

        // fonction pour l'enregistrement d'une visite

        public function getVisite()
        {
            try{

                $connexion=new PDO(DNS, USAGER, MDP);
                $connexion-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                $requete = $connexion -> prepare("INSERT INTO visite (email, lieu_visite, numero_civique, rue, ville, province, date_arrive, date_depart) VALUES(:email,:lieu, :numero, :rue, :ville, :province, :date_arrive, :date_depart) ");
                $requete->bindParam(':email', $this->email, PDO::PARAM_STR);
                $requete->bindParam(':lieu', $this->lieu_visite, PDO::PARAM_STR);
                $requete->bindParam(':numero', $this->numero_civique, PDO::PARAM_STR);
                $requete->bindParam(':rue', $this->rue, PDO::PARAM_STR);
                $requete->bindParam(':ville', $this->ville, PDO::PARAM_STR);
                $requete->bindParam(':province', $this->province, PDO::PARAM_STR);
                $requete->bindParam(':date_arrive', $this->date_arrive, PDO::PARAM_STR);
                $requete->bindParam(':date_depart', $this->date_depart, PDO::PARAM_STR);
                $requete->execute();
                
             }
             catch(PDOException $e){
                echo $e->getMessage();
             }
        }


        //  Fonction pour l'affichage d'une visite 

        public function setVisite($email)
        {
            try{
                $i=1;
                $connexion=new PDO(DNS, USAGER, MDP);
                $connexion-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                $requete = $connexion -> prepare("SELECT * FROM visite WHERE email=:login ");
                $requete->bindParam(':login', $email, PDO::PARAM_STR);
                $requete->execute();
                while($res = $requete->fetch()){ 
                    echo "<tr>";
                    echo "<td> ".$i."</td>";
                    echo "<td> ".$res['province']."</td>";
                    echo "<td> ".$res['lieu_visite']."</td>";
                    echo "<td> ".$res['ville']."</td>";
                    echo "<td> ".$res['rue']."</td>";
                    echo "<td> ".$res['date_arrive']."</td>";
                    echo "<td> ".$res['date_depart']."</td>";
                    echo "<td> ".$res['pathologie']."</td>";
                    echo "</tr>";
                    $i=$i+1;
                }
            
 
             }
             catch(PDOException $e){
                echo $e->getMessage();
             }
        }




        // verifier à qui on peut faire le mail
        
        function send_mail_to()
        {
            $i=1;


            $connexion=new PDO(DNS, USAGER, MDP);
            $connexion-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $date_debut2 = new DateTime($this->date_arrive); 
            $date_fin2 = new DateTime($this->date_depart);



            $requete = $connexion -> prepare("SELECT email, date_arrive, date_depart FROM visite WHERE email !=:login AND lieu_visite = :lieu AND ville= :ville AND province= :province AND rue= :rue ");
            $requete->bindParam(':login', $this->email, PDO::PARAM_STR);
            $requete->bindParam(':lieu', $this->lieu_visite, PDO::PARAM_STR);
            $requete->bindParam(':ville', $this->ville, PDO::PARAM_STR);
            $requete->bindParam(':province', $this->province, PDO::PARAM_STR);
            $requete->bindParam(':rue', $this->rue, PDO::PARAM_STR);
            $requete->execute();
            while($res = $requete->fetch()){ 
                  
                $date_debut1 = new DateTime($res['date_arrive']);
                $date_fin1 = new DateTime($res['date_depart']);
                $intervalle = comparaison_date($date_debut1, $date_fin1, $date_debut2, $date_fin2);
                //echo ' Comparaison '.$intervalle.'<br>';
                if($intervalle==1)
                {
                    $to = $res['email'];
                    envoyer_mail($to);
                   // echo ' Les personnes avec qui tu t es renconté : '.$res['email'].'<br>';
                }
                $i=$i+1;
            }
        

        }



       public function recherche_lieu($lieu, $email)
        {
                $i=1;
                $connexion=new PDO(DNS, USAGER, MDP);
                $connexion-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                $requete = $connexion -> prepare("SELECT * FROM visite WHERE lieu_visite=:lieu OR ville=:ville OR rue=:rue OR province=:province AND email=:login ");
                $requete->bindParam(':lieu', $lieu, PDO::PARAM_STR);
                $requete->bindParam(':ville', $lieu, PDO::PARAM_STR);
                $requete->bindParam(':rue', $lieu, PDO::PARAM_STR);
                $requete->bindParam(':province', $lieu, PDO::PARAM_STR);
                $requete->bindParam(':login', $email, PDO::PARAM_STR);
                $requete->execute();
                while($res = $requete->fetch()){ 
                  
                    

                    echo "<tr>";
                    echo "<td> ".$i."</td>";
                    echo '<form action="ajout_pathologie.php" method="post">';
                    echo "<td> <input type='text'  name='province' value='".$res['province']."' > </input><br><br> </td>";
                    echo "<td> <input type='text'  name='lieu' value='".$res['lieu_visite']."' > </input><br><br> </td>";
                    echo "<td> <input type='text'  name='ville' value='".$res['ville']."' > </input><br><br> </td>";
                    echo "<td> <input type='text'  name='rue' value='".$res['rue']."' > </input><br><br> </td>";
                    echo "<td> <input type='datetime'  name='date_arrive' value='".$res['date_arrive']."' > </input><br><br> </td>";
                    echo "<td> <input type='datetime'  name='date_depart' value='".$res['date_depart']."' > </input><br><br> </td>";
                   
                    echo "<td> <input type='submit' value='ajouter'> </td>";
                    
                    echo '</form>';

                    echo "</tr>";
                    $i=$i+1;

                }

        }


    public  function  update_pathologie()
       {
            
            $connexion=new PDO(DNS, USAGER, MDP);
            $connexion-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


            $pathologie = $this->pathologie;
            $symptome = $this->symptome;
            $duree = $this->duree;
            $requete = $connexion -> prepare("UPDATE visite SET pathologie='$pathologie', symptome='$symptome', duree='$duree' WHERE lieu_visite=:lieu AND email=:login AND rue=:rue AND date_arrive=:date_arrive AND date_depart=:date_depart AND ville=:ville AND province=:province" );
    
            $requete->bindParam(':lieu', $this->lieu_visite, PDO::PARAM_STR);
            $requete->bindParam(':login', $this->email, PDO::PARAM_STR);
            $requete->bindParam(':rue', $this->rue, PDO::PARAM_STR);
            $requete->bindParam(':date_depart', $this->date_depart, PDO::PARAM_STR);
            $requete->bindParam(':date_arrive', $this->date_arrive, PDO::PARAM_STR);
            $requete->bindParam(':ville', $this->ville, PDO::PARAM_STR);
            $requete->bindParam(':province', $this->province, PDO::PARAM_STR);

            $requete->execute();

       }



    }


    /*$visite = new Visite;
    $visite->email = "cyrilnguelffddodetgh";
    $visite->lieu_visite = "alberta";
    $visite->numero_civique = 125;
    $visite->rue = "cornier";
    $visite->ville = "Montreal";
    $visite->province = "province";
    $visite->symptome = "province";
    $visite->pathologie = "province";
    $visite->duree = "province";
    $visite->date_arrive = "2021-05-12 15:21:56";
    $visite->date_depart = "2021-05-12 17:21:56";

    $visite->getVisite();
   // $heure = mktime($date1['time']);
   // $visite->setVisite($visite->email);
    
   // $var2 = comparaison_date($date1, $date2, $date3, $date4);
   // echo " Lieu : ".$var."<br>";
 

   /* if($date1->format('H:i:s') < $date2->format('H:i:s'))
    {
        echo " La date 1 est supérieure <br>";
    }
    elseif ($date1->format('H:i:s') == $date2->format('H:i:s'))
    {
        echo " Les deux dates sont égales <br>";
    }
    else{
        echo "la date 2  est supérieure <br>";
    }

    echo " Lieu : ".$visite->lieu_visite."<br>";
    echo " Heure arrive : ".$date1->format('H:i:s')."<br>";

    // Fonction qui renvoie le maximum de deux dates*/
    
?>