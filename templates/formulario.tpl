<form method="POST" action="agregar">
  <div>
    <h1>Agregar Producto</h1>
  </div>
  <div>
    <label >Nombre:</label>
    <input name="nombre">
  </div>

<div>
   Marca: <input type="text" class="form-control"  name="marca">
   Cantidad:<input type="text" class="form-control"  name="cantidad">

  <label>Importado:</label>
     <select name="importado">
            <option value= 1 >Si</option>
            <option value= 0 >No</option>
     </select>

    Precio:<input type="text" class="form-control"  name="precio">
    Division: <input type="text" class="form-control"  name="division">
  </div>

  <button type="submit" class="btn btn-primary">Agregar</button>
</form>