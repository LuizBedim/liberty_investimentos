
const inputNome = document.querySelector('#nome');

console.log(inputNome);

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

