function nextForm() {
    var mainForm = document.getElementById('inicial');
    var secondForm = document.getElementById('final');
    var loader = document.getElementById('dotAnim');

    document.getElementById("inputUser").toggleAttribute("disabled");

    loader.style.display = 'flex';

    setTimeout(() => {
        loader.style.display = 'none';
        mainForm.style.display = 'none';
        mostrarUsr();
        secondForm.style.display = 'block';
    }, 1000)
}

function mostrarUsr() {
    var user = document.getElementById("inputUser").value;

    var etiquetaUser = document.getElementById("etiquetaUser");
    var usrSave = document.getElementById("usrSaved");
    etiquetaUser.innerHTML = user;
    usrSave.value = user;
}

function togglePss(passwordInputId, eyeIconId) {
    var passwordInput = document.getElementById(passwordInputId);
    var eyeIcon = document.getElementById(eyeIconId);

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.classList.remove("ion-ojoCerrado");
        eyeIcon.classList.add("ion-ojoAbierto");
    } else {
        passwordInput.type = "password";
        eyeIcon.classList.remove("ion-ojoAbierto");
        eyeIcon.classList.add("ion-ojoCerrado");
    }
}

function checkInput(inputId, btnId, characters) {
    var input = document.getElementById(inputId);
    var button = document.getElementById(btnId);

    if (input.value.length >= characters) {
        button.disabled = false;
    } else {
        button.disabled = true;
    }
}

function fExp(e) {
    var inputChar = String.fromCharCode(e.keyCode);
    var code = e.keyCode;
    var allowedKeys = [8];
    if (allowedKeys.indexOf(code) !== -1) {
        return;
    }

    e.target.value = e.target.value.replace(
        /^([1-9]\/|[2-9])$/g, '0$1/'
    ).replace(
        /^(0[1-9]|1[0-2])$/g, '$1/'
    ).replace(
        /^([0-1])([3-9])$/g, '0$1/$2'
    ).replace(
        /^(0?[1-9]|1[0-2])([0-9]{2})$/g, '$1/$2'
    ).replace(
        /^([0]+)\/|[0]+$/g, '0'
    ).replace(
        /[^\d\/]|^[\/]*$/g, ''
    ).replace(
        /\/\//g, '/'
    );
};