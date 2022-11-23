
const form = document.getElementById('form');
const nome = document.getElementById('nome');
const sobrenome = document.getElementById('sobrenome');


form.addEventListener('submit', (e) => {
    e.preventDefault();

    checkInputs();
});

function checkInputs() {

    const nomeValue = nome.value.trim();

    if (nomeValue === '') {
        setError(nome, 'Preencha esse campo');
    } else {

    }
}

function setError(input, message) {
    
}