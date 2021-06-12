<!DOCTYPE html>
<html lang="en">
<head>
    <div>
        {foreach from = $divisionesfaltantes item=unadivision}        
                <div>
                    <a {$unadividision->nombre}>nombre de division</a>
                    <a {$unadividision->id}>id</a>
                    <a {$unadividision->faltantes}>cantidad de producto</a>
                </div>
        {/foreach}
    </div>
</html>