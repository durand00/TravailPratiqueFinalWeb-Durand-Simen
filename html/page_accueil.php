<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="Utf-8">
    <link rel="stylesheet" href="..\styles\style_page_accueil.css" media="screen" type="text/css">
    <title> Page d'accueil</title>
</head>



<body>

<div >

    <ul>
    <li><a class="active" style="width: 240px; text-align: left; height: 40px;" href="#home">Accueil</a></li>
    <li><a href="page_enregistrement_visite.php" id="btn1" style="width: 240px; text-align: left; height: 40px;">Enregistrer une visite</a></li>
    <li><a href="page_consultation_visite.php"  id="btn4" style="width: 240px; text-align: left; height: 40px;">Consulter mes visites</a></li>
    <li><a href="../session/fermer_session.php" style="width: 240px; text-align: left; height: 40px;">Se deconnecter</a></li>
    </ul>

    <div style="margin-left:25%;padding:1px 16px;height:1000px;" id="contenu">

    </div>

</div>



<script src="../JS/fonction.js"></script>
<script src="../JS/dom.js"></script>
    </body>



</html>
