const mailInput = document.getElementById("emailInput");
const passwordInput = document.getElementById("passwordInput");
const btnConnexion = document.getElementById("btn-connexion");

btnConnexion.addEventListener("click", checkAuth);

function checkAuth(){
    //appel de l'api pour vérifier les informations utilisateur en BDD

    if (mailInput.value == "test@mail.com" && passwordInput.value =="123"){ 
        const token = "eijiojoijrijihjroijhirjhoirjhoirjhiorjhoirjhtijrtoiorijtei";
        setToken(token);

        setCookie(roleCookieName, "admin", 7);
        window.location.replace("/")
    }else{
        mailInput.classList.add("is-invalid");
        passwordInput.classList.add("is-invalid");
    }
}