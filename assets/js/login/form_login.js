
const campos = document.querySelectorAll('.required');
const spans = document.querySelectorAll('.span-required');

const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;


function valForm(frm) {
    var nErros = 0;

    if (emailValidate() == false) {
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


function emailValidate() {
    if (!emailRegex.test(campos[0].value)) {
        setError(0, 'Digite um e-mail válido');
        return false;
    }
    else {
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