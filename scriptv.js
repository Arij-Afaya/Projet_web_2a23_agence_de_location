function verif() {

    var marque = document.forms["clubForm"]["marque"].value;  
    var email = document.forms["clubForm"]["email"].value;
    var pwd = document.forms["clubForm"]["pwd"].value;
    var confirmer = document.forms["clubForm"]["confirmer"].value;
    var datee = document.forms["clubForm"]["datee"].value;



    var errorN = document.getElementById('errormarque');

    var erroremail = document.getElementById('erroremail');
    var errorPass = document.getElementById('errorpwd');
    var errorConfirmer = document.getElementById('errorconfirmer');
    var errorDate = document.getElementById('errordatee');



    var letters = /^[A-Za-z]+$/;
    var dateNow = new Date();
    if (marque == "") {
        errorN.innerHTML = "Veuillez entrer votre nom!";

    }
    else if (!(marque.match(letters) && marque.charAt(0).match(/^[A-Z]+$/))) {
        alert('only A-Z');
        errorN.innerHTML = "Veuillez entrer un nom valid!";
    } else {
        errorN.innerHTML = "";

    }

    if (email == "") {
        erroremail.innerHTML = "Veuillez entrer votre email!";

    }
    else if (!email.match('@esprit.tn')) {
        erroremail.innerHTML = "Veuillez entrer un email valid!";
        var err=true;
    }
    else {
        erroremail.innerHTML = "";

    }

    if (pwd == "") {
        errorPass.innerHTML = "Veuillez entrer votre mot de passe!";

    }
    else if (!(pwd.match(/[0-9]/g) &&
        pwd.match(/[A-Z]/g) &&
        pwd.match(/[a-z]/g) &&
        pwd.length >= 8)) {
        errorPass.innerHTML = "Le mot de passe doit contenir au moins 8 caractères, dont au moins : Une lettre majuscule, Une lettre minuscule et un nombre.";

    }
    else {
        errorPass.innerHTML = "";

    }

    if (confirmer == "") {
        errorConfirmer.innerHTML = "Veuillez entrer votre mot de passe!";

    }
    else if (pwd!=confirmer) {
            errorConfirmer.innerHTML = "c'est différent à votre mot de passe choisi!";

    }
    else {
        errorConfirmer.innerHTML = "";

    }



    if (datee == "") {
        errorDate.innerHTML = "Veuillez choisir une date!";

    }
    else if (new Date(datee).toLocaleString() > dateNow.toLocaleString()) {
        errorDate.innerHTML = "La date de fondation doit être inférieur à la date actuelle";
    }
    else {
        errorDate.innerHTML = "";

    }
   


}

function changeAutre() {
    var autre = document.forms["clubForm"]["desc"];
    if (document.getElementById("autre").checked = true) {
        autre.style.display = "";
    }
    else {
        autre.style.display = "none";

    }
}

function Verifpwd() {
    var email = document.forms["clubForm"]["pwd"].value;
    var confirmer = document.forms["clubForm"]["confirmer"].value;
    var errorCR = document.getElementById('errorCR');

    if (confirmer == "") {
        errorCR.innerHTML = "Veuillez confirmer votre mot de passe!";
    }
    if (!(pwd == confirmer)) {
        errorCR.innerHTML = "Les deux mots de passe ne sont pas identiques!";

    } else {
        errorCR.innerHTML = ""
    }
}

function validateForm(e) {
    e.preventDefault();
    verif();
}