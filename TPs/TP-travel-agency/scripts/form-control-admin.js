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
var id_field = tab_input[0];
var password_field = tab_input[1];
var button = tab_input[2];
//Ajout de l'attribut 'required' dans les inputs du html afin de ne pas etre en mesure de valider le formulaire le cas echeant
id_field.required = true;
password_field.required = true;
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
//Fonction de reactivation du boutton
function activate_button() {
    if (is_filled(id_field) && is_filled(password_field)) {
        button.disabled = false;
        button.style.backgroundColor = "#02b8dd";
        button.style.color = "#fff;"
        button.onmouseenter = function () { this.style.backgroundColor = "#444"; this.style.color = "white";}
        button.onmouseleave = function () { this.style.backgroundColor = "#02b8dd"; this.style.color = "#fff";}
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
id_field.addEventListener("keyup", activate_button);
password_field.addEventListener("keyup", activate_button);