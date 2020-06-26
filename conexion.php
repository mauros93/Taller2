<?php
    $pdo = new PDO('mysql:host=localhost; port=3306; dbname=bd_acdivoca', 'root', '');
    
    //En caso de que haya un error en la BD esto nos muestra cual es el error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>