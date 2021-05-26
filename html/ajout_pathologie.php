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
        <meta charset="Utf-8">
        <link rel="stylesheet" href="../styles/style_page_accueil.css" media="screen" type="text/css">
        <link rel="stylesheet" href="../styles/style_page_enregistrement.css" media="screen" type="text/css">
        <title> enregistrement</title>
        <script type="text/javascript" src="../JS/dom.js"> </script>
        <script type="text/javascript" src="../JS/fonction.js"> </script>
    </head>



    <body>

        
        <div >

        <ul>
            <li><a  style="width: 240px; text-align: left; height: 40px;" href="page_accueil.php"> <strong> Accueil</a></li>
            <li><a  href="page_enregistrement_visite.php" id="btn1" style="width: 240px; text-align: left; height: 40px;"> <srong>Enregistrer une visite</a></li>
            <li><a  href="page_consultation_visite.php"  id="btn4" style="width: 240px; text-align: left; height: 40px;"> <strong> Consulter mes visites</a></li>
            <li><a class="active" href="page_enregistrement_pathologie1.php"  id="btn5" style="width: 240px; text-align: left; height: 40px;"> <strong> Signaler une pathologie</a></li>
            <li><a href="../session/fermer_session.php" style="width: 240px; text-align: left; height: 40px;"> <strong> Se deconnecter</a></li></strong>
        </ul>


            <div style="margin-left:25%;padding:1px 16px;height:1000px;" id="contenu">

          

                <div class="for"><br><br><br><br>

                <?php


                    include '../app/visite.class.php';
                    session_start();
                    $email = $_SESSION['username'];
                    $provinces = filter_input(INPUT_POST, "province", FILTER_DEFAULT);
                    $pathologie = filter_input(INPUT_POST, "pathologie", FILTER_DEFAULT);
                    $lieus = filter_input(INPUT_POST, "lieu", FILTER_DEFAULT);  
                    $villes = filter_input(INPUT_POST, "ville", FILTER_DEFAULT); 
                    $rues = filter_input(INPUT_POST, "rue", FILTER_DEFAULT); 
                    $date_arrives = filter_input(INPUT_POST, "date_arrive", FILTER_DEFAULT); 
                    $date_departs = filter_input(INPUT_POST, "date_depart", FILTER_DEFAULT); 
                    $_SESSION['date_arrive'] = $date_arrives;
                    $_SESSION['date_depart'] = $date_departs;
                    $_SESSION['province'] = $provinces;
                    $_SESSION['lieu'] = $lieus;
                    $_SESSION['ville'] = $villes;
                    $_SESSION['rue'] = $rues;
                    
                    echo '  <form method="post" action="../app/update_pathologie.php"            <fieldset>
                    <legend style="padding: 10px; background: rgb(84, 148, 95); color: rgb(209, 235, 235); font-size: 16px;"><strong>Etat de santé</stong></legend>
                        <div> 
                            <p> -->Avez-vous une pathologie?</p>
                            <input type="radio" id="oui" name="pathologie" value="oui">
                            <label for="radio">Oui</label>
                        </div>

                        <div> 
                            <input type="radio" id="non" name="pathologie" value="non">
                            <label for="radio">Non</label>
                        </div>
                        <div> 
                            <input type="radio" id="sais_pas" name="pathologie" value="je ne sais pas">
                            <label for="radio">Je ne sais pas</label>
                        </div><br>

                        
                        <div> 
                            <p> -->Quelle est la date de votre dernier test?</p>
                            <input type="radio" id="oui" name="duree" value="une_semaine">
                            <label for="dure">Il y\'a semaine</label>
                        </div>

                        <div>
                        <input type="radio" id="sports" name="duree" value=" deux semaines">
                        <label for="duree">Il y\'a deux semaines</label>
                        </div>

                        <div>
                        <input type="radio" id="cooking" name="duree" value="moins de un mois mois">
                        <label for="duree">Moins d\'un mois</label>
                        </div>

                        <div>
                        <input type="radio" id="other" name="duree" value="plus de un mois">
                        <label for="duree">Plus d\'un mois</label>
                        </div>


                        <div> 
                            <p> -->Ressentez-vous les symptomes?</p>
                            <input type="radio" id="oui" name="symptome" value="oui">
                            <label for="symptome">Oui</label>
                        </div>

                        <div> 
                            <input type="radio" id="oui" name="symptome" value="non">
                            <label for="symptome">Non</label>
                        </div><br> <br>


                </fieldset>

                <input type="reset" class="btn5" value="Annuler" name="submit" style="font-size: 16px;" onclick="requete_ajax()"> 
                <input type="submit" id="btn3" value="Valider" name="submit" style="font-size: 16px;" onclick="requete_ajax()"> 
                  
        ';


        if(isset($_GET['erreur'])){
            $err = $_GET['erreur'];
            if($err==1 || $err==2)
                echo "<p style='color:red'>Veuillez repondre à toutes les questions !</p>";
         
        }
       echo '</form>  ';

        ?>

                

                </div> 
            


            </div>

        </div>

    </body>



</html>
