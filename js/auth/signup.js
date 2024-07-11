//je veux implémenter le js de ma page, je vais vérifier le champ requis

const inputPrenom = document.getElementById("prenomInput");
const inputNom = document.getElementById("nomInput");
const inputMail = document.getElementById("mailInput");
const inputMdp = document.getElementById("mdpInput");
const inputValideMdp = document.getElementById("mdpValideInput");
const btnInscription = document.getElementById("btn-inscription");

inputPrenom.addEventListener("keyup", validateForm);
inputNom.addEventListener("keyup", validateForm);
inputMail.addEventListener("keyup", validateForm);
inputMdp.addEventListener("keyup", validateForm);
inputValideMdp.addEventListener("keyup", validateForm);

function validateForm(){
    const prenomOk = ValidateRequired(inputPrenom);
    const nomOk = ValidateRequired(inputNom);
    const mailOk = mailValid(inputMail);
    const mdpOk = mdpValid(inputMdp);
    const mdpValide = mdpvalided(inputMdp, inputValideMdp);

    if(prenomOk && nomOk && mailOk && mdpOk && mdpValide) {
        btnInscription.disabled = false;
    } 
    else{
        btnInscription.disabled = true;
    }
}

function mdpvalided(inputMdp, inputValideMdp){
    if(inputMdp.value == inputValideMdp.value){
        inputValideMdp.classList.add("is-valid");
        inputValideMdp.classList.remove("is-invalid");
        return true;
    }else{
        inputValideMdp.classList.add("is-invalid");
        inputValideMdp.classList.remove("is-valid");
        return false;
    }
}

function mdpValid(input){
    //définir une expression régulière --> regex
    const mdpRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]{8,}$/;
    const userMdp = input.value;
    if(userMdp.match(mdpRegex)) {
        input.classList.add("is-valid");
        input.classList.remove("is-invalid");
        return true;
    } 
    else{
        input.classList.remove("is-valid");
        input.classList.add("is-invalid");
        return false;
    }
}

function mailValid(input){
    //définir une expression régulière --> regex
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const userMail = input.value;
    if(userMail.match(emailRegex)) {
        input.classList.add("is-valid");
        input.classList.remove("is-invalid");
        return true;
    } 
    else{
        input.classList.remove("is-valid");
        input.classList.add("is-invalid");
        return false;
    }
}

function ValidateRequired(input) {
    if(input.value != ''){
        input.classList.add("is-valid");
        input.classList.remove("is-invalid");
        return true;
    } 
    else{
        input.classList.remove("is-valid");
        input.classList.add("is-invalid");
        return false;
    }
}