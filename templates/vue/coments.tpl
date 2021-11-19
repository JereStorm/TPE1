{literal}
    <section id="coments">
        <div class="caja" v-if="comentarios != 0">
            <!-- Caja de cada comentario -->
        
            <div v-for="coment in comentarios" class="card mt-1">
                <div class="card-body">
                    <p class="card-text">Usuario: {{coment.email}} </p>
                    <p class="card-text">Estrellas: ({{coment.puntaje}}) </p>
                    <p class="card-text">- {{coment.mensaje}}</p>
                </div>
                
                <div class="card-end text-end">
                    <button class="borrar btn btn-danger" v-on:click="delComent" v-bind:data-id="coment.id_comen">X</button>
                </div>
            </div>
        </div>
        <div v-else>
            <p class="no_comentarios">No hay comentarios Aun</p>
        </div>
    </section>

    
    



{/literal}