

<div>
    <ul>
    {foreach from=$alumnos item=alumno}
        <h4>Aprobados</h4>  
        {if $alumno->aprobado != 0}
            <li> {$alumno->nombre}</li>
        {/if}
        <h4>Desaprobados</h4>  
        {if $alumno->aprobado != 1}
            <li> {$alumno->nombre}</li>
        {/if}
    {/foreach}
    </ul>
</div>
