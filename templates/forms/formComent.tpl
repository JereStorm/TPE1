<div class="d-flex justify-content-center">
    <p id="respuesta" class="mb-0"></p>
</div>

<form action="api/coments" method="POST" class="container w-75 d-flex form mt-5 mb-5" id="form-coment">
            
            <textarea type="text-area" maxlength="200" name="coment" id="coment" class="form-control" placeholder="Dejá tu comentario y puntuá..." required></textarea>
            <span class="label" id="count_message"></span>
            <div class="w-25">
                <select name="puntaje" id="puntaje" class="form-select w-100 ms-3" required>
                    <option value="false" disabled selected>Puntaje</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <input name="id_prod" id="id_prod" type="hidden" value="{$producto->id}">
                  {if isset($smarty.session.USER_ID)}
                <button type="submit" class="btn btn-primary mt-2 ms-3 w-100">Enviar</button>
                {else}
                <a href="Login" class="btn btn-primary mt-2 ms-3 w-100">Enviar</a>       
                {/if}
            </div>
        
        </form>