<form action="api/coments" method="POST" class="form mt-5" id="form-coment">
    <textarea type="text-area" name="coment" id="coment" class="form-control"></textarea>
    <div class="d-flex">
        <select name="puntaje" id="puntaje" class="form-select">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        
        <input name="id_prod" id="id_prod" type="hidden" value="{$producto->id}">
        {if isset($smarty.session.USER_ID)}
        <button type="submit" class="btn btn-primary mt-2 ms-3">Enviar</button>
        {else}
        <a href="Login" class="btn btn-primary mt-2 ms-3">Enviar</a>       
        {/if}
        
    </div>

</form>