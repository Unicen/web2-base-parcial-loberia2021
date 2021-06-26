<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{$base_url}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperatorio Gigena</title>
</head>
        <body>
        <table class="default">
            <h1>Productos Importados</h1>
            <tr>
                <th>Nombre</th>
                <th>Id</th>
            </tr>
            {foreach from = $listaproductosimportados item=productoimportado}
            <tr>
                <td>{$productoimportado->nombre}</td>
                <td>{$productoimportado->id}</td>
            </tr>
            {/foreach}
            </table>

            <table class="default">
            <h1>Productos No Importados</h1>
            <tr>
                <th>Nombre</th>
                <th>Id</th>
            </tr>
            {foreach from = $listaproductosnoimportados item=productonoimportado}
            <tr>
                <td>{$productonoimportado->nombre}</td>
                <td>{$productonoimportado->id}</td>
            </tr>
            {/foreach}
            </table>

            <h2>Seccion Admin</h2>
            <button href='admin'>Ir a panel de control</button>
        </body>
</html>