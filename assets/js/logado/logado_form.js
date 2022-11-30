
const inputNome = document.querySelector('#nome');
const inputSobrenome = document.querySelector('#sobrenome');
const inputCelular = document.querySelector('#celular');
const inputCep = document.querySelector('#cep');
const inputNumero = document.querySelector('#numero');

// const form = document.getElementById('form');
const campos = document.querySelectorAll('.required');
const spans = document.querySelectorAll('.span-required');

const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

function valForm(frm) {
    var nErros = 0;

    if (nameValidate() == false) {
        nErros++;
    }

    if (sobrenomeValidate() == false) {
        nErros++;
    }

    if (passwordValidate() == false) {
        nErros++;
    }

    if (celularValidate() == false) {
        nErros++;
    }

    if (cepValidate() == false) {
        nErros++;
    }

    if (numeroValidate() == false) {
        nErros++;
    }

    if (nErros > 0) {
        return false;
    }

    frm.submit();

}

function setError(index, message) {
    campos[index].style.border = '1px solid #e63636';
    spans[index].style.display = 'block';

    spans[index].innerText = message;
}

function removeError(index) {
    campos[index].style.border = '';
    spans[index].style.display = 'none';
}


// Functions validate
function nameValidate() {
    if (campos[0].value.length < 2) {
        setError(0, 'O nome deve conter no mínimo 2 caracteres');
        return false;
    } else {
        removeError(0);
        return true;
    }
}

function sobrenomeValidate() {
    if (campos[1].value.length < 2) {
        setError(1, 'O sobrenome deve conter no mínimo 2 caracteres');
        return false;
    } else {
        removeError(1);
        return true;
    }
}

function passwordValidate() {
    if (campos[2].value.length < 4) {
        setError(2, 'Digite uma senha com no mínimo 4 caracteres');
        return false;
    } else {
        removeError(2);
        return true;
    }
}

function celularValidate() {
    if (campos[3].value.length != 14) {
        setError(3, 'Digite um número de celular válido');
        return false;
    } else {
        removeError(3);
        return true;
    }
}

function cepValidate() {
    if (campos[4].value.length != 9) {
        setError(4, 'Digite um cep válido');
        return false;
    } else {
        removeError(4);
        return true;
    }
}

function numeroValidate() {
    if (campos[5].value.length < 1) {
        setError(5, 'Preencha este campo');
        return false;
    } else {
        removeError(5);
        return true;
    }
}

// block inputs
inputNome.addEventListener('keypress', function(e) {

    var keyCode = (e.keyCode ? e.keyCode : e.which);
    // 32 espaço -- 65+ a -90 letras maiusculas -- 97+ a -122 letras minusculas
    if (keyCode < 32 || keyCode > 32 && keyCode < 65 || keyCode > 90 && keyCode < 97 || keyCode > 122 && keyCode < 224 || keyCode > 227) {
        e.preventDefault();
    }
});

inputSobrenome.addEventListener('keypress', function(e) {

    var keyCode = (e.keyCode ? e.keyCode : e.which);
    // 32 espaço -- 65+ a -90 letras maiusculas -- 97+ a -122 letras minusculas
    if (keyCode < 32 || keyCode > 32 && keyCode < 65 || keyCode > 90 && keyCode < 97 || keyCode > 122 && keyCode < 224 || keyCode > 227) {
        e.preventDefault();
    }
});

inputCelular.addEventListener('keypress', function(e) {
    var keyCode = (e.keyCode ? e.keyCode : e.which);
    // 47+ a -58
    if (keyCode < 48 || keyCode > 57) {
        e.preventDefault();
    }
});

inputCep.addEventListener('keypress', function(e) {
    var keyCode = (e.keyCode ? e.keyCode : e.which);
    // 47+ a -58
    if (keyCode < 48 || keyCode > 57) {
        e.preventDefault();
    }
});

inputNumero.addEventListener('keypress', function(e) {
    var keyCode = (e.keyCode ? e.keyCode : e.which);
    // 47+ a -58
    if (keyCode < 48 || keyCode > 57) {
        e.preventDefault();
    }
});