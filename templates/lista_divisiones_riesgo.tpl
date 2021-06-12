<table class="table">
  <thead>
    <tr>
      <th scope="col-12">Faltantes</th>
    </tr>
  </thead>
  <tbody>
  {foreach from=$divisiones item=division}
    <tr>
      <td>Division: {$division->nombre}</td>
    </tr>
  {/foreach}
  </tbody>
</table>