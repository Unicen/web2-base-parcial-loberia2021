{include 'templates/header.tpl'}
<div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>edad</th>
                <th>Telefono</th>
                <th>Aprobado</th>
                <th>Recursante</th>
                <th>Vehiculo</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$listaAlumno item=alumno}
                <tr>
                    <td>{$alumno->id}</td>
                    <td>{$alumno->nombre}</td>
                    <td>{$alumno->edad}</td>
                    <td>{$alumno->telefono}</td>
                    <td>{$alumno->aprobado}</td>
                    <td>{$alumno->recursante}</td>
                    <td>{$alumno->id_vehiculo_fk}</td>
                </tr> 
            {/foreach}
        </tbody>
    </table>
</div>

{include 'templates/footer.tpl'}