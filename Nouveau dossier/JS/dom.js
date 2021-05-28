

    //btn3.addEventListener('click', validation
    donnees = [];
    const ajouterDonnee = (ev)=>{
        let donnees ={

            province: document.getElementById('province').value,
            lieu_v: document.getElementById('lieu_v').value,
            ville: document.getElementById('ville').value,
            rue: document.getElementById('rue').value,
            numero:document.getElementById('numero').value,
            date_arrive: document.getElementById('date_arrive').value,
            heure_arrive: document.getElementById('heure_arrive').value,
            date_depart: document.getElementById('heure_depart').value,
            heure_depart: document.getElementById('heure_depart').value,
            date_time_arrive: date_arrive + " " + heure_arrive + ":00",
            date_time_depart: date_depart  + " " + heure_depart + ":00"
        }

        document.querySelector('formulaire').reset();
        const jsonstring = JSON.stringify(donnees);
        var serveur = "JSON="+jsonstring;
        console.log(serveur);
        const xmlhttp = new XMLHttpRequest();

        xmlhttp.open("POST", "../app/enregistrer_visite2.php");
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.onreadystatechange == function() {
            if(xmlhttp.readyState == 4 && xhr.status == 200) {
                var return_data = xmlhttp.responseText;
                document.getElementById("reponse_ajax").innerHTML = return_data;
            }
        }
        xmlhttp.send(serveur);

    }
    
    document.addEventListener('DOMcontentLoaded', ()=>{
        document.getElementById('btn3').addEventListener('click', ajouterDonnee);
    });
  



