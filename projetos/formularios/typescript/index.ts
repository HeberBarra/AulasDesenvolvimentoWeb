const formulario: HTMLFormElement | null = document.querySelector("form");
const botaoEnviar: HTMLButtonElement | null = document.querySelector("button");
const botaoSubmit: HTMLButtonElement | null = document.querySelector("button#enviar");
const inputContaJuridica: HTMLInputElement | null = document.querySelector("#cj");
const inputContaFisica: HTMLInputElement | null = document.querySelector("#cf");
const inputCnpj: HTMLInputElement | null = document.querySelector("#cnpj");
const inputCpf: HTMLInputElement | null = document.querySelector("#cpf");
const inputEmail: HTMLInputElement | null = document.querySelector("#email");
const inputConfirmarEmail: HTMLInputElement | null = document.querySelector("#confirmaremail");
const avisoEmail: HTMLSpanElement | null = document.querySelector("#aviso-email");
const inputSenha: HTMLInputElement | null = document.querySelector("#senha");
const inputConfirmarSenha: HTMLInputElement | null = document.querySelector("#confirmarsenha");
const avisoSenha: HTMLSpanElement | null = document.querySelector("#aviso-senha");

const ativarInput = (botaoRadio: HTMLInputElement, input: HTMLInputElement) => {
    if (botaoRadio.checked) {
        input.disabled = false;
        input.required = true;
    } else {
        input.disabled = true;
        input.required = false;
    }
}

const verificarEmail = (): boolean => {
    let coincidem: boolean = inputEmail?.value === inputConfirmarEmail?.value;

    if (avisoEmail == null) {
        return false;
    }

    if (coincidem) {
        avisoEmail.style.display = "none";
    } else {
        avisoEmail.style.display = "block";
    }

    return coincidem;
}

const verificarSenha = (): boolean => {
    let coincidem = inputSenha?.value == inputConfirmarSenha?.value;

    if (avisoSenha == null) {
        return false;
    }

    if (coincidem) {
        avisoSenha.style.display = "none";
    } else {
        avisoSenha.style.display = "block"
    }

    return coincidem;
}

inputContaFisica?.addEventListener("change", () => {
    if (inputCpf == null || inputContaJuridica == null || inputCnpj == null) {
        return;
    }


    ativarInput(inputContaJuridica, inputCnpj);
    ativarInput(inputContaFisica, inputCpf);
})

inputContaJuridica?.addEventListener("change", () => {
    if (inputCnpj == null || inputContaFisica == null || inputCpf == null) {
        return;
    }

    ativarInput(inputContaFisica, inputCpf);
    ativarInput(inputContaJuridica, inputCnpj);
})

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
})
