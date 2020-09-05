"use strict"

// defino el event listener al submit del formulario
document.querySelector('#form-calc').addEventListener('submit', enviar)

const resultadoContainer = document.querySelector('#resultado');

async function enviar(e) {
    e.preventDefault(); // frena el envio del formuario

    // tomo el method del form
    const method = this.method;

    // armo la url semantica en base al form
    const formData = new FormData(this);
    const url =  `${formData.get('operacion')}/${formData.get('operandoX')}/${formData.get('operandoY')}`;
    
    // hago el llamado ajax al php (servidor)
    let response = await fetch(url, {
        method: method
    });
    let html = await response.text();

    // inserto la respuesta en el html
    resultadoContainer.innerHTML = html;

}