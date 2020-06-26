<?php
    require_once "conexion.php";        
    require_once "enlaces.php";
    if(isset($_POST["buscar"]) && $_POST["buscarUsuario"] != ""){
        
        //Con esta linea de codigo generamos la query
        $stmt = $pdo->prepare("select * from usuarios where nombre=:nombre ");        
        $stmt->execute(array(':nombre' => $_POST['buscarUsuario']));    

        //Con este codigo generamos la tabla que se muestra              
        echo '<table class="table"><thead><tr>';        
        echo "<th scope='col'>id_usuario</th>";
        echo "<th scope='col'nombre'>nombre</th>";
        echo "<th scope='col'>correo</th>";
        echo "<th scope='col'>contraseña</th>";
        echo "</thead></tr>";         
        while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
            echo "<tbody><tr>";
            echo "<th scope='row'>";
            echo($row['id_usuario']);
            echo "</th>";
            echo "<td>";
            echo($row['nombre']);
            echo "</td>";
            echo "<td>";
            echo($row['correo']);
            echo "</td>";
            echo "<td>";
            echo($row['contraseña']);
            echo "</td>";          
        }
        echo "</table>\n"; 

                
    }

    
    
?>