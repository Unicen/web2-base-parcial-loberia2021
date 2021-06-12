<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{$base_url}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcialweb2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>

<form action="guardar" method="POST">
    <br>
    <br>
    <div class="form-floating mb-3">
      <input type="nombre" class="form-control" id="floatingInput" placeholder="nombre" name="nombre">
      <label for="floatingInput" >nombre</label>
    </div>
    <div class="form-floating mb-3">
      <input type="edad" class="form-control" id="floatingInput" placeholder="edad" name="edad">
      <label for="floatingInput" >edad</label>
    </div>
    <div class="form-floating mb-3">
      <input type="telefono" class="form-control" id="floatingInput" placeholder="telefono" name="telefono">
      <label for="floatingInput" >telefono</label>
    </div>
    <div class="form-floating mb-3">
      <input type="aprobado" class="form-control" id="floatingInput" placeholder="aprobado" name="aprobado">
      <label for="floatingInput" >aprobado</label>
    </div>
    <div class="form-floating mb-3">
      <input type="recursante" class="form-control" id="floatingInput" placeholder="recursante" name="recursante">
      <label for="floatingInput" >recursante</label>
    </div>
    <div class="form-floating mb-3">
      <input type="id_vehiculo_fk" class="form-control" id="floatingInput" placeholder="id_vehiculo_fk" name="id_vehiculo_fk">
      <label for="floatingInput" >id_vehiculo_fk</label>
    </div>
    
    <input class="btn btn-outline-success" type="submit">
</form>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
</body>
</html>