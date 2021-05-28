
<?php

session_start();
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
    <li><a href="page_enregistrement_visite.php" id="btn1" style="width: 240px; text-align: left; height: 40px;"> <srong>Enregistrer une visite</a></li>
    <li><a class="active" href="page_consultation_visite.php"  id="btn4" style="width: 240px; text-align: left; height: 40px;"> <strong> Consulter mes visites</a></li>
    <li><a href="page_enregistrement_pathologie1.php"  id="btn5" style="width: 240px; text-align: left; height: 40px;"> <strong> Signaler une pathologie</a></li>
    <li><a href="../session/fermer_session.php" style="width: 240px; text-align: left; height: 40px;"> <strong> Se deconnecter</a></li></strong>
</ul>

    <div style="margin-left:25%;padding:1px 16px;height:1000px;" id="contenu">

     <h1>Liste des visites enregistrés </h1>

              
            <table>
                <tr>
                    <th>Numero</th>
                    <th>Province</th>
                    <th>Lieu</th>
                    <th>ville</th>
                    <th>Rue</th>
                    <th>Date d'arrive</th>
                    <th> Date de depart </th>
                    <th> Pathologie </th>
                </tr>
                <?php


                   /* for($i=0; $i<=count($array); $i++)
                    {
                        echo "<tr>";
                        echo "<td> ".$i."</td>";
                        echo "<td> ".$array['province']."</td>";
                        echo "<td> ".$array['lieu']."</td>";
                        echo "<td> ".$array['ville']."</td>";
                        echo "<td> ".$array['rue']."</td>";
                        echo "<td> ".$array['date_arrive']."</td>";
                        echo "<td> ".$array['date_depart']."</td>";
                        echo "<td> ".$array['pathologie']."</td>";
                       
                        echo "</tr>";
                    }*/
                   /* foreach($array as $element)
                    {
                        echo "<tr>";
                        echo "<td> ".$i."</td>";
                        echo "<td> ".$element[2]."</td>";
                        echo "<td> ".$element."</td>";
                        echo "<td> ".$element."</td>";
                        echo "<td> ".$element."</td>";
                        echo "<td> ".$element."</td>";
                        echo "<td> ".$element."</td>";
                        
                        echo "</tr>";
                        $i = $i+1;

                    }*/


                    try{
                        // ini_set('display_errors', 'on');
                        require_once '../app/visite.class.php';
                        $email = $_SESSION['username'];
                        $i=0;
                        $j=1;
                        $connexion=new PDO(DNS, USAGER, MDP);
                        $connexion-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
                        $requete = $connexion -> prepare("SELECT * FROM visite WHERE email=:login ");
                        $requete->bindParam(':login', $email, PDO::PARAM_STR);
                        $requete->execute();
                        while($res = $requete->fetch()){ 
        
        
                           /* $visite['province'] = $res['province'];
                            $visite['lieu'] = $res['lieu_visite'];
                            $visite['ville'] = $res['ville'];
                            $visite['rue'] = $res['rue'];
                            $visite['date_arrive'] = $res['date_arrive'];
                            $visite['date_depart'] = $res['date_depart'];
                            $visite['pathologie'] = $res['pathologie'];
                            echo ' La province : '.$visite['province'].'<br>';
                           /* $visite = [
                                "province" => $res['province'],
                                "lieu" => $res['lieu_visite'],
                                "ville" => $res['ville'],
                                "rue" => $res['rue'],
                                "date_arrive" => $res['date_arrive'],
                                "date_depart" => $res['date_depart'],
                                "pathologie" => $res['pathologie '],
        
                            ];*/

                            echo "<tr>";
                            echo "<td> ".$j."</td>";
                            echo "<td> ".$res['province']."</td>";
                            echo "<td> ".$res['lieu_visite']."</td>";
                            echo "<td> ".$res['ville']."</td>";
                            echo "<td> ".$res['rue']."</td>";
                            echo "<td> ".$res['date_arrive']."</td>";
                            echo "<td> ".$res['date_depart']."</td>";
                            echo "<td> ".$res['pathologie']."</td>";
                            
                            echo "</tr>";
        
                            $i=$i+1;
                            $j=$j+1;
                        }
                        
                     }
                     catch(PDOException $e){
                        echo $e->getMessage();
                     }


                ?>
  
            </table>
            
        
     


    </div>

</div>






    </body>



</html>
