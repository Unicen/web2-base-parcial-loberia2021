{include 'templates/header.tpl'}

<div>
    <table>Aprobados y Mayor de 25
        <thead>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Aprobado</th>
        </thead>
        <tbody>
            {foreach from=$alumnos item=alumno}
                <tr>
                    <td>{$alumno->nombre}
                    </td>
                    <td>{$alumno->edad}
                    </td>
                    <td>
                        {if ($alumno->aprobado)==1}
                            Si
                        {else}
                            No
                        {/if}
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>

    <div>
        <table>Vehiculo SIN FUNCIONAMIENTO y SIN PROFESOR asignado
            <thead>
                <th>Vehiculo</th>
            </thead>
            <tbody>
                {foreach from=$vehiculos item=vehiculo}
                    <tr>
                        <td>
                            {$vehiculo->nombre}
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
        </body>