{include file="header.tpl"}
<table>
    <thead>
        <tr>
            <th>ALUMNOS > 25</th>
            <th>APROBADOS </th>
        </tr>

    </thead>

        {foreach from=$alumnos item=alumno}
            <tr>
                <td>{$alumno->nombre}</td>
                <td>{$alumno->aprobado}</td>
            </tr>
        {/foreach}

    </tbody>    

</table>