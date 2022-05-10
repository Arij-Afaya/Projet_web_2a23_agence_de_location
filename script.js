
function verif(output) {
    

    var username = document.forms["clubForm"]["username"].value;  
    var email = document.forms["clubForm"]["email"].value;
    var pwd = document.forms["clubForm"]["pwd"].value;
    var confirmer = document.forms["clubForm"]["confirmer"].value;
    var datee = document.forms["clubForm"]["datee"].value;



    var errorN = document.getElementById('errorusername');
    var erroremail = document.getElementById('erroremail');
    var errorPass = document.getElementById('errorpwd');
    var errorConfirmer = document.getElementById('errorconfirmer');
    var errorDate = document.getElementById('errordatee');


    var letters = /^[A-Za-z]+$/;
    var dateNow = new Date();
    if (username == "") {
        errorN.innerHTML = "Veuillez entrer votre nom!";
        return false;

    }
    else if (!(username.match(letters) && username.charAt(0).match(/^[A-Z]+$/))) {
        errorN.innerHTML = "Veuillez entrer un nom valid!";
        return false;

    } else {
        errorN.innerHTML = "";

    }

    if (email == "") {
        erroremail.innerHTML = "Veuillez entrer votre email!";
        return false;


    }
    else if (!email.match('@esprit.tn')) {
        erroremail.innerHTML = "Veuillez entrer un email valid!";
        return false;

    }
    else {
        erroremail.innerHTML = "";

    }

    if (pwd == "") {
        errorPass.innerHTML = "Veuillez entrer votre mot de passe!";
        return false;


    }
    else if (!(pwd.match(/[0-9]/g) &&
        pwd.match(/[A-Z]/g) &&
        pwd.match(/[a-z]/g) &&
        pwd.length >= 8)) {
        errorPass.innerHTML = "Le mot de passe doit contenir au moins 8 caractères, dont au moins : Une lettre majuscule, Une lettre minuscule et un nombre.";
        return false;

    }
    else {
        errorPass.innerHTML = "";

    }

    if (confirmer == "") {
        errorConfirmer.innerHTML = "Veuillez entrer votre mot de passe!";
        return false;

    }
    else if (pwd!=confirmer) {
            errorConfirmer.innerHTML = "c'est différent à votre mot de passe choisi!";
            return false;

    }
    else {
        errorConfirmer.innerHTML = "";

    }



    if (datee == "") {
        errorDate.innerHTML = "Veuillez choisir une date!";
        return false;

    }
    else if (new Date(datee).toLocaleString() > dateNow.toLocaleString()) {
        errorDate.innerHTML = "La date de fondation doit être inférieur à la date actuelle";
        return false;
    }
    else {
        errorDate.innerHTML = "";

    }
    return true;


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