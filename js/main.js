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
        let response = await fetch(API_URL+"producto/"+id_prod);
        let comentarios = await response.json();
        
        console.log(comentarios);
        app.comentarios = comentarios;
    } catch(e) {
        console.log(e);
    }
    
}
getComents()