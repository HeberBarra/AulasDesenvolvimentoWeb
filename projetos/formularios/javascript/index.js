"use strict";
const formulario = document.querySelector("form");
const botaoEnviar = document.querySelector("button");
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
    let coincidem = inputEmail?.textContent == inputConfirmarEmail?.textContent;
    console.log(coincidem);
    if (avisoEmail == null) {
        return false;
    }
    if (coincidem) {
        avisoEmail.style.display = "block";
    }
    else {
        avisoEmail.style.display = "none";
    }
    return coincidem;
};
const verificarSenha = () => {
    let coincidem = inputSenha?.textContent == inputConfirmarSenha?.textContent;
    if (inputSenha?.textContent == "" || inputConfirmarSenha?.textContent == "") {
        return true;
    }
    if (avisoSenha == null) {
        return false;
    }
    if (coincidem) {
        avisoSenha.style.display = "block";
    }
    else {
        avisoSenha.style.display = "false";
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
botaoEnviar?.addEventListener("click", () => {
    if (verificarEmail() && verificarSenha()) {
        formulario?.submit();
    }
});
