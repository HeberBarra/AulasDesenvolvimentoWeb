"use strict";
const formulario = document.querySelector("form");
const botaoEnviar = document.querySelector("button");
const botaoSubmit = document.querySelector("button#enviar");
const inputContaJuridica = document.querySelector("#cj");
const inputContaFisica = document.querySelector("#cf");
const inputCnpj = document.querySelector("#cnpj");
const inputCpf = document.querySelector("#cpf");
const inputEmail = document.querySelector("#email");
const inputConfirmarEmail = document.querySelector("#confirmaremail");
const avisoEmail = document.querySelector("#aviso-email");
const inputSenha = document.querySelector("#senha");
const inputConfirmarSenha = document.querySelector("#confirmarsenha");
const avisoSenha = document.querySelector("#aviso-senha");
const ativarInput = (botaoRadio, input) => {
    if (botaoRadio.checked) {
        input.disabled = false;
        input.required = true;
    }
    else {
        input.disabled = true;
        input.required = false;
    }
};
const verificarEmail = () => {
    let coincidem = inputEmail?.value === inputConfirmarEmail?.value;
    if (avisoEmail == null) {
        return false;
    }
    if (coincidem) {
        avisoEmail.style.display = "none";
    }
    else {
        avisoEmail.style.display = "block";
    }
    return coincidem;
};
const verificarSenha = () => {
    let coincidem = inputSenha?.value == inputConfirmarSenha?.value;
    if (avisoSenha == null) {
        return false;
    }
    if (coincidem) {
        avisoSenha.style.display = "none";
    }
    else {
        avisoSenha.style.display = "block";
    }
    return coincidem;
};
inputContaFisica?.addEventListener("change", () => {
    if (inputCpf == null || inputContaJuridica == null || inputCnpj == null) {
        return;
    }
    ativarInput(inputContaJuridica, inputCnpj);
    ativarInput(inputContaFisica, inputCpf);
});
inputContaJuridica?.addEventListener("change", () => {
    if (inputCnpj == null || inputContaFisica == null || inputCpf == null) {
        return;
    }
    ativarInput(inputContaFisica, inputCpf);
    ativarInput(inputContaJuridica, inputCnpj);
});
inputEmail?.addEventListener("input", verificarEmail);
inputConfirmarEmail?.addEventListener("input", verificarEmail);
inputSenha?.addEventListener("input", verificarSenha);
inputConfirmarSenha?.addEventListener("input", verificarSenha);
botaoEnviar?.addEventListener("click", () => {
    if (inputEmail?.value == "" || inputConfirmarEmail?.value == "") {
        return;
    }
    if (!verificarEmail() || !verificarSenha()) {
        return;
    }
    if (inputSenha?.value == "" || inputConfirmarSenha?.value == "") {
        return;
    }
    if (!verificarSenha()) {
        return;
    }
    botaoSubmit?.click();
});
