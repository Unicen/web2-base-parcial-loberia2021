{include file="header.tpl"}



<form action="agregarAlumno" method="POST">

                nombre
                <input type="text" class="form-control " name="nombreAlumno">
                edad
                <input type="number" class="form-control" name="edadAlumno">
                telefono
                <input type="text" class="form-control " name=" telefonoAlumno">
                aprobado
                <select name="aprobadoAlumno">
                <option value="value1">SI</option>
                <option value="value2">NO</option>
                </select>
                recursante
                <select name="recursanteAlumno">
                <option value="value1">SI</option>
                <option value="value2">NO</option>
                </select>

                <input type="submit" value="AGREGAR">


 </form>    