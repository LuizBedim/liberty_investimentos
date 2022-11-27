
const inputNome = document.querySelector('#nome');
const inputSobrenome = document.querySelector('#sobrenome');
const inputCpf = document.querySelector('#cpf');
const inputCelular = document.querySelector('#celular');
const inputCep = document.querySelector('#cep');
const inputNumero = document.querySelector('#numero');


const form = document.getElementById('form');
const campos = document.querySelectorAll('.required');
const spans = document.querySelectorAll('.span-required');

const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

// const button = document.getElementById('button');


/*
===== Métodos testados para envio do formulário =====
button.addEventListener('click', (event) => {

    nameValidate();
    
    event.preventDefault();
});

==========

form.addEventListener('submit', (event) => {
    event.preventDefault();

    console.log('prevent');

    nameValidate();
    
});

==========

form.onsubmit = event => {
    event.preventDefault();

    nameValidate();
}
*/

function valForm(frm) {
    var nErros = 0;

    // if (frm.nome.value == '') {
    //     nErros++;
    //     console.log('Vazio' + nErros);
    // }

    if (nameValidate() == false) {
        nErros++;
        console.log('false');
    }

    if (sobrenomeValidate() == false) {
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
        setError(7, 'Preencha este campo');
    } else if (campos[7].value.length >= 5) {
        setError(7, '');
        campos[7].style.border = '1px solid yellow';
    } else {
        removeError(7);
    }
}



// block inputs
inputNome.addEventListener('keypress', function(e) {

    var keyCode = (e.keyCode ? e.keyCode : e.which);
    // 32 espaço -- 65+ a -90 letras maiusculas -- 97+ a -122 letras minusculas
    if (keyCode < 32 || keyCode > 32 && keyCode < 65 || keyCode > 90 && keyCode < 97 || keyCode > 122) {
        e.preventDefault();
    }
});

inputSobrenome.addEventListener('keypress', function(e) {

    var keyCode = (e.keyCode ? e.keyCode : e.which);
    // 32 espaço -- 65+ a -90 letras maiusculas -- 97+ a -122 letras minusculas
    if (keyCode < 32 || keyCode > 32 && keyCode < 65 || keyCode > 90 && keyCode < 97 || keyCode > 122) {
        e.preventDefault();
    }
});

inputCpf.addEventListener('keypress', function(e) {
    var keyCode = (e.keyCode ? e.keyCode : e.which);

    console.log(keyCode);
    // 47+ a -58
    if (keyCode < 48 || keyCode > 57) {
        e.preventDefault();
    }
});

inputCelular.addEventListener('keypress', function(e) {
    var keyCode = (e.keyCode ? e.keyCode : e.which);

    console.log(keyCode);
    // 47+ a -58
    if (keyCode < 48 || keyCode > 57) {
        e.preventDefault();
    }
});

inputCep.addEventListener('keypress', function(e) {
    var keyCode = (e.keyCode ? e.keyCode : e.which);

    console.log(keyCode);
    // 47+ a -58
    if (keyCode < 48 || keyCode > 57) {
        e.preventDefault();
    }
});

inputNumero.addEventListener('keypress', function(e) {
    var keyCode = (e.keyCode ? e.keyCode : e.which);

    console.log(keyCode);
    // 47+ a -58
    if (keyCode < 48 || keyCode > 57) {
        e.preventDefault();
    }
});