

    function validation()
    {
    
        var province = document.getElementById('province').value;
        var lieu_v = document.getElementById('lieu_v').value;
        var ville = document.getElementById('ville').value;
        var rue = document.getElementById('rue').value;
        var numero = document.getElementById('numero').value;
        var date_arrive = document.getElementById('date_arrive').value;
        var heure_arrive = document.getElementById('heure_arrive').value;
        var date_depart = document.getElementById('heure_depart').value;
        var heure_depart = document.getElementById('heure_depart').value;
        var date_time_arrive = date_arrive + " " + heure_arrive + ":00";
        var date_time_depart = date_depart  + " " + heure_depart + "00";
        
        if(ville == "")
        {
            alert("Veuillez indiquer la ville! ");
            return false
          
        }
        else if(lieu_v == "")
        {
            alert("Veuillez indiquer le lieu ! ");
            return false;
        }
        else if(rue == "")
        {
            alert("Veuillez indiquer la rue ! ");
            return false;
        }
        else if(numero == "")
        {
            alert("Veuillez indiquer la rue ! ");
            return false;
        }
        else if(numero<0 && numero>2000000)
        {
            alert("Le numéro de la rue n'est pas valide !");
            return false;
        }
        else if(date_arrive == "")
        {
            alert("Veuillez indiquer votre date d'arrivée  sur ces lieux! ");
            return false;
        }
        else if(heure_arrive == "")
        {
            alert("Veuillez indiquer votre heure d'arrivée sur ces lieux ! ");
            return false;
        }
        else if(date_depart == "")
        {
            alert("Veuillez indiquer votre date de depart  ! ");
            return false;
        }
        else if(heure_depart == "")
        {
            alert("Veuillez indiquer votre heure de depart  ! ");
            return false;
        }
    
        else
        {
            return true;
        }
    
        
    
    }





/*btn2.addEventListener("click", function(){

        document.getElementById("contenu").innerHTML = "<html> <head> "
        + "<link rel='stylesheet' href='..\\styles\\style_page_accueil.css' media='screen' type='text/css'> </head> <body>"
        + "<h1>Liste des visites déjà effectuées ! </h1>"
        

        +"<table>"
        +"<tr>"
        +"<th>Province</th>"
        +"<th>Lieu</th>"
        +"<th>ville</th>"
        +"<th>Rue</th>"
        +"<th>Date</th>"
        +"<th> Détail </th>"
        +"</tr>"

    + "</table>"
        
        
        + "</body></html>";

    
        });

btn4.addEventListener("click", function(){

    document.getElementById("contenu").innerHTML = "<html> <head> "
        + "<link rel='stylesheet' href='..\\styles\\style_page_accueil.css' media='screen' type='text/css'> </head> <body>"
        + "<h1>Liste des visites déjà effectuées ! </h1>"
          
  
        +"<table>"
        +"<tr>"
        +"<th>Province</th>"
        +"<th>Lieu</th>"
        +"<th>ville</th>"
        +"<th>Rue</th>"
        +"<th>Date</th>"
        +"<th> Détail </th>"
        +"</tr>"
  
        + "</table>"
          
          
        + "</body></html>";
  
      
});*/