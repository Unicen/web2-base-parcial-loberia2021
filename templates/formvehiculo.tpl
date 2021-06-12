{include 'templates/header.tpl'}

<form action=cargarvehiculo method="POST">
<label>Nombre</label>
<input type="text" name="nombre">
<br>
<input type="checkbox" name="profesor" value="1">
<label for="recursante">Tiene un profesor asignado?</label><br>
<input type="checkbox" name="funciona" value="1">
<label for="aprobado">Funciona?</label><br>
<br>
<input type="submit" value="Enviar">
</form>