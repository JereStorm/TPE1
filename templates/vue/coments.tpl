{literal}
<section >
    <div class="d-flex flex-column" v-if="comentarios != 0">
        <!--Caja de cada comentario-->
        <div class=" caja">
            <form class="botonera sticky-top bg-white p-1" id="orden">
                <select name="campo" class="form-select" id="prioridad">
                    <option value="puntaje">Puntaje</option>
                    <option value="antiguedad">Antiguedad</option>
                </select>
                <button class="btn" type="button" v-on:click="orderComents('ASC')">Ascendente</button>
                <button class="btn" type="button" v-on:click="orderComents('DESC')">Descendente</button>
            </form>
            <div v-for="coment in comentarios" class="card mt-1">
                <div class="card-body">
                    <p class="card-text">Usuario: {{coment.email}} | Estrellas: ({{coment.puntaje}}) | Fecha: {{coment.fecha}}</p>
                    <div class="card_caja">
                        <p class="card-text">- {{coment.mensaje | truncate(40)}}...</p>
                        {/literal}
                        {if isset($smarty.session.USER_ROL) && $smarty.session.USER_ROL==ADMIN}
                        {literal}
                        <button class="borrar btn btn-danger" v-on:click="delComent"
                            v-bind:data-id="coment.id_comen">X</button>
                        {/literal}
                        {/if}
                        {literal}
                    </div>

                </div>
            </div>
        </div>

        
    </div>

    <div v-else>
        <p class="no_comentarios">No hay comentarios Aun</p>
    </div>
   
<div class="d-flex">
        <select name="puntaje" id="filtro" class="form-select w-100 ms-3" required>
            <option value="false" disabled selected>Puntaje</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <button type="button" class="btn btn-info" v-on:click="filterComents">Filtrar</button>
    </div>
</section>
 
{/literal}