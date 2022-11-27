const button = document.getElementById('button');
const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
const form = document.getElementById('form');

// button.addEventListener('click', (event) => {
//     event.preventDefault();

//     const nome = document.getElementById('nome');
    
//     if (nome.value.length < 2) {
//         console.log('Name error');
//         setError(0, 'O nome deve conter no mínimo 2 caracteres');
//     } else {
//         console.log('Passou');
//         removeError(0);
//     }

//     if (campos[1].value.length < 2) {
//         setError(1, 'O sobrenome deve conter no mínimo 2 caracteres');
//     } else {
//         removeError(1);
//     }

// });

const inputNome = document.querySelector('#nome');


const campos = document.querySelectorAll('.required');
const spans = document.querySelectorAll('.span-required');

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

inputNome.addEventListener('keypress', function(e) {

    var keyCode = (e.keyCode ? e.keyCode : e.which);
    // 32 espaço -- 65+ a -90 letras maiusculas -- 97+ a -122 letras minusculas
    if (keyCode < 32 || keyCode > 32 && keyCode < 65 || keyCode > 90 && keyCode < 97 || keyCode > 122) {
        e.preventDefault();
    }
});
