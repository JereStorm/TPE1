"use strict"

const API_URL = "api/coments";

var app = new Vue({
    el: '#coments',
    data: {
        titulo: "cosas imposibles",
        comentarios: [],
        promedio:'cargando...',
    },
    methods: {
        delComent: delComent,
        orderComents: orderComents,
        filterComents: filterComents,
       
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

//----------------- FIILTER

// let formFilter = document.querySelector("#filter-coments");
// formFilter.addEventListener('submit', filterComents);

async function filterComents(){
    
    let filtro = document.querySelector('#filtro').value;
    let id_prod = document.querySelector("#id_prod").value;
    
    if(filtro != 'false' && (filtro == 1 || filtro == 2 || filtro ==3 || filtro ==4 || filtro ==5)){
        
        try {
            let response = await fetch(API_URL+'/producto/'+id_prod+'/filter?puntaje='+filtro+''); 
            
            let comentarios = await response.json();
            console.log(comentarios)
            app.comentarios = comentarios;
        } catch(e) {
            showMensaje(false, "Algo salio mal");
        console.log(e);
        }
    }else{
        showMensaje(false, "No se puede filtrar sin puntaje");
    }
    
    
}


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

async function getComents() {
let id_prod = document.querySelector("#id_prod").value;

    try {
        
        let response = await fetch(API_URL+'/producto/'+id_prod); 
        let comentarios = await response.json();
        
        app.comentarios = comentarios;
        promMeje();
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
            
            for(let i = 0; i < app.comentarios.length; i++){

                if(app.comentarios[i].id_comen == id){
                    app.comentarios.splice(i, 1)
                    promMeje();
                }
            };
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



    if(mensaje == '' || puntaje==null){
        showMensaje(false, "No se puede comentar sin puntuar");
        return;
    }

    document.querySelector('#coment').value = '';
    document.querySelector('#puntaje').value = false;

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
            promMeje();
            showMensaje(true, "El mensaje fue enviado correctamente");
        }

    } catch (e) {
        console.log(e);
        showMensaje(false, "Error en el envío del mensaje");
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

// ------------ MENSAJE DE RESPUESTA ENVIO COMENTARIO

function showMensaje(state, mensaje='error'){
    
    let aviso = document.querySelector('#respuesta');

    if(state){
        aviso.className = 'alert alert-success w-50 mt-3';
        aviso.innerHTML = mensaje;   
    }else{
        aviso.className = 'alert alert-danger w-50 mt-3';
        aviso.innerHTML = mensaje;   
    }
    setTimeout(()=>{
        aviso.className = '';
        aviso.innerHTML = '';  
    }, 2000);
}

// ------------ CALCULO DE PROMEDIO DE PUNTAJE PARA EL PRODUCTO
 function promMeje(){
    if(app.comentarios.length==0){
        app.promedio='Sin puntuación';
    }else{
        let suma=0;
        app.comentarios.forEach(comment => {
           suma = suma + parseFloat(comment.puntaje);
        });
        let prom = suma/app.comentarios.length;
        app.promedio = prom.toFixed(1);
    }
 }

// ------------ AUTORENDER
getComents()
