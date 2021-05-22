<?php
ini_set('display_errors', 'on');
require_once 'visite.class.php';

session_start();
if(!isset($_POST['lieu_v']) || empty($_POST['ville']) || empty($_POST['rue']) || empty($_POST['pathologie'])){
    header("location: ../html/page_enregistrement_visite.php?erreur=3");
    exit();
}


    $visite = new Visite;
    $visite->email = $_SESSION['username']; 
    //variable sesion
    //Les variables envoyer avec ajax sont recupérés avec $_REQUEST
   /* $visite->lieu_visite = $_REQUEST['l']; 
    $visite->numero_civique = $_REQUEST['num'];
    $visite->rue = $_REQUEST['r'];
    $visite->ville = $_REQUEST['v'];
    $visite->province = $_REQUEST['p'];
    $visite->date_arrive = $_REQUEST['da'];
    $visite->date_depart = $_REQUEST['dd'];*/
    // enregistrer



    $provinces = filter_input(INPUT_POST, "province", FILTER_DEFAULT);
    $lieus = filter_input(INPUT_POST, "lieu_v", FILTER_DEFAULT);  
    $villes = filter_input(INPUT_POST, "ville", FILTER_DEFAULT); 
    $rues = filter_input(INPUT_POST, "rue", FILTER_DEFAULT); 
    $numeros = filter_input(INPUT_POST, "numero", FILTER_DEFAULT);
    $date_arrives = filter_input(INPUT_POST, "date_arrive", FILTER_DEFAULT); 
    $heure_arrives = filter_input(INPUT_POST, "heure_arrive", FILTER_DEFAULT); 
    $date_departs = filter_input(INPUT_POST, "date_depart", FILTER_DEFAULT); 
    $heure_departs = filter_input(INPUT_POST, "heure_depart", FILTER_DEFAULT); 
    // $pathologies = filter_input(INPUT_POST, "pathologies", FILTER_DEFAULT); 

    // $var1 = $date_arrives." ".$heure_arrives.":00";
    // $var2 = $date_departs." ".$heure_departs.":00";
    // $visite->province = $provinces;
    // $visite->lieu_visite = $lieus;
    // $visite->ville = $villes;
    // $visite->rue = $rues;
    // $visite->numero = $numeros;
    // $visite->date_depart = $var2;
    // $visite->date_arrive = $var1;
    // $visite->pathologie = $pathologies;


   
    $var = $visite->getVisite();

    if($var==1)
    {

        header("location: ../html/page_consultation_visite.php");
    }




?>