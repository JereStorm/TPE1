{literal}
<section id="coments">

    <div class="caja" v-if="comentarios != 0">
        <!-- Caja de cada comentario -->
        <form class="botonera sticky-top bg-white" id="orden">
            <select name="campo" class="form-select" id="prioridad">
                <option value="puntaje">Puntaje</option>
                <option value="antiguedad">Antiguedad</option>
            </select>
            <button class="btn" type="button" v-on:click="orderComents('ASC')">Ascendente</button>
            <button class="btn" type="button" v-on:click="orderComents('DESC')">Descendente</button>
        </form>
        <div v-for="coment in comentarios" class="card mt-1">
            <div class="card-body">
                <p class="card-text">Usuario: {{coment.email}} - Estrellas: ({{coment.puntaje}})</p>
                <div class="card_caja">
                    <p class="card-text">- {{coment.mensaje | truncate(70)}}...</p>

                    <button class="borrar btn btn-danger" v-on:click="delComent"
                        v-bind:data-id="coment.id_comen">X</button>
                </div>

            </div>


        </div>
    </div>
    <div v-else>
        <p class="no_comentarios">No hay comentarios Aun</p>
    </div>
</section>






{/literal}