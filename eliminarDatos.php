<?php
    require_once "conexion.php";    
    var_dump($_POST);
    if(isset($_POST["eliminar"]) && $_POST["eliminarUsuario"] != ""){
        
        //Con esta linea de codigo generamos la query
        $stmt = $pdo->prepare("delete from usuarios where nombre=:nombre ");        
        $stmt->execute(array(':nombre' => $_POST['eliminarUsuario']));                 
        
        header("location: index.php");              
    }
    
?>