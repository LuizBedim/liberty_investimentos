const input = document.querySelector('celular', 'cep')

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