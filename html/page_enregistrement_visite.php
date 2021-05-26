<?php

session_start();
ini_set('display_errors', 'on');

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="Utf-8">
    <link rel="stylesheet" href="..\styles\style_page_accueil.css" media="screen" type="text/css">
    <title> enregistrement</title>
    <script type="text/javascript" src="../JS/dom.js"> </script>
    <script type="text/javascript" src="../JS/fonction.js"> </script>
</head>



<body>

    
<div >

<ul>
    <li><a  style="width: 240px; text-align: left; height: 40px;" href="page_accueil.php"> <strong> Accueil</a></li>
    <li><a class="active" href="page_enregistrement_visite.php" id="btn1" style="width: 240px; text-align: left; height: 40px;"> <srong>Enregistrer une visite</a></li>
    <li><a  href="page_consultation_visite.php"  id="btn4" style="width: 240px; text-align: left; height: 40px;"> <strong> Consulter mes visites</a></li>
    <li><a href="page_enregistrement_pathologie1.php"  id="btn5" style="width: 240px; text-align: left; height: 40px;"> <strong> Signaler une pathologie</a></li>
    <li><a href="../session/fermer_session.php" style="width: 240px; text-align: left; height: 40px;"> <strong> Se deconnecter</a></li></strong>
</ul>

    <div style="margin-left:25%;padding:1px 16px;height:1000px;" id="contenu">

     <h1>Enregister une visite </h1>

        <div class="form">

        <form id="formulaire" method="post" action="../app/enregistrer_visite.php" onsubmit="return validation()">

        <fieldset>
        <legend style="padding: 10px; background: rgb(84, 148, 95); color: rgb(209, 235, 235); font-size: 16px;"><strong>Lieu et date</stong></legend>
            <label for="province"><strong> Province</label>
            <select id="province" name="province">
                <option value="Quebec">Quebec</option>
                <option value="Ontarion">Ontario</option>
                <option value="Alberta">Alberta</option>
                <option value="Nouvelle Colombie">Nouvelle Colombie</option> </body> </html>
            </select>

           
            <label for="lieu_v"><strong> Lieu de la visite</label>
            <input type="text" id="lieu_v" name="lieu_v">

            <label for="ville"><strong> Ville</label>
            <input type="text" id="ville" name="ville">

            <label for="rue"><strong> Rue</label>
            <input type="text" id="rue" name="rue"><br><br>

            <label for="numero"><strong> Numero Civique</label>
            <input type="number" id="numero" name="numero"> <br><br>

            <label for="date_arrive"><strong> Date et Heure d'arrivée</label>
            <input type="date" id="date_arrive" name="date_arrive" data-date="" data-date-format="YYYY-MMMM-DD">
            <input type="time" id="heure_arrive" name="heure_arrive"> <br> <br> 


            <label for="date_depart"> <strong>Date et Heure de départ </label>
            <input type="date" id="date_depart" name="date_depart">
            <input type="time" id="heure_depart" name="heure_depart"> <br><br>
            </fieldset> <br><br>
   
           

                <input type="reset" class="btn5" value="Annuler" name="submit" style="font-size: 16px;" > 
                <input type="submit" id="btn3" value="Valider" name="submit" style="font-size: 16px;" onclick="requete_ajax()"> 


            <div id="reponse_ajax">    </div>
            </form>
            
            
            
            
        </div> 
     


    </div>

</div>






    </body>



</html>
