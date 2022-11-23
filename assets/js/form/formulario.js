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
});

        const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

        function setError(index) {
            campos[index].style.border = '1px solid #e63636';
            spans[index].style.display = 'block';
        }

        function removeError(index) {
            campos[index].style.border = '';
            spans[index].style.display = 'none';
        }

        function nameValidate() {
            if (campos[0].value.length < 3) {
                setError(0);
            } else {
                removeError(0);
            }
        }

        function sobrenomeValidate() {
            if (campos[1].value.length < 3) {
                setError(1);
            } else {
                removeError(1);
            }
        }

        function emailValidate() {
            if (!emailRegex.test(campos[2].value)) {
                setError(2);
            }
            else {
                removeError(2);
            }
        }

        function passwordValidate() {
            if (campos[3].value.length < 4) {
                setError(3);
            } else {
                removeError(3);
            }
        }

        function cpfValidate() {
            if (campos[4].value.length != 14) {
                setError(4);
            } else {
                removeError(4);
            }
        }