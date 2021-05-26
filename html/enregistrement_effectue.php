<?php

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
    <li><a  href="page_accueil.php">Accueil</a></li>
    <li><a   class="active" id="btn1" style="width: 240px; text-align: left; height: 40px;">Enregistrer une visite</a></li>
    <li><a href="page_consultation_visite.php"  id="btn4" style="width: 240px; text-align: left; height: 40px;">Consulter mes visites</a></li>
    <li><a href="../session/fermer_session.php" style="width: 240px; text-align: left; height: 40px;">Se deconnecter</a></li>
    </ul>

    <div style="margin-left:25%;padding:1px 16px;height:1000px;" id="contenu">

     <h1>Enregistrement effectué avec succès </h1>

        <div class="form">

        <li><a href="page_consultation_visite.php"  id="btn4" style="width: 240px; text-align: left; height: 40px; background-color: green;">Consulter</a></li>
        <p id="reponse">
            
            
        </div> 
     


    </div>

</div>






    </body>



</html>

