
const inputNome = document.querySelector('#nome');
const inputSobre = document.querySelector('#sobre');


const form = document.getElementById('form');
const campos = document.querySelectorAll('.required');
const spans = document.querySelectorAll('.span-required');


inputNome.addEventListener('keypress', function(e) {

    var keyCode = (e.keyCode ? e.keyCode : e.which);

    console.log(keyCode);
    // 47+ a -58
    // if (keyCode > 47 && keyCode < 58) {
    //     e.preventDefault();
    // }
    if (keyCode < 65 || keyCode > 90 && keyCode < 97 || keyCode > 122) {
        e.preventDefault();
    }
});

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
    if (campos[0].value.length <= 0) {
        setError(0, 'Preencha este campo');
    } else {
        removeError(0);
    }
}