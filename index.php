<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body >
    <div id="marg">       
      <div id="uno">
        <h1 id="titulo">Registrate en nuestra web</h1>
        <h6 id="Subtitulo">Crear registros:</h6>
        <div id="marg2">          
          <form action="agregarDatos.php" method="POST"> 
            <div class="form-group">
                <label for="name" id="nomus">Nombre de usuario:</label>
                <input type="text" class="form-control" id="name" placeholder="Nombre de usuario" name="name">
            </div>
            <div class="form-group">
              <label for="email" id="nomus">Correo:</label>
              <input type="email" class="form-control" id="email" placeholder="Correo" name="email">
            </div>           
            <div class="form-group">
              <label for="pwd" id="nomus">Contraseña:</label>
              <input type="password" class="form-control" id="pwd" placeholder="*********" name="pwd">
            </div>
            <div class="checkbox">
              <label id="nomus"><input type="checkbox" name="check"> Check me out</label>
            </div>
            <button type="submit" class="btn btn-default bg-primary" id="nomu" name="boton">Agregar</button>
            </form>
            <div id="rayita"></div>
            <form action="buscarDatos.php" method="POST">
            <h6 id="Subtitulo">Consultar registro:</h6>
            <div class="form-group">
                <label for="search" id="nomus">Buscar usuario:</label>
                <input type="text" class="form-control" id="search" placeholder="Buscar" name="search">
            </div>
            <button type="submit" class="btn btn-default bg-primary" id="bust" name="boton2">Buscar</button>
            </form>
            <div id="rayita"></div>
            <form action="eliminarDatos.php" method="POST">
            <h6 id="Subtitulo">Eliminar registro:</h6>
              <div class="form-group">
                <label for="delete" id="nomus">Nombre del registro:</label>
                <input type="text" class="form-control" id="delete" placeholder="Nombre" name="delete">
              </div>
            <button type="submit" class="btn btn-default bg-primary" id="bust1" name="boton3">Eliminar</button>
          </form>
        </div>
    </div>   
    <h1 id="resultados" >RESULTADOS:</h1>
    <div class="con"> 
    </div>
</div>
</body>

</html>