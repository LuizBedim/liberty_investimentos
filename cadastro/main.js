const input = document.querySelector('cpf')

cpf.addEventListener('keypress', () => {
    let inputlenght = cpf.value.length
    
    if (inputlenght === 3 || inputlenght === 7) {
        cpf.value += '.'
    } else if (inputlenght === 11) {
        cpf.value += '-'
    }
})