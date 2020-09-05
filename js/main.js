"use strict";

document.addEventListener("DOMContentLoaded", () => {
    document.querySelector('#form-table').addEventListener('submit', enviar)

    let container = document.querySelector('#container');

    async function enviar(e) {
        e.preventDefault(); // frena el envio del formuario

        const method = this.method;
        // armo la url semantica en base al form
        const formData = new FormData(this);
        //se le agrega el tabla y numero agregado por el usuario
        const url = `tabla/${formData.get('numero')}`;

        // hago el llamado ajax al php (servidor)
        let response = await fetch(url, {
            method: method
        });
        let html = await response.text();
        // inserto la respuesta en el html ---- se toma el body -----
        container.innerHTML = html;

    }

});