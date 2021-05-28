<?php
    session_start();
    require_once 'visite.class.php';

    if(isset($POST['JSON']))
        $donnee = filter_input(INPUT_POST, 'JSON', FILTER_SANITIZE_SPECIAL_CHARS);
        var_dump($donnee);
        

$visite = new Visite;
$visite->email = $_SESSION['username'];
$objet = json_decode($POST['JSON']);
$visite->lieu_visite = $objet->lieu_v;
$visite->province = $objet->province;
$visite->ville = $objet->ville;
$visite->rue = $objet->rue;
$visite->numero_civique = $objet->numero;
$visite->date_arrive = $objet->date_time_arrive;
$visite->date_depart = $objet->date_time_depart;

$visite->getVisite();


?>