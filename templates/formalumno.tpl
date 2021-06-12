{include 'templates/header.tpl'}

<form action=cargaralumno method="POST">
<label>Nombre</label>
<input type="text" name="nombre">
<br>
<label>Edad</label>
<input type="number" name="edad">
<br>
<label>Telefono</label>
<input type="number" name="telefono">
<br>
<input type="checkbox" name="recursante" value="1">
<label for="recursante">Recursa?</label><br>
<input type="checkbox" name="aprobado" value="1">
<label for="aprobado">Aprobado?</label><br>
<select name="vehiculo">
{foreach from=$vehiculos item=vehiculo}
    <option value={$vehiculo->id}>{$vehiculo->nombre}</option>
{/foreach}
</select>
<br>
<input type="submit" value="Enviar">
</form>