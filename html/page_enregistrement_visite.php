<?php

session_start();


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="Utf-8">
    <link rel="stylesheet" href="..\styles\style_page_accueil.css" media="screen" type="text/css">
    <title> enregistrement</title>
    <script type="text/javascript" src="../JS/dom.js"> </script>
    <script type="text/javascript" src="../JS/fonction.js"> </script>
</head>



<body>

    
<div >

    <ul>
    <li><a  href="page_accueil.php">Accueil</a></li>
    <li><a   class="active" id="btn1" style="width: 240px; text-align: left; height: 40px;">Enregistrer une visite</a></li>
    <li><a href="page_consultation_visite.php"  id="btn4" style="width: 240px; text-align: left; height: 40px;">Consulter mes visites</a></li>
    <li><a href="../session/fermer_session.php" style="width: 240px; text-align: left; height: 40px;">Se deconnecter</a></li>
    </ul>

    <div style="margin-left:25%;padding:1px 16px;height:1000px;" id="contenu">

     <h1>Enregister une visite </h1>

        <div class="form">

        <form id="formulaire" action="../app/enregistrer_visite.php" onsubmit="requete_ajax()" method="POST">
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

            <label for="rue"><strong> Numero Civique</label>
            <input type="number" id="numero" name="numero"> <br><br>

            <label for="date_arrive"><strong> Date et Heure d'arrivée</label>
            <input type="date" id="date_arrive" name="date_arrive" data-date="" data-date-format="YYYY-MMMM-DD">
            <input type="time" id="heure_arrive" name="heure_arrive"> <br> <br> 


            <label for="date_depart"> <strong>Date et Heure de départ </label>
            <input type="date" id="date_depart" name="date_depart">
            <input type="time" id="heure_depart" name="heure_depart"> <br><br><br>

            <label for="pathologie"> <strong>Avez vous contactez une pathologie </label>
            <input type = "text" id="pathologie" name="payhologie">
            
   
            <input type="submit" id="btn3" value="envoyer" name="submit" style="font-size: 16px;" > 

            </form>
            
            <p id="reponse">
            
            
        </div> 
     


    </div>

</div>






    </body>



</html>
