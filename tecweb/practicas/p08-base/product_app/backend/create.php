<?php
    include_once __DIR__.'/database.php';
    $producto = file_get_contents('php://input');
    if(!empty($producto)) {    $jsonOBJ = json_decode($producto, true);

        $nombreobj = $jsonOBJ["nombre"];
        $marcaobj = $jsonOBJ["marca"];
        $modeloobj = $jsonOBJ["modelo"];
        $precioobj = $jsonOBJ["precio"];
        $detallesobj = $jsonOBJ["detalles"];
        $unidadesobj = $jsonOBJ["unidades"];
        $imagenobj = $jsonOBJ["imagen"];

        $consultaObjs = $conexion->query("SELECT * FROM productos WHERE nombre='{$nombreobj}' AND eliminado=0");
        if ($consultaObjs->num_rows != 0) {
            echo "ESTE PRODUCTO YA EXISTE";   }
        else {  if ( $result = $conexion->query("INSERT INTO productos VALUES (NULL, '{$nombreobj}', '{$marcaobj}', '{$modeloobj}', '{$precioobj}', '{$detallesobj}', '{$unidadesobj}', '{$imagenobj}', '0')") ) {
                echo "ESTE PRODUCTO FUE  INSERTADO CORRECTAMENTE ";   }
        else { die('Query Error: '.mysqli_error($conexion));
                echo "ESTE PRODUCTO NO  FUE INSERTADO";             }
        } $conexion->close();
    }                    ?>