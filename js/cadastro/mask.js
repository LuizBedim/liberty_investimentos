const input = document.querySelector('cpf', 'celular', 'cep')

cpf.addEventListener('keypress', () => {
    let inputlenght = cpf.value.length
    
    if (inputlenght === 3 || inputlenght === 7) {
        cpf.value += '.'
    } else if (inputlenght === 11) {
        cpf.value += '-'
    }
})

celular.addEventListener('keypress', () => {
    let celularlenght = celular.value.length

    if (celularlenght === 0) {
        celular.value += '('
    } else if (celularlenght === 3) {
        celular.value += ')'
    } else if (celularlenght === 9) {
        celular.value += '-'
    } 
})

cep.addEventListener('keypress', () => {
    let ceplenght = cep.value.length

    if (ceplenght === 5) {
        cep.value += '-'
    }
})