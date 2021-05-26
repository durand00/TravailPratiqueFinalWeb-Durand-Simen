<?php
session_start();
    require_once 'visite.class.php';

    if(!isset($_POST['pathologie']) || empty($_POST['pathologie']) || empty($_POST['symptome']) || empty($_POST['duree'])){
        header("location: ../html/ajout_pathologie.php?erreur=1");
        exit();
    }

    
    $pathologie = filter_input(INPUT_POST, "pathologie", FILTER_DEFAULT);
    $symptome = filter_input(INPUT_POST, "symptome", FILTER_DEFAULT);
    $duree = filter_input(INPUT_POST, "duree", FILTER_DEFAULT);


    $visite = new Visite;
    $visite->pathologie = $pathologie;
    $visite->symptome = $symptome;
    $visite->duree = $duree;
    $visite->email = $_SESSION['username'];
    $visite->province = $_SESSION['province'];
    $visite->lieu_visite = $_SESSION['lieu'];
    $visite->ville = $_SESSION['ville'];
    $visite->rue = $_SESSION['rue'];
    $visite->date_arrive = $_SESSION['date_arrive'];
    $visite->date_depart = $_SESSION['date_depart'];


    $visite->update_pathologie();

    if($pathologie=="oui")
    {
 
        $visite->send_mail_to();
    }
    header("location: ../html/page_consultation_visite.php");



?>