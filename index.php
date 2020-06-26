

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 bg-dark text-light">
                <form action="agregarDatos.php" method="post">
                    <div class="form-group">
                       <h3>Crear registro</h3>
                      <label for="exampleInputEmail1">Nombre Usuario</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="nombreUsuario">                      
                    </div>  
                    <div class="form-group">                        
                       <label for="exampleInputEmail1">Correo usuario</label>
                       <input type="text" class="form-control" id="exampleInputEmail1" name="correoUsuario">                      
                    </div>          
                    <div class="form-group">                        
                        <label for="exampleInputEmail1">Contraseña</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" name="contraseñaUsuario">                      
                     </div> 
                    <button type="submit" name="agregar" class="btn btn-primary btn-block">Agregar</button><br><br><br>
                </form>
                <form action="buscarDatos.php" method="post">
                    <div class="form-group">
                        <h3>Consultar registro</h3>
                       <label for="exampleInputEmail1">Buscar Usuario</label>
                       <input type="text" class="form-control" id="exampleInputEmail1" name="buscarUsuario">                      
                     </div> 
                     <button type="submit" name="buscar" class="btn btn-success btn-block">Buscar</button><br><br><br>
                </form>
                <form action="eliminarDatos.php" method="post">
                     <div class="form-group">
                        <h3>Eliminar registro</h3>
                       <label for="exampleInputEmail1">Buscar Usuario</label>
                       <input type="text" class="form-control" id="exampleInputEmail1" name="eliminarUsuario">                      
                     </div> 
                     <button type="submit" name="eliminar" class="btn btn-danger btn-block">Eliminar</button><br>
                  </form>
            </div>
            <div class="col-7 border border-dark">
                <h1>Resultado:</h1>                
            </div>
        </div>
    </div>

</body>
</html>