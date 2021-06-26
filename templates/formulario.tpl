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
      <div>
        <form action="guardar" method="POST">
            <br>
            <br>
            <div>
                <input type="nombre" id="floatingInput" placeholder="nombre division" name="nombre">
                <label for="floatingInput">nombre division</label>
            </div>
            <div>
                <input type="faltantes" id="floatingInput" placeholder="Faltantes" name="faltantes">
                <label for="floatingInput">Faltantes</label>
            </div>
            <input type="submit">
        </form>
    </div>
      </body>
</html>