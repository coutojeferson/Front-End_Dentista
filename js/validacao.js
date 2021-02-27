// Validação do formulário de cadastro

var form = document.getElementById('form');

if(form) {
    form.addEventListener('submit', function (event) {
        if (!ValidaFomulario()) {
             alert('Preencha todos os campos!');
             event.preventDefault();
         }
    });
}

function ValidaFomulario() {

    var nome = document.getElementById('nome');
    var sexo = document.getElementById('sexo');
    var idade = document.getElementById('idade');
    var contErro = 0;

    if(nome.value == '') {
        contErro++;

        nome.style.borderColor = 'red';
        document.getElementById('legenda_nome').innerHTML = 'Insira o nome!';
    } else {
        nome.style.borderColor = '#ccc';
        document.getElementById('legenda_nome').innerHTML = '';
    }

    if(sexo.value == '') {
        contErro++;

        sexo.style.borderColor = 'red';
        document.getElementById('legenda_sexo').innerHTML = 'Insira a Sexo';
    } else {
        sexo.style.borderColor = '#ccc';
        document.getElementById('legenda_sexo').innerHTML = '';
    }

    if(idade.value == '') {
        contErro++;

        idade.style.borderColor = 'red';
        document.getElementById('legenda_idade').innerHTML = 'Insira a Idade';
    } else {
        idade.style.borderColor = '#ccc';
        document.getElementById('legenda_idade').innerHTML = '';
    }

    if (contErro == 0) {
        return true;
    } else {
        return false;
    }

}
