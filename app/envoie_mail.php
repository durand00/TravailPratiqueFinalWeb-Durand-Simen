<?php

    function envoyer_mail($email)
    {
    /* $header = "MIME-Version: 1.0\r\n";
        $header .='From:"PrimFX.com"<support@primfx.com>'."\n";
        $header .='Content-Type:Text/html; charset="utf_8"'."\n";
        $header .='Content-Transfer-Encoding: 8it';
        mail($email, "URGENCE SANITAIRE ", $message, $header);*/

        // ini_set('display_errors', 1);
        error_reporting(E_ALL);
        $from = " durantsimen@gmail.com";
        $subject = "Urgence sanitaire";
        $to = $email;
        $message = " Nous voulons juste vous signaler que vous avez fréquenté un lieu en commun avec une personne ayant la pathologie, ";
        $message .= " Pendant au moins une heure. Veuillez effectuer des test sanitaires pour vérifier votre etat de sante ";
        $headers = "From:".$from;
        mail($to, $subject, $message, $headers);

    }

?>