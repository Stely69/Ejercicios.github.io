<?php

define('URL_SEPARATOR', '/');

//--- Esta función permite escribir en consola cualquier tipo de dato. 
//   Incluyendo el contenido completo de los diferentes tipos de matrices.
//   En la primera línea escribe el nombre de la variable y luego el contenido.
function write_to_console($data) {

    $console = 'console.log("' . getVariableName($data) . ' (' . gettype($data) . ')");';
    $console = sprintf('<script>%s</script>', $console);
    echo $console;

    $console = 'console.log(' . json_encode($data) . ');';
    $console = sprintf('<script>%s</script>', $console);
    echo $console;
}

// Función que returna el nombre de la variable
function getVariableName($var) {
    foreach($GLOBALS as $varName => $value) {
        if ($value === $var) {
            return $varName;
        }
    }
    return;
}

// Función que muestra en mensaje emergente el estado actual de una variable
function write_estado_var($data) {

    $msgAlert1 = getVariableName($data) . ' (' . gettype($data) . ')';
    $msgAlert2 = json_encode($data);
    $msgAlert = sprintf("<script>%s</script>", "alert('".$msgAlert1."\\n".$msgAlert2."');");
    echo $msgAlert;
}

// Función que redirige el control de ejecución hacia otro archivo PHP
function RedirectToURL($url,$metodo,$espera_miliseg) {
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    //$extra = 'thank-you.html';
    //header("Location: http://$host$uri/$extra");    

    write_to_console("redireccionando a.... Location: http://$host$uri/$url");

    switch ($metodo) {
        case 1: header("Location: http://$host$uri/$url");
                exit;   //se recomienda uso de exit() para interrumpir y entregar el control al nuevo script de la página receptora.
                break;

        case 2: //se ejecuta en el momento en que la página es devuelta a Cliente
                //al ser tomada por el navegador web
                echo "<meta http-equiv='refresh' content='$espera_miliseg; url=" . 
                     "http://$host$uri/$url'>"; 
                break;

        case 3: //se ejecuta en el momento en que la página es devuelta a Cliente
                //al ser tomada por el navegador web (desde javascript)
                //fuente:  https://professor-falken.com/programacion/javascript/como-redirigir-o-redireccionar-a-otra-pagina-web-en-javascript/

                echo "<script type='text/javascript'>\n
                     setTimeout( function() {window.location.href = 'http://$host$uri/$url'; }, $espera_miliseg );\n
                     </script>";
                break;
    }  
    
}

// Función para Actualización automática de la página actual, lanzado desde 
// PHP con código JavaScript, se ejecuta en el entorno de cliente en el momento
// en que se requiera por acción de un botón, link o programa
// fuente.... https://www.miguelmanchego.com/2009/javascript-redirigir-actualizar-pasado-un-tiempo/
function ActualizarPagina($espera_miliseg) {
    echo "<script type='text/javascript'>\n
         setTimeout('document.location.reload()', $espera_miliseg );\n
         </script>";    
}

// Función para Saltar a una página ANTERIOR (nPaginas) representa la CANTIDAD de 
// páginas a retroceder (DEBE SER INFORMADO NEGATIVO)
// El segundo parámetro permite un tiempo de espera en MILISEGUNDOS
// fuente.... http://www.briored.com/javascript/volver-la-pagina-anterior-con-javascript/
function RegresarPaginaAnterior($nPaginas,$espera_miliseg) {
    echo "<script type='text/javascript'>\n
         setTimeout('history.go($nPaginas)', $espera_miliseg );\n
         </script>";    
}


/**
   * Fix Incomplete Object PHP error caused by SA-CORE-2019-003 security release which
   * uses unserialize($values, ['allowed_classes' => FALSE]); and thus turns the unserialized
   * object into a "__PHP_Incomplete_Class" object.
   * @param $object
   * @return mixed
   */
function fixIncompleteObject($object) {
    if(get_class($object) === "__PHP_Incomplete_Class") {

      return ($object = unserialize(serialize($object)));
    }
    return $object;
}

// ****  CONFIGURACIÓN EVENTOS ***** [spl_autoload_register]
//-----------------------------------------------------------------
//----- Verificamos si existe en memoria la definición previa de la clase
//      o clases requeridas el módulo del sistema que se está ejecutando  
//    (método [spl_autoload_register] para carga automática cuando no exista la carga previa)
//    (ver uso... http://manuales.guebs.com/php/function.spl-autoload-register.html)
spl_autoload_register( function( $NombreClase ) {
    $carpetaClases= 'config';
    $rutaClase = "./$carpetaClases/$NombreClase.php";

        if (file_exists($rutaClase)) {
            include_once($rutaClase);
        } else {
            write_to_console("No es posible cargar la clase: $NombreClase");
            write_to_console("Error No. " . strval(E_USER_WARNING));
            trigger_error("No es posible cargar la clase: $NombreClase", E_USER_WARNING);
        }
}
);


?>