"use strict"

const API_URL = "api/coments/";

var app = new Vue({
    el: '#coments',
    data: {
        titulo: "cosas imposibles",
        comentarios : []
    }
  })
  
  async function getComents() {
    let id_prod = document.querySelector("#id_prod").value;
    try {
        let response = await fetch(API_URL+'producto/'+id_prod);
        let comentarios = await response.json();
        
        app.comentarios = comentarios;
        } catch(e) {
            console.log(e);
        }
    }

    let form = document.querySelector("#form-coment");
    form.addEventListener('submit', addComent);

    async function addComent(e) {
        e.preventDefault();

        let hoy = fechaHoy();

        let data = new FormData(form);
        let coment = {
            mensaje: data.get('coment'),
            fecha: hoy,
            puntaje: data.get('puntaje'),
            id_prod_fk: data.get('id_prod')
        }
    console.log(coment);
        try {
            let response = await fetch(API_URL, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(coment),
            });
    
            if (response.ok) {
                let coment = await response.json();
                app.comentarios.push(coment);
                
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