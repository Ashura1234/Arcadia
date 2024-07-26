const btnCreation = document.getElementById("btn-creation");
const users = [{id: 1, email: 'jean@gmail.com', mdp: '1234' }]
const InputMdpCreation = document.getElementById("mdpCreateInput");
const InputMailCreation = document.getElementById("mailCreateInput");
InputMailCreation.addEventListener("keyup", validateForm);
InputMdpCreation.addEventListener("keyup", validateForm);
btnCreation.addEventListener('click', createUser);


//fonctionalité
function createUser(event){
    event.preventDefault();
    const mailValideOk = mailValid(InputMailCreation);
    const mdpValideOk = mdpValid(InputMdpCreation);
    const userData = {
        id: users.length!==0 ? users[users.length-1].id + 1 : 1,
        email: InputMailCreation.value,
        mdp: InputMdpCreation.value,
    };
    if (mailValideOk && mdpValideOk){
        btnCreation.disabled = false;
        users.push(userData);
        showAllUser();
        console.log(users);
    } else {
        btnCreation.disabled = true;
    }
}

function showAllUser() {
    const allUsersContainer = document.getElementById('allUsers');
    allUsersContainer.innerHTML = '';

    users.forEach(function (user) {
        const newDiv = document.createElement('div');
        newDiv.setAttribute('id', `user${user.id}`);
        newDiv.classList.add('mb-4', 'p-3', 'border', 'rounded');

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

        newDiv.appendChild(emailInput);
        newDiv.appendChild(passwordInput);

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
        const emailInput = document.getElementById(`emailOfUser${userId}`);
        const passwordInput = document.getElementById(`passwordOfUser${userId}`);
        user.email = emailInput.value;
        user.mdp = passwordInput.value;
    }
    showAllUser();
}


function validateForm(){
    const mailOk = mailValid(InputMailCreation);
    const mdpOk = mdpValid(InputMdpCreation);

    if( mailOk && mdpOk) {
        btnCreation.disabled = false;
    } 
    else{
        btnCreation.disabled = true;
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
