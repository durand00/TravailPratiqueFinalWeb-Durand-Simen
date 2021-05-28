
<?php



    function maximum($date1, $date2)
        {
            $date3 = new DateTime("2021-05-12 17:21:56");
            $date4 =  new DateTime("2021-05-12 17:21:56");

            $date3 = $date1;
            $date4 = $date2;
    
            if($date3->format("y-m-d")>$date4->format("y-m-d"))
            {
                return $date3;
            }
            else
            {
                return $date4;   
            }
        }
    // Fonction que renvoie le minimum de deux dates
        function minimum($date1, $date2)
        {
    
            $date3 = new DateTime("2021-05-12 17:21:56");
            $date4 =  new DateTime("2021-05-12 17:21:56");

            $date3 = $date1;
            $date4 = $date2;

            if($date2->format("y-m-d")<$date3->format("y-m-d"))
            {
                return $date2;
            }
            else
            {
                return $date3;   
            }
        }



        function comparaison_date($date_debut11, $date_fin11, $date_debut22, $date_fin22)
        {
            $date_debut1 = new DateTime("2021-06-11 15:25:56");
            $date_fin1 = new DateTime("2021-06-11 15:28:56");
            $date_debut2 = new DateTime("2021-06-11 15:25:56");
            $date_fin2 = new DateTime("2021-06-11 15:28:56");
            $duree = new DateTime("01:00:00");
            $date_debut1 =  $date_debut11;
            $date_fin1 = $date_fin11;
            $date_debut2 = $date_debut22;
            $date_fin2 = $date_fin22;


            $date_debut_max = maximum($date_debut1, $date_debut2);
            $date_fin_min = minimum($date_fin1, $date_fin2);

            // on teste s'ils partagent un meme intervalle de jours
            if( $date_fin_min->format('y-m-d') > $date_debut_max->format('y-m-d')   )
            {
                // ils partagent une plage de jours
                return 1;
            }

            //  si les jours d'arrivee et de depart sont egaux
            elseif($date_fin1->format('y-m-d') == $date_debut2->format('y-m-d') || $date_fin2->format('y-m-d') == $date_debut1->format('y-m-d'))
            {


                if($date_fin1->format('y-m-d') == $date_fin2->format('y-m-d') && $date_debut2->format('y-m-d') == $date_debut1->format('y-m-d')) 
                {
                    // ils ont passé juste quelques heures ensemble 

                    if($date_debut2->format('H:i:s') == $date_debut1->format('H:i:s') && $date_fin2->format('H:i:s') == $date_fin1->format('H:i:s'))
                    {
                        $min_fin1 = $date_fin1->format('H')*60+$date_fin1->format('i');
                        $min_debut1 = $date_debut1->format('H')*60+$date_debut1->format('i');
                        $duration = ($min_fin1-$min_debut1)/60;

                        //  Ils ont mème heure d arrive et de depart 

                        if($duration >=1)
                        {
                        
                            // Ils ont passés plus d\'une heure 

                            return 1;
                        }
                        else
                        {
                            // Mais ils ont passés moins d une heure 

                            return 0;
                        }
                    }

                    elseif($date_fin2->format('H:i:s') > $date_debut1->format('H:i:s'))
                    {
                            // Les heures secondaires coincident aussi 

                            $min_fin2 = $date_fin2->format('H')*60+$date_fin2->format('i');
                            $min_debut1 = $date_debut1->format('H')*60+$date_debut1->format('i');
                            $duration = ($min_fin2-$min_debut1)/60;

                            if($duration>=1)
                            {
                                // Vous avez passé plus d une heure ensemble 

                                return 1;
                            }
                            else
                            {
                                // Vous avez passé moins d une heure ensemble 

                                return 0;
                            }
                            
                    
                    }

                    elseif($date_fin1->format('H:i:s') > $date_debut2->format('H:i:s'))
                    {

                        
                            $min_fin1 = $date_fin1->format('H')*60+$date_fin1->format('i');
                            $min_debut2 = $date_debut2->format('H')*60+$date_debut2->format('i');
                            $duration = ($min_fin1-$min_debut2)/60;

                            
                            if($duration>=1)
                            {
                                // 2  Vous avez passé plus d une heure ensemble 
                                return 1;
                            }
                            else
                            {
                                // 2  Vous avez passé moins d une heure ensemble 
                                return 0;
                            }

                    }
                    //elseif()
                }
                
            }
            else
            {
                // Les deux dates ne coincident pas

                return 0;
            }
            

        }



?>