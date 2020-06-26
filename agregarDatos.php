<?php
    require_once "conexion.php";    

    //Si entra aca es por que se estan pasando todos lo valores que necesita el insert asi que no daria error
    if(isset($_POST["agregar"]) && $_POST["nombreUsuario"] != ""  
    && $_POST["correoUsuario"] != "" && $_POST["contraseñaUsuario"] != ""){ 
        
        //Con esto realizamos la query
        $stmt = $pdo->prepare("insert into usuarios(nombre, correo, contraseña)
        values(:nombre, :correo, :contrasena)");

        // Aca le pasamos los valores a la query
        $stmt->execute(array(':nombre' => strtolower($_POST['nombreUsuario']),
        ':correo' => strtolower($_POST['correoUsuario']),
        ':contrasena' => $_POST['contraseñaUsuario'])) ;            

        echo "<h2>Se a realizado el ingreso correctamente</h2>";
        // header("location: index.php");
    }    
    
    
?>