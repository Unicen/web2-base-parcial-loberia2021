<form method="POST" action="agregar">
  <div class="mb-3">
    <h1>Agregar division</h1>
  </div>
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre division:</label>
    <input type="name" class="form-control"  name="nombre">
  </div>
  <div class="mb-3">
    <label for="nombre" class="form-label">Tiene faltante:</label>
     <select name="faltante">
            <option value= 1 >Si</option>
            <option value= 0 >No</option>
     </select>
  </div>
  <button type="submit" class="btn btn-primary">Agregar</button>
</form>