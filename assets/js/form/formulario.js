const form = document.getElementById('form');
const campos = document.querySelectorAll('.required');
const spans = document.querySelectorAll('.span-required');

form.addEventListener('submit', (event) => {
    event.preventDefault();
    nameValidate();
    sobrenomeValidate();
    emailValidate();
    passwordValidate();
    cpfValidate();
    celularValidate();
    cepValidate();
    numeroValidate();
});

const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

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

function nameValidate() {
    if (campos[0].value.length < 3) {
        setError(0, 'O nome deve ter no mínimo 3 caracteres');
    }
    else {
        removeError(0)
    }
}

function sobrenomeValidate() {
    if (campos[1].value.length < 3) {
        setError(1, 'O sobrenome deve ter no mínimo 3 caracteres');
    }
    else {
        removeError(1);
    }
}

function emailValidate() {
    if (!emailRegex.test(campos[2].value)) {
        setError(2, 'Digite um e-mail válido');
    }
    else {
        removeError(2);
    }
}

function passwordValidate() {
    if (campos[3].value.length < 4) {
        setError(3, 'Digite uma senha com no mínimo 4 caracteres');
    } else {
        removeError(3);
    }
}

function cpfValidate() {
    if (campos[4].value.length != 14) {
        setError(4, 'Digite um cpf válido');
    } else {
        removeError(4);
    }
}

function celularValidate() {
    if (campos[5].value.length != 14) {
        setError(5, 'Digite um número de celular válido');
    } else {
        removeError(5);
    }
}

function cepValidate() {
    if (campos[6].value.length != 9) {
        setError(6, 'Digite um cep válido');
    } else {
        removeError(6);
    }
}

function numeroValidate() {
    if (campos[7].value.length < 1) {
        setError(7, 'Preencha este campo com um número válido');
    } else if (campos[7].value.length >= 5) {
        setError(7, '');
        campos[7].style.border = '1px solid yellow';
    } else {
        removeError(7);
    }
}