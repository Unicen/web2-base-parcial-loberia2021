<table class="table">
  <thead>
    <tr>
      <th scope="col-12">Cantidad de divisiones con faltantes</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      {foreach from=$cantidad item=cant}
        <tr>  
          <td>Cantidad: {$cant->cantidad}</td>
        </tr>
     {/foreach}
  </tbody>
</table>