<?php
    include_once __DIR__.'/database.php';
    $data = array();
    if( isset($_POST['id']) ) {
        $id = $_POST['id'];
       
         $result = $conexion->query("SELECT * FROM productos WHERE id like '{$id}' || nombre like '{$id}%' || marca like '{$id}%' || detalles like '{$id}%'");
         
        while($row = mysqli_fetch_assoc($result)){   $data[]=$row; }           } 
    $conexion->close();
    // SE HACE LA CONVERSIÓN DE ARRAY A JSON
    echo json_encode($data, JSON_PRETTY_PRINT);
?>