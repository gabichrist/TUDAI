"use strict"
let form = document.querySelector("#form-tabla");
if (form) {
    form.addEventListener('submit', calcular);
}

async function calcular(e) {
    e.preventDefault();
    let data = new FormData(form);

    let numero = data.get('numero');
    // construir url (sumar/2/3)
    let url = `tabla/${numero}`;  // op + "/" + numero1 + / ""
    // realizo el llamado
    window.location.href = url;

//     let response = await fetch(url);
//     let resultado = await response.text();
//     document.querySelector('#resultado').innerHTML = resultado;
}
