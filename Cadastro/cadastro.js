$(document).ready(function(){
    $('#CPF').mask('000.000.000-00');
    $('#numero').mask('(00) 00000-0000');
});

function validarFormulario() {
    var usuario = document.getElementById("usuario").value;
    var cpf = document.getElementById("CPF").value;
    var numero = document.getElementById("numero").value;
    var senha = document.getElementById("senha").value;
    var senha2 = document.getElementById("senha2").value;
    var regex = /^[a-zA-Z0-9_.-]+$/;

    if (!regex.test(usuario)) {
        alert("O nome de usuário não pode ter acentos ou caracteres especiais, exceto _ . -");
        return false;
    }

    if (usuario.length > 28) {
        alert("O nome de usuário não pode ter mais de 28 caracteres.");
        return false;
    }

    if (cpf.length !== 14) { // Verifica se o CPF tem 14 caracteres (incluindo os pontos e hífen)
        alert("Por favor, insira um CPF válido com 11 dígitos.");
        return false;
    }

    if (numero.length !== 15) { // Verifica se o número de telefone tem 15 caracteres (incluindo parênteses e hífen)
        alert("Por favor, insira um número de telefone válido com todos os dígitos.");
        return false;
    }

    if (senha != senha2) {
        alert("As senhas não coincidem. Por favor, tente novamente.");
        return false;
    }

    return true;
}