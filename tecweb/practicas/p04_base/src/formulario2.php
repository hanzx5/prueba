<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.1//EN” “http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd”>
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <title>Formulario Autos</title>
            </head>
            <style type="text/css">
                body {margin: 20px; 
                background-color: grey;
                font-family: Verdana, Helvetica, sans-serif;
                font-size: 90%;}
                h1 {color: yellow;
                border-bottom: 1px solid yellow;}
                h2 {font-size: 1.2em;
                color: #4A0048;}
            </style>
<body>
    <b> <h1>RESPUESTA</h1></b>
<?php
    $matricula = $_POST["matricula"];
            $datos = array(
                'PEP3837' => array('Auto' => array('marca' => "TESLA, CYBERTRUCK",
                'modelo' => 2020, 'tipo' => "camioneta"), 'Propietario' => array(
                'nombre' => "Noe Martinez",
                'ciudad' => "Veracruz.", 
                'direccion' => "Ignacio de la llave")),
                
                'ZSE62320' => array('Auto' => array('marca' => " Honda Insight",
                'modelo' => 2022, 'tipo' => "sedan"), 'Propietario' => array(
                'nombre' => "Carmen Barragan", 
                'ciudad' => "Puebla",
                'direccion' => "Angelopolis")),
            
                'WQO5672' => array('Auto' => array('marca' => "Ford Focus",
                'modelo' => 2022, 'tipo' => "hachback"), 'Propietario' => array(
                'nombre' => "Gillermo Ochoa", 
                'ciudad' => "CDMX.",
                'direccion' => "Comanita")),
            
                'REW3459' => array('Auto' => array('marca' => "Merdes Benz",
                'modelo' => 2021, 'tipo' => "camioneta"), 'Propietario' => array(
                'nombre' => "Alexis Vega", 
                'ciudad' => "Guadalajara",
                'direccion' => "Los girasoles")),
            
                'YTR6390' => array('Auto' => array('marca' => "Kia Forte ",
                'modelo' => 2022, 'tipo' => "sedan"), 'Propietario' => array(
                'nombre' => "Alex Patiño",
                'ciudad' => "Michoacan.", 
                'direccion' => "Francisco Leal")),
            
                'OIU1129' => array('Auto' => array('marca' => "Toyota Corolla",
                'modelo' => 2019, 'tipo' => "hachback"), 'Propietario' => array(
                'nombre' => "Rodrigo Pelaez",
                'ciudad' => "Sinaloa.", 
                'direccion' => "Ocoroni")),
            
                'POP4178' => array('Auto' => array('marca' => "Volkswagen Golf",
                'modelo' => 2021, 'tipo' => "hachback"), 'Propietario' => array(
                'nombre' => "Veronica Valerde",
                'ciudad' => "CDMX", 
                'direccion' => "Tacubaya")),
                
                'DSA1273' => array('Auto' => array('marca' => "Hyundai Elantra",
                'modelo' => 2022, 'tipo' => "sedan"), 'Propietario' => array(
                'nombre' => "Rosa Perez",
                'ciudad' => "Tlaxcala", 
                'direccion' => "Santa Ana")),
                
                'HGF3416' => array('Auto' => array('marca' => "AUDI, A4",
                'modelo' => 2021, 'tipo' => "sedan"), 'Propietario' => array(
                'nombre' => "Vicente Zavaleta",
                'ciudad' => "Puebla.", 
                'direccion' => "Tetela")),

                'LKJ8192' => array('Auto' => array('marca' => "MAZDA 3",
                'modelo' => 2023, 'tipo' => "sedan"), 'Propietario' => array(
                'nombre' => "Ian Juarez",
                'ciudad' => "Puebla.", 
                'direccion' => "Calle 5 norte")),

                'MKL2219' => array('Auto' => array('marca' => "CHEVROLET, SILVERADO",
                'modelo' => 2020, 'tipo' => "camioneta"), 'Propietario' => array(
                'nombre' => "Luis Reyes",
                'ciudad' => "Villahermosa", 
                'direccion' => "Comalcalco")),

                'CVN9813' => array('Auto' => array('marca' => "FORD, LOBO",
                'modelo' => 2023, 'tipo' => "camioneta"), 'Propietario' => array(
                'nombre' => "Felix Martinez",
                'ciudad' => "Veracruz.", 
                'direccion' => "Aculzingo centro.")),

                'WAX5188' => array('Auto' => array('marca' => "BMW Z4",
                'modelo' => 2015, 'tipo' => "hachback"), 'Propietario' => array(
                'nombre' => "Jose Martinez",
                'ciudad' => "Puebla.", 
                'direccion' => "Xilotzingo")),

                'GOU7755' => array('Auto' => array('marca' => "HONDA CIVIC",
                'modelo' => 2019, 'tipo' => "sedan"), 'Propietario' => array(
                'nombre' => "Eduardo Morales",
                'ciudad' => "Veracruz", 
                'direccion' => "Boca del rio")),

                'HYI7777' => array('Auto' => array('marca' => "Suzuki Swift",
                'modelo' => 2022, 'tipo' => "hachback"), 'Propietario' => array(
                'nombre' => "Francisco Juarez",
                'ciudad' => "CDMX.", 
                'direccion' => "Polanco")),      );  
                
            print_r($datos);
            echo "<br><br>";
            echo "Datos del autmovil con matricula <b>$matricula</b> <b>:</b><br>";
    

            foreach($datos[$matricula] as $mat => $dat)
            {  echo "<b>$mat </b><br>";
                foreach($dat as $contenido)
                {  print_r($contenido);
                    echo "<br>";
            }echo "<br>";
            } echo "<b><br> Datos de todas las unidades registradas.-<br></b>"  ;  
            foreach($datos as $mat => $dat)
            {  echo "<b>$mat </b><br>";
                foreach($dat as $contenido)
                {  foreach($contenido as $mostrar)
                    {  print_r($mostrar);
                    echo "<br>";  }
                }  echo "<br>";
            }  echo '<br><br>';    ?>

</body>
</html>