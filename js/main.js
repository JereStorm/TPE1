"use strict"

const API_URL = "api/coments";

var app = new Vue({
    el: '#coments',
    data: {
        titulo: "cosas imposibles",
        comentarios : [],
        
    },
    methods: {
        delComent: delComent,
        orderComents: orderComents,
       
    },
    filters: {
        truncate: function(data,num){
            const reqdString = 
              data.split("").slice(0, num).join("");
            return reqdString;
        }
    }
    
});

let form = document.querySelector("#form-coment");
form.addEventListener('submit', addComent);

//----------------- ORDER


async function orderComents(orden){
    let prioridad = document.querySelector('#prioridad').value;
    let id_prod = document.querySelector("#id_prod").value;
    
    // throw(console.log(prioridad, id_prod, orden))
    try {
        
        let response = await fetch(API_URL+'/producto/'+id_prod+'?campo='+prioridad+'&orden='+orden); 
        let comentarios = await response.json();
        console.log(comentarios)
        app.comentarios = comentarios;
    } catch(e) {
        console.log(e);
    }
}
//----------------- GETALL

async function getComents(orden = '') {
let id_prod = document.querySelector("#id_prod").value;

    try {
        
        let response = await fetch(API_URL+'/producto/'+id_prod); 
        let comentarios = await response.json();
        
        app.comentarios = comentarios;
    } catch(e) {
        console.log(e);
    }
        
}
//----------------- DELETE


async function delComent(e) {
    e.preventDefault();
    let id = e.target.getAttribute('data-id');
    try {
        let res = await fetch(`${API_URL}/${id}`, {
            "method": "DELETE",
        });
        if (res.ok) {
            console.log(res)
            getComents();
            console.log("Eliminado con exito")
        } else {
            console.log("Eliminado fallido")
        }
    } catch (error) {
        console.log(error);
    }
}
//----------------- ADD


async function addComent(e) {
    e.preventDefault();

    let data = new FormData(form);
    let hoy = fechaHoy();

    let user = document.querySelector('#user');
    let id_user = user.getAttribute('data_id');

    let mensaje = data.get('coment');
    let puntaje = data.get('puntaje');

    if(mensaje == ''){
        console.log('No se puede comentar vacio');
        return;
    }

    let coment = {
        mensaje: mensaje,
        fecha: hoy,
        puntaje: puntaje,
        id_user_fk: id_user,
        id_prod_fk: data.get('id_prod'),
    }
    await insertComent(coment);
}
//----------------- INSERT

async function insertComent(coment) {
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
            console.log(comentario);

            app.comentarios.push(comentario);
        }

    } catch (e) {
        console.log(e);
    }
}
// ---------- FECHA
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
// ------------ AUTORENDER
getComents()
