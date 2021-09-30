    <div class="input-group mb-3">
        <label class="input-group-text alert-success" for="inputGroupSelect01">Producto</label>
        <select name="producto_fk" class="form-select" id="inputGroupSelect01">
          <option selected>Seleccione un Producto</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
        <label class="input-group-text alert-success" for="inputGroupSelect01">Cantidad</label>
        <input name="cantidad" type="number" min="0" class="form-control" required>
        <button class="btn btn-primary btn-outline" type="submit" >Agregar a Stock</button>
      </div>
