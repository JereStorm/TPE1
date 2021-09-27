<!-- formulario de alta de tarea -->
<form action="addProduct" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Producto
                    <input name="producto" type="text" class="form-control" required>
                </label>
            </div>
        </div>
    </div>
    <div class="row mt-3 mb-3">
        <div class="col-9">
            <div class="form-group">
    
            <select name="tipo" class="form-select" aria-label="Default select example" required>
                    <option value="false" selected>Seleccione tipo</option>
                    {* ACA PODEMOS CREAR UN SELECT DINAMICO CON LA TABLA TIPO *}
                    {foreach from=$types item=item}
                        <option value="{$item->valor}">{$item->nombre}</option>
                    {/foreach}
            </select>
    
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Precio</label>
                <input name="precio" type="text" class="form-control" required>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>