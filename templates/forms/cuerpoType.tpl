<div class="row">
    <div class="col-9">
        <div class="form-group">
            <label>Tipo Producto
                <input name="tipo" type="text" value="{$value_tipo}" class="form-control" required>
            </label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-9">
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Comentario</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion">{$value_descripcion}</textarea>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary mt-2">Guardar</button>