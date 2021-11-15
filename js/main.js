"use strict"

const API_URL = "api/coments";

var app = new Vue({
    el: '#coments',
    data: {
        titulo: "cosas imposibles",
        comentarios : [],
    }
  });

let form = document.querySelector("#form-coment");
form.addEventListener('submit', addComent);

async function getComents() {
let id_prod = document.querySelector("#id_prod").value;
try {
    let response = await fetch(API_URL+'/producto/'+id_prod);
    let comentarios = await response.json();
    
    app.comentarios = comentarios;
    } catch(e) {
        console.log(e);
    }
}



async function addComent(e) {
    e.preventDefault();

    let data = new FormData(form);
    let hoy = fechaHoy();

    let user = document.querySelector('#user');
    let id_user = user.getAttribute('data_id');

    let coment = {
        mensaje: data.get('coment'),
        fecha: hoy,
        puntaje: data.get('puntaje'),
        id_user_fk: id_user,
        id_prod_fk: data.get('id_prod'),
    }
    try {
        let response = await fetch(API_URL, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(coment),
        });

        if (response.ok) {
            
            let comentario = await response.json();
            console.log(comentario)
         
            app.comentarios.push(comentario);
            
        }

    } catch(e) {
        console.log(e)
    }
}

function fechaHoy(){
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!
    var yyyy = today.getFullYear();

    if (dd < 10) {
            dd = '0' + dd;
    }

    if (mm < 10) {
        mm = '0' + mm;
    }

    today = yyyy + '/' + mm + '/' + dd;
    
    return today
}
getComents()