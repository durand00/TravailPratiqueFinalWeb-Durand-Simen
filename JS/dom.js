
//  $(document).ready(function () {
       
    // $("btn3").click(requete_ajax);
    $("#btn3").click(function(){
        // alert("moi");
        // alert("encore");
        
        // var ville = document.getElementById('ville').value;
        // alert(ville);
        // if(ville.text == "")
        // {
        //     alert("Veuillez indiquer la ville! ");
        //     // return false;
        // }
        requete_ajax();
        var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("POST", "enregistrer_visite.php", true);
            alert("encore");
            var province = document.getElementById('province').value;
            var lieu_v = document.getElementById('lieu_v').value;
            var ville = document.getElementById('ville').text;
            var rue = document.getElementById('rue').value;
            var numero = document.getElementById('numero').value;
            var date_arrive = document.getElementById('date_arrive').value;
            var heure_arrive = document.getElementById('heure_arrive').value;
            var date_depart = document.getElementById('heure_depart').value;
            var heure_depart = document.getElementById('heure_depart').value;
            // var date_time_arrive = date_arrive + " " + heure_arrive + ":00";
            // var date_time_depart = date_depart  + " " + heure_depart + "00";
            var pathologie = document.getElementById('pathologie').value;
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    // on envoie la reponse de la requete dans l'element reponse du DOM
                    //document.getElementById("reponse").innerHTML = xmlhttp.responseText;
                    alert("ca marche");
                }
            };
            // on envoie la requete en methode POST accompagné de la variable JSON
            // xmlhttp.open("POST", "enregistrer_visite.php?p=" + province +"&l="+lieu_v+ "&v="+ville+"&r="+rue+"num="+numero+"&da="+date_arrive+"&dd="+date_depart, true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); // pour decoder l'url

            // xmlhttp.send("pathologie="+pathologie+"&& numero="+numero);
            //xmlhttp.send("pathologie="+pathologie+"&& rue="+rue+"&& email="+email+"&& lieu_v"+lieu_v+"&& default"+province+"&& ville"+ville+"date_arrive"+date_arrive+"date_depart"+date_depart+"&& numero="+numero);
    });

// });

    //btn3.addEventListener('click', validation
var btn3 = document.getElementById('#btn3');

// function enregistrerVisite()
//         {
//             alert("enregistrer");
//             //requete ajax pour enregistrer les données de la visite
//             var xmlhttp = new XMLHttpRequest();
//             xmlhttp.open("POST", "enregistrer_visite.php", true);
            
//             var pathologie = document.getElementById('pathologie').value;
//             xmlhttp.onreadystatechange = function() {
//                 if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//                     // on envoie la reponse de la requete dans l'element reponse du DOM
//                     //document.getElementById("reponse").innerHTML = xmlhttp.responseText;
//                     alert("ca marche");
//                 }
//             };
//             // on envoie la requete en methode POST accompagné de la variable JSON
//             // xmlhttp.open("POST", "enregistrer_visite.php?p=" + province +"&l="+lieu_v+ "&v="+ville+"&r="+rue+"num="+numero+"&da="+date_arrive+"&dd="+date_depart, true);
//             xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); // pour decoder l'url

//             xmlhttp.send("pathologie="+pathologie);

            
//         }
    function validation()
{


    

}

function requete_ajax(){


// On vérifie d'abord si tous les champs sont remplis

    // var envoyer = document.getElementById('btn3').value;
    // var province = document.getElementById('province').value;
    // var lieu_v = document.getElementById('lieu_v').value;
    // var ville = document.getElementById('ville').text;
    // var rue = document.getElementById('rue').value;
    // var numero = document.getElementById('numero').value;
    // var date_arrive = document.getElementById('date_arrive').value;
    // var heure_arrive = document.getElementById('heure_arrive').value;
    // var date_depart = document.getElementById('heure_depart').value;
    // var heure_depart = document.getElementById('heure_depart').value;
    // var date_time_arrive = date_arrive + " " + heure_arrive + ":00";
    // var date_time_depart = date_depart  + " " + heure_depart + "00";
    // var pathologie = document.getElementById('pathologie').value;
    // alert(pathologie);

    if(ville.text == "")
    {
        alert("Veuillez indiquer la ville! ");
        // return false;
    }
    else if(lieu_v.text == "")
    {
        alert("Veuillez indiquer le lieu ! ");
    }
    else if(rue.text == "")
    {
        alert("Veuillez indiquer la rue ! ");
    }
    else if(numerotext == "")
    {
        alert("Veuillez indiquer la rue ! ");
    }
    else if(numero<0 && numero>2000000)
    {
        alert("L numéro de la rue n'est pas valide !");
    }
    else if(date_arrive == "")
    {
        alert("Veuillez indiquer votre date d'arrivée  sur ces lieux! ");
    }
    else if(heure_arrive == "")
    {
        alert("Veuillez indiquer votre heure d'arrivée sur ces lieux ! ");
    }
    else if(date_depart == "")
    {
        alert("Veuillez indiquer votre date de depart  ! ");
    }
    else if(heure_depart == "")
    {
        alert("Veuillez indiquer votre heure de depart  ! ");
    }
    // si tout est correct on active l'envoie de la requete
    else{
        // alert("ca marche");
        // var visite = new Array(province, lieu_v, ville, rue, numero, date_time_arrive, date_time_depart, pathologie );
        // var objet = JSON.stringify(visite);
        // // $(document).ready(function () {
        // //     $("btn3").click(enregistrerVisite);

        // });

        
        // return true;

        
        
          // var xmlhttp = new XMLHttpRequest();

                // xmlhttp.onload = function()
                // {
                //     var pathologie = document.getElementById('pathologie').value;
                //     pathologie.innerHTML = this.responseText;
                // }

        //         xmlhttp.onreadystatechange = function() {
        //                     if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        //                         var pathologie = document.getElementById('pathologie').value;
        //                         pathologie.innerHTML = this.responseText;
        //                         alert("ca marche");
        //                     }

        //     xmlhttp.open("POST", "enregistrer_visite.php", true);
        //     xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); // pour decoder l'url
        //     xmlhttp.send("pathologie="+pathologie);


        
        // return true;

        
        
        // //requete ajax pour enregistrer les données de la visite
        // var xmlhttp = new XMLHttpRequest();
        // xmlhttp.onreadystatechange = function() {
        //     if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        //         // on envoie la reponse de la requete dans l'element reponse du DOM
        //         document.getElementById("reponse").innerHTML = xmlhttp.responseText;
        //     }
        // };
        // // on envoie la requete en methode POST accompagné de la variable JSON
        // xmlhttp.open("POST", "enregistrer_visite.php?p=" + province +"&l="+lieu_v+ "&v="+ville+"&r="+rue+"num="+numero+"&da="+date_arrive+"&dd="+date_depart, true);
        // xmlhttp.send();

        // return true;
    }
    

}
