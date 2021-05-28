<?php
    session_start();
    require_once 'visite.class.php';

    if((isset($POST['province']))&&(isset($POST['lieu_v'])) && (isset($POST['ville'])) && (isset($POST['rue'])) && (isset($POST['numero'])) && (isset($POST['date_time_arrive'])) && (isset($POST['date_time_depart']) ))
    {
        $province = filter_input(INPUT_POST, "province", FILTER_DEFAULT);
        $lieu_v = filter_input(INPUT_POST, 'lieu_v', FILTER_DEFAULT);
        $rue = filter_input(INPUT_POST, 'rue', FILTER_DEFAULT);
        $numero = filter_input(INPUT_POST, 'numero', FILTER_DEFAULT);
        $ville = filter_input(INPUT_POST, 'ville', FILTER_DEFAULT);
        $date_time_arrive = filter_input(INPUT_POST, 'date_time_arrive', FILTER_DEFAULT);
        $date_time_depart = filter_input(INPUT_POST, 'date_time_depart', FILTER_DEFAULT);
    }
    
//    var_dump($province,$lieu_v,$ville,$rue,$numero,$date_time_arrive,$date_time_depart); 
       
        

$visite = new Visite;
$visite->email = $_SESSION['username'];
$visite->lieu_visite = $lieu_v;
$visite->province = $province;
$visite->ville = $ville;
$visite->rue = $rue;
$visite->numero_civique = $numero;
$visite->date_arrive = $date_time_arrive;
$visite->date_depart = $date_time_depart;

$visite->getVisite();


?>