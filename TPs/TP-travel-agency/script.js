/*################## ETOILES ROUGES ##################*/
//Fonction pour ajouter une etoile rouge a la fin d'un label
function add_red_star(initial_text) {
    var red_star = document.createElement("sup"); //Creation d'un supNode <sup>
    var red_star_content = document.createTextNode(" *"); //Creation d'un texteNode
    red_star.appendChild(red_star_content); //Insertion du texteNode dans le supNode
    red_star.style.color = "red"; //Application de la couleur rouge sur le supNode
    initial_text.appendChild(red_star); //Insertion de l'etoile rouge dans le label passe en parametre
}
//Recuperation du noeud cible
var label = document.getElementsByTagName("label"); //Creation d'un tableau des nodes <label>
//Application de la fonction sur les nodes <label>
add_red_star(label[0]);
add_red_star(label[1]);

/*################## CONTROLE FORMULAIRE PRE-VALIDATION ##################*/
//Creation d'un tableau d'input
var tab_input = document.getElementsByTagName("input");
//Attribution de noms aux differents inputs
var name_field = tab_input[0];
var mail_field = tab_input[1];
var button = tab_input[2];
//Ajout de l'attribut 'required' dans les inputs du html afin de ne pas etre en mesure de valider le formulaire le cas echeant
name_field.required = true;
mail_field.required = true;
//Desactivation du bouton submit
button.disabled = true;
if (button.disabled == true) {
    button.style.backgroundColor = "#c5c9ca"; //Modification du CSS du boutton pour que l'utilisateur se rende compte qu'il n'est pas cliquable
    button.style.color = "#f9ebeb;";
}
//Fonction de verification de remplissage des champs
function is_filled(field) {
    if (field.value.length == 0) {
        console.log(field + " est vide");
        field.style.borderColor = "red"; //Ajout d'une bordure de couleur pour guider l'utilisateur
        return false;
    }
    else {
        console.log(field + " est plein");
        field.style.borderColor = "green";
        return true;
    }
}
//Fonction de verification du format de mail
function check_mail(field) {
    var regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/; //EXPLICATION DE LA REGEX EN BAS DE DOCUMENT
    if (regex.test(field.value)) //On verifie que la value du champs email corresponde bien a la Regex
        return true;
    else {
        field.style.borderColor = "red"; //Ajout d'une bordure de couleur pour guider l'utilisateur
        return false;
    }
}
//Fonction de reactivation du boutton
function activate_button() {
    if (is_filled(name_field) && is_filled(mail_field) && check_mail(mail_field)) {
        button.disabled = false;
        button.style.backgroundColor = "#02b8dd";
        button.style.color = "#fff;"
        button.onmouseenter = function () { this.style.backgroundColor = "#444"; }
        button.onmouseleave = function () { this.style.backgroundColor = "#02b8dd"; }
    }
    else {
        button.disabled = true;
        if (button.disabled == true) {
            button.style.backgroundColor = "#c5c9ca";
            button.style.color = "#f9ebeb;";
        }
    }
}
//Appel de la fonction en cas de remplissage
name_field.addEventListener("keyup", activate_button);
mail_field.addEventListener("keyup", activate_button);

/*################## AFFICHAGE ET ACTIONS POST-VALIDATION ##################*/
//Selection de form
var form = document.querySelector("form");
//Ajout de l'attribut on
function form_validated(page) {
    alert("Merci. Nous vous recontacterons des que possible!");
    var contact_title = document.querySelector("h3");
    var replace_text = document.createTextNode("Déjà contacté");
    contact_title.replaceChild(replace_text, contact_title.firstChild);
    contact_title.style.color = "red";
    form.parentNode.removeChild(form);
}