{literal}
    <div class="caja" id="coments">
            <!-- Caja de cada comentario -->
            <div v-for="coment in comentarios" class="card mt-1">
                <div class="card-body">
                    <p class="card-text">Usuario: {{coment.email}} </p> <p class="card-text">- {{coment.mensaje}}</p>
                </div>
                
            </div>


    </div>
{/literal}