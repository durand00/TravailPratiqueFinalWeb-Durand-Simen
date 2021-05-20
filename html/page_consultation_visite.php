
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
    <li><a  href="page_enregistrement_visite.php"id="btn1" style="width: 240px; text-align: left; height: 40px;">Enregistrer une visite</a></li>
    <li><a class="active"href="page_consutation_visite.php"  id="btn4" style="width: 240px; text-align: left; height: 40px;">Consulter mes visites</a></li>
    <li><a href="../session/fermer_session.php" style="width: 240px; text-align: left; height: 40px;">Se deconnecter</a></li>
    </ul>

    <div style="margin-left:25%;padding:1px 16px;height:1000px;" id="contenu">

     <h1>Enregister une visite </h1>

              
            <table>
                <tr>
                    <th>Province</th>
                    <th>Lieu</th>
                    <th>ville</th>
                    <th>Rue</th>
                    <th>Numero civique</th>
                    <th>Date d'arrive</th>
                    <th> Date de depart </th>
                </tr>
                <?php
                ini_set('display_errors', 'on');
                    session_start();
                    require_once '../app/visite.class.php';
                    $email = $_SESSION['username'];
                    $visite = new Visite();
                    $visite->email = $email;
                    $visite->setVisite($email);

                ?>
  
            </table>
            
        
     


    </div>

</div>






    </body>



</html>
