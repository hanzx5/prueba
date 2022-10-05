<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.1//EN” “http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd”>
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <title>Formulari 1 </title>
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
        </head>
<body>
        <b><h1>RESPUESTA:</h1> </b>  <br><br>
      <?php
          $edad = $_POST["edad"];
          $sexo = $_POST["sexo"];
          if($edad >= 18 && $edad <= 35 && $sexo == "Femenino")
          {  echo "Usted esta en  rango de edad y es de genero femenino";
          }else  { echo "Usted no esta en  rango de edad o no es de genero femenino"; }   ?>
  </body>
</html> 