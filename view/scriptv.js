
function verif() {

    var marque = document.forms["clubForm"]["marque"].value;
    


    var errorN = document.getElementById('errorNR');
    
    

    var letters = /^[A-Za-z]+$/;
    
    if (nomR == "") {
        errorN.innerHTML = "Veuillez entrer votre nom!";

    }
    else if (!(marque.match(letters) && marque.charAt(0).match(/^[A-Z]+$/))) {
        errorN.innerHTML = "Veuillez entrer un nom valide!";
    } else {
        errorN.innerHTML = "";

    }

   

function validateForm(e) {
    e.preventDefault();
    verif();
}