const btnCreation = document.getElementById("btn-creation");
const users = [{id: 1, prenom: 'jean', nom: 'mph', email: 'jean@gmail.com', mdp: '1234', role: 'employe'}]
const InputMdpCreation = document.getElementById("mdpCreateInput");
const InputMailCreation = document.getElementById("mailCreateInput");
const InputRoleCreation = document.getElementById("roleCreateInput");
const InputPrenomCreation = document.getElementById("prenomCreateInput");
const InputNomCreation = document.getElementById("nomCreateInput");
InputPrenomCreation.addEventListener("keyup", validateForm);
InputNomCreation.addEventListener("keyup", validateForm);
InputMailCreation.addEventListener("keyup", validateForm);
InputMdpCreation.addEventListener("keyup", validateForm);
InputRoleCreation.addEventListener("keyup", validateForm);
btnCreation.addEventListener('click', createUser);


//fonctionalité
function createUser(event) {
    event.preventDefault();
    const prenomOk = ValidateRequired(InputPrenomCreation);
    const nomOk = ValidateRequired(InputNomCreation);
    const mailValideOk = mailValid(InputMailCreation);
    const mdpValideOk = mdpValid(InputMdpCreation);
    const roleValideOk = ValidateRequired(InputRoleCreation);

    const userData = {
        id: users.length !== 0 ? users[users.length - 1].id + 1 : 1,
        prenom: InputPrenomCreation.value,
        nom: InputNomCreation.value,
        email: InputMailCreation.value,
        mdp: InputMdpCreation.value,
        role: InputRoleCreation.value
    };

    if (prenomOk && nomOk && mailValideOk && mdpValideOk && roleValideOk) {
        if (isEmailUnique(userData.email)) {
            btnCreation.disabled = false;
            users.push(userData);
            showAllUser();
            console.log(users);
        } else {
            alert(' Attention un utilisateur ayant cette email existe déjà !');
        }
    } else {
        btnCreation.disabled = true;
    }
}

function isEmailUnique(email) {
    return !users.some(user => user.email === email);
}

function showAllUser() {
    const allUsersContainer = document.getElementById('allUsers');
    allUsersContainer.innerHTML = '';

    users.forEach(function (user) {
        const newDiv = document.createElement('div');
        newDiv.setAttribute('id', `user${user.id}`);
        newDiv.classList.add('mb-4', 'p-3', 'border', 'rounded');

        const prenomInput = document.createElement('input');
        prenomInput.setAttribute('type', 'text');
        prenomInput.setAttribute('id', `prenomOfUser${user.id}`);
        prenomInput.setAttribute('value', user.prenom);
        prenomInput.classList.add('form-control', 'mb-2');

        const nomInput = document.createElement('input');
        nomInput.setAttribute('type', 'text');
        nomInput.setAttribute('id', `nomOfUser${user.id}`);
        nomInput.setAttribute('value', user.nom);
        nomInput.classList.add('form-control', 'mb-2');

        const emailInput = document.createElement('input');
        emailInput.setAttribute('type', 'text');
        emailInput.setAttribute('id', `emailOfUser${user.id}`);
        emailInput.setAttribute('value', user.email);
        emailInput.classList.add('form-control', 'mb-2');

        const passwordInput = document.createElement('input');
        passwordInput.setAttribute('type', 'text');
        passwordInput.setAttribute('id', `passwordOfUser${user.id}`);
        passwordInput.setAttribute('value', user.mdp);
        passwordInput.classList.add('form-control', 'mb-2');

        const roleInput = document.createElement('input');
        roleInput.setAttribute('type', 'text');
        roleInput.setAttribute('id', `roleOfUser${user.id}`);
        roleInput.setAttribute('value', user.role);
        roleInput.classList.add('form-control', 'mb-2');

        newDiv.appendChild(prenomInput);
        newDiv.appendChild(nomInput);
        newDiv.appendChild(emailInput);
        newDiv.appendChild(passwordInput);
        newDiv.appendChild(roleInput);

        const deleteButton = document.createElement('button');
        deleteButton.textContent = 'Supprimer';
        deleteButton.classList.add('btn', 'btn-primary', 'me-2');
        deleteButton.addEventListener('click', function() {
            deleteUser(user.id);
        });

        const editButton = document.createElement('button');
        editButton.textContent = 'Modifier';
        editButton.classList.add('btn', 'btn-primary', 'me-2');
        editButton.addEventListener('click', function() {
            editUser(user.id);
        });

        newDiv.appendChild(deleteButton);
        newDiv.appendChild(editButton);

        allUsersContainer.appendChild(newDiv);
    });
}


function editUser(userId) {
    const user = users.find(user => user.id === userId);
    if (user) {
        const prenomInput = document.getElementById(`prenomOfUser${userId}`);
        const nomInput = document.getElementById(`nomOfUser${userId}`);
        const emailInput = document.getElementById(`emailOfUser${userId}`);
        const passwordInput = document.getElementById(`passwordOfUser${userId}`);
        const roleInput = document.getElementById(`roleOfUser${userId}`);
        user.prenom = prenomInput.value;
        user.nom = nomInput.value;
        user.email = emailInput.value;
        user.mdp = passwordInput.value;
        user.role = roleInput.value;
    }
    showAllUser();
}


function validateForm(){
    const prenomOk = ValidateRequired(InputPrenomCreation);
    const nomOk = ValidateRequired(InputNomCreation);
    const mailOk = mailValid(InputMailCreation);
    const mdpOk = mdpValid(InputMdpCreation);
    const roleOk = ValidateRequired(InputRoleCreation);

    if(prenomOk && nomOk && mailOk && mdpOk && roleOk) {
        btnCreation.disabled = false;
    } 
    else{
        btnCreation.disabled = true;
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
