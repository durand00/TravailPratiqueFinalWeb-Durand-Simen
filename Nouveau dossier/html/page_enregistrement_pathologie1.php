<?php

    
session_start();


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
                <form action="resultat_recherche.php", method="post">
                <label for="site-search">Rechercher un lieu:</label>
                    <input type="search" id="site-search" name="lieu_v"
                        aria-label="Search through site content">

                    <button>Search</button>
                </form>  
                </div> 
            


            </div>

        </div>

    </body>



</html>
