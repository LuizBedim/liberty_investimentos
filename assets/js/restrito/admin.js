
const inputUser = document.querySelector('#usuario');

// const form = document.getElementById('form');
const campos = document.querySelectorAll('.required');
const spans = document.querySelectorAll('.span-required');

const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

function valForm(frm) {
    var nErros = 0;

    if (userValidate() == false) {
        nErros++;
    }

    if (passwordValidate() == false) {
        nErros++;
    }

    if (nErros > 0) {
        return false;
    }

    frm.submit();
}


// Error functions
function setError(index, message) {
    campos[index].style.border = '1px solid #e63636';
    spans[index].style.display = 'block';


    spans[index].innerText = message;
    // const span = document.querySelector('span');
    // span.innerText = message;
}

function removeError(index) {
    campos[index].style.border = '';
    spans[index].style.display = 'none';
}

function userValidate() {
    if (campos[0].value.length < 2) {
        setError(0, 'O nome deve conter no mínimo 2 caracteres');
        return false;
    } else {
        removeError(0);
        return true;
    }
}

function passwordValidate() {
    if (campos[1].value.length < 1) {
        setError(1, 'Preencha este campo');
        return false;
    } else {
        removeError(1);
        return true;
    }
}

// block inputs
inputUser.addEventListener('keypress', function(e) {

    var keyCode = (e.keyCode ? e.keyCode : e.which);
    // 32 espaço -- 65+ a -90 letras maiusculas -- 97+ a -122 letras minusculas
    if (keyCode < 32 || keyCode > 32 && keyCode < 65 || keyCode > 90 && keyCode < 97 || keyCode > 122 && keyCode < 224 || keyCode > 227) {
        e.preventDefault();
    }
});
