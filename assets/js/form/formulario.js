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
const numberRegex = /^[0-9]+$/;

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

function isNumeric(myString) {
    return /\d/.test(myString);
}

function nameValidate() {
    if (campos[0].value.length <= 0) {
        setError(0, 'Preencha este campo');
    } else {
        removeError(0);
    }
    
    // var nome = isNumeric(campos[0].value);
    // campos.forEach(e => {    
    //     if (isNumeric(e.value) == true) {
    //         setError(0, 'Digita a porra do nome certo');
    //     } else if (campos[0].value.length < 3) {
    //         setError(0, 'O nome deve ter no mínimo 3 caracteres');
    //     }
    //     else {
    //         removeError(0);
    //     }
    // });


    // var nome = document.getElementById('nome');
    // nome.addEventListener('keyup', function () {
    //     if (campos[0].value.length >= 3) {
    //         if (isNumeric(nome.value) == true) {
    //             setError(0, 'Nome não pode conter números');
    //         } else {
    //             removeError(0);
    //         }
    //     } else if (campos) {

    //     } else {
    //         setError(0, 'O nome deve ter no mínimo 3 caracteres');
    //     }
    // });
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
    } else if (campos[4].value[3] == '.') {
        console.log('Chegou aqui');
    } else {
        removeError(4);
    }

    // var cpf = document.getElementById('cpf');   
    //     cpf.addEventListener('keyup', function(){
    //         var cont = cpf.value.length;
    //         if (campos[0].value.length >= 3) {
    //             if (isNumeric(nome.value) == true) {
    //                 setError(0, 'Nome não pode conter números');
    //             } else {
    //                 removeError(0);
    //             }
    //         } else {
    //             setError(0, 'O nome deve ter no mínimo 3 caracteres');
    //         }
    //     });
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